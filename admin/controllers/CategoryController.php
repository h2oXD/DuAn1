<?php

function Categories_ListtAll(){
    $view = 'categories/index';
    $title = 'Danh sách Categories';
    $script = 'datatable';
    $script2 = 'categories/script';
    $style = 'datatable';
    $categories = listAll('product_categories');

    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function Category_Create(){
    $view = 'categories/create';
    $title = 'Thêm mới Categories';
    if(!empty($_POST)){
        $data = [
            "name" => $_POST['name'],
        ];
        insert('product_categories',$data);
    }
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function Catagory_ShowOne($id){
    $category = showOne('product_categories',$id);
    if(empty($category)){
        e404();
    }
    $view = 'categories/show';
    $title = 'Chi tiết Categories';
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function Category_Update($id){
    $category = showOne('product_categories',$id);
    if(empty($category)){
        e404();
    }
    if(!empty($_POST)){
        $data = [
            "name" => $_POST['name'] ?? null,
            "is_active" => $_POST['name'],
        ];
        update('product_categories',$id,$data);
    }
    $view = 'categories/update';
    $title = 'Cập nhật';
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}

function Category_Delete($id){
    delete2('product_categories',$id);
    header("Location: ".BASE_URL_ADMIN."?act=Catagories");
}

function validateCreate($data){
    // name - bắt buộc, độ dài tối đa 50 kí tự, không được trùng

    $errors = [];

    if(empty($data['name'])){
        $errors[] = "Trường name là bắt buộc";
    }elseif(strlen($data['name']) > 50){
        $errors[] = "Trường name độ dài tối đa 50 kí tự";
    }elseif(!checkUniqueName('categories', $data['name'])){
        $errors[] = "Name đã được sử dụng";
    }

    return $errors;
    
}

function validateUpdate($id, $data){
    // name - bắt buộc, độ dài tối đa 50 kí tự, không được trùng

    $errors = [];

    if(empty($data['name'])){
        $errors[] = "Trường name là bắt buộc";
    }elseif(strlen($data['name']) > 50){
        $errors[] = "Trường name độ dài tối đa 50 kí tự";
    }elseif(!check_UniqueName_For_Update('categories', $id, $data['name'])){
        $errors[] = "Name đã được sử dụng";
    }

    return $errors;
    
}

?>