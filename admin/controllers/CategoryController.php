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
            "thumbnail" => $_FILES['thumbnail'],
        ];

        $thumbnail = $data['thumbnail'];
        $errors = Category_validateCreate($data);
        if(!empty($errors)){
            $_SESSION['errors'] = $errors;
            $_SESSION['data'] = $data;
        }else{
            if (!empty($thumbnail)) {
                $data['thumbnail'] = upload_file($thumbnail, 'uploads/product/');
            }
        
            insert('product_categories',$data);
            $_SESSION['success'] = "Thao tác thành công";
            header("Location: " . BASE_URL_ADMIN . "?act=categories");
        }

    }
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function Category_ShowOne($id){
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
            "name" => $_POST['name'],
            "is_active" => $_POST['is_active'],
            "thumbnail" => $_FILES['thumbnail'],
        ];

        $thumbnail = $data['thumbnail'];
        $old_thumbnail = $_POST['old_thumbnail'];
        $errors = Category_validateUpdate($id,$data);
        if(!empty($errors)){
            $_SESSION['errors'] = $errors;
            $_SESSION['data'] = $data;
        }else{
            if ($thumbnail['size'] > 0) {
                $data['thumbnail'] = upload_file($thumbnail, 'uploads/product/');
                update('product_categories',$id,$data);
            }else{
                update_category_by_old_image($id,$data['name'],$old_thumbnail,$data['is_active']);
            }
        
            $_SESSION['success'] = "Thao tác thành công";
            header("Location: " . BASE_URL_ADMIN . "?act=categories");
        }
        
    }
    $view = 'categories/update';
    $title = 'Cập nhật';
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}

function Category_Delete($id){
    delete2('product_categories',$id);
    header("Location: ".BASE_URL_ADMIN."?act=categories");
}

function Category_validateCreate($data){
    // name - bắt buộc, độ dài tối đa 50 kí tự, không được trùng

    $errors = [];

    if(empty($data['name'])){
        $errors[] = "Trường name là bắt buộc";
    }elseif(strlen($data['name']) > 50){
        $errors[] = "Trường name độ dài tối đa 50 kí tự";
    }elseif(!checkUniqueName('product_categories', $data['name'])){
        $errors[] = "Name đã được sử dụng";
    }
    //
    if ($data['thumbnail']['size']<=0) {
        $errors[] = "Ảnh không được để trống";
    }

    return $errors;
    
}

function Category_validateUpdate($id, $data){
    // name - bắt buộc, độ dài tối đa 50 kí tự, không được trùng

    $errors = [];

    if(empty($data['name'])){
        $errors[] = "Trường name là bắt buộc";
    }elseif(strlen($data['name']) > 50){
        $errors[] = "Trường name độ dài tối đa 50 kí tự";
    }elseif(!checkUniqueNameForUpdate('product_categories', $id, $data['name'])){
        $errors[] = "Name đã được sử dụng";
    }

    return $errors;
    
}

?>