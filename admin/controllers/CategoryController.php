<?php

function Categories_ListtAll(){
    $view = 'categories/index';
    $title = 'Danh sách Categories';
    $script = 'datatable';
    $script2 = 'categories/script';
    $style = 'datatable';
    $categories = listAll('categories');

    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function Category_Create(){
    $view = 'categories/create';
    $title = 'Thêm mới User';
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function Catagory_ShowOne($id){
    $view = 'categories/show';
    $title = 'Chi tiết User';
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function Category_Update($id){
    $view = 'categories/update';
    $title = 'Cập nhật User';
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}

function Category_Delete($id){

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

?>