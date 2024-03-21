<?php

function color_ListtAll(){
    $view = 'color/index';
    $title = 'Danh sách Colors';
    $script = 'datatable';
    $script2 = 'color/script';
    $style = 'datatable';
    $color = listAll('product_colors');

    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function color_Create(){
    $view = 'color/create';
    $title = 'Thêm mới Colors';
    if(!empty($_POST)){
        $data = [
            "color_name" => $_POST['color_name'],
        ];
        $errors = Color_validateCreate($data);
        if(!empty($errors)){
            $_SESSION['errors'] = $errors;
            $_SESSION['data'] = $data;
        }else{
            insert('product_colors',$data);

            $_SESSION['success'] = "Thao tác thành công";
            header("Location: " . BASE_URL_ADMIN . "?act=colors");
        }

    }
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function color_ShowOne($id){
    $color = showOne('product_colors',$id);
    if(empty($color)){
        e404();
    }
    $view = 'color/show';
    $title = 'Chi tiết Colors';
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function color_Update($id){
    $color = showOne('product_colors',$id);
    if(empty($color)){
        e404();
    }
    if(!empty($_POST)){
        $data = [
            "color_name" => $_POST['color_name'] ?? null,
            "is_active" => $_POST['is_active'],
        ];
        $errors = Color_validateUpdate($id,$data);
        if(!empty($errors)){
            $_SESSION['errors'] = $errors;
            $_SESSION['data'] = $data;
        }else{
        
            update('product_colors',$id,$data);
            $_SESSION['success'] = "Thao tác thành công";
            header("Location: " . BASE_URL_ADMIN . "?act=colors");
        }
        
    }
    $view = 'color/update';
    $title = 'Cập nhật';
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}

function color_Delete($id){
    delete2('product_colors',$id);
    header("Location: ".BASE_URL_ADMIN."?act=colors");
}

function color_validateCreate($data){
    //name - bắt buộc, độ dài tối đa 50 kí tự, không được trùng

    $errors = [];

    if(empty($data['color_name'])){
        $errors[] = "Trường name là bắt buộc";
    }elseif(strlen($data['color_name']) > 50){
        $errors[] = "Trường name độ dài tối đa 50 kí tự";
    }elseif(checkUniqueColorName('product_colors', $data['color_name'])){
        $errors[] = "Name đã được sử dụng";
    }

    return $errors;
    
}

function color_validateUpdate($id, $data){
    // name - bắt buộc, độ dài tối đa 50 kí tự, không được trùng

    $errors = [];

    if(empty($data['color_name'])){
        $errors[] = "Trường name là bắt buộc";
    }elseif(strlen($data['color_name']) > 50){
        $errors[] = "Trường name độ dài tối đa 50 kí tự";
    }elseif(!checkUniqueColorNameForUpdate('product_colors', $id, $data['color_name'])){
        $errors[] = "Name đã được sử dụng";
    }

    return $errors;
    
}

?>