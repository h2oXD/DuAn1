<?php

function brand_ListtAll(){
    $view = 'brand/index';
    $title = 'Danh sách brands';
    $script = 'datatable';
    $script2 = 'brand/script';
    $style = 'datatable';
    $brand = listAll('product_brands');

    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function brand_Create(){
    $view = 'brand/create';
    $title = 'Thêm mới brands';
    if(!empty($_POST)){
        $data = [
            "name" => $_POST['name'],
        ];
        
        $errors = brand_validateCreate($data);
           
        if(!empty($errors)){
            $_SESSION['errors'] = $errors;
            $_SESSION['data'] = $data;
        }else{
            insert('product_brands',$data);

            $_SESSION['success'] = "Thao tác thành công";
            header("Location: " . BASE_URL_ADMIN . "?act=brands");
        }

    }
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function brand_ShowOne($id){
    $brand = showOne('product_brands',$id);
    if(empty($brand)){
        e404();
    }
    $view = 'brand/show';
    $title = 'Chi tiết brands';
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function brand_Update($id){
    $brand = showOne('product_brands',$id);
    if(empty($brand)){
        e404();
    }
    if(!empty($_POST)){
        $data = [
            "name" => $_POST['name'] ?? null,
        ];
        $errors = brand_validateUpdate($id,$data);
        if(!empty($errors)){
            $_SESSION['errors'] = $errors;
            $_SESSION['data'] = $data;
        }else{
        
            update('product_brands',$id,$data);
            $_SESSION['success'] = "Thao tác thành công";
            header("Location: " . BASE_URL_ADMIN . "?act=brands");
        }
        
    }
    $view = 'brand/update';
    $title = 'Cập nhật';
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}

function brand_Delete($id){

    delete2('product_brands',$id);
    header("Location: ".BASE_URL_ADMIN."?act=brands");
}

function brand_validateCreate($data){
    //brand - bắt buộc, độ dài tối đa 50 kí tự, không được trùng

    $errors = [];

    if(empty($data['name'])){
        $errors[] = "Trường brand là bắt buộc";
    }elseif(strlen($data['name']) > 50){
        $errors[] = "Trường brand độ dài tối đa 50 kí tự";
    }
    return $errors;
    
}

function brand_validateUpdate($id, $data){
    // name - bắt buộc, độ dài tối đa 50 kí tự, không được trùng

    $errors = [];

    if(empty($data['name'])){
        $errors[] = "Trường brand là bắt buộc";
    }elseif(strlen($data['name']) > 50){
        $errors[] = "Trường brand độ dài tối đa 50 kí tự";
    }
    return $errors;
    
}

?>