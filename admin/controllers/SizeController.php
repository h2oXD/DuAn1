<?php 
function sizeListAll(){
    $view = 'sizes/index';
    $title = 'Danh sách Size';
    $script = 'datatable';
    $script2 = 'brand/script';
    $style = 'datatable';
    $sizes = listAll('product_sizes');

    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function sizeCreate(){
    $view = 'sizes/create';
    $title = 'Thêm mới size';
    if(!empty($_POST)){
        $data = [
            "size" => $_POST['size'],
        ];
        
        $errors = sizevalidateCreate($data);
           
        if(!empty($errors)){
            $_SESSION['errors'] = $errors;
            $_SESSION['data'] = $data;
        }else{
            insert('product_sizes',$data);

            $_SESSION['success'] = "Thao tác thành công";
            header("Location: " . BASE_URL_ADMIN . "?act=sizes");
        }

    }
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function sizevalidateCreate($data){
    //brand - bắt buộc, độ dài tối đa 50 kí tự, không được trùng

    $errors = [];

    if(empty($data['size'])){
        $errors[] = "Trường size là bắt buộc";
    }elseif(strlen($data['size']) > 50){
        $errors[] = "Trường size độ dài tối đa 50 kí tự";
    }
    return $errors;
    
}
function sizeUpdate($id){
    $view = 'sizes/update';
    $title = 'Update size';
    $size = showOne('product_sizes',$id);
    if(!empty($_POST)){
        $data = [
            "size" => $_POST['size'],
        ];
        
        $errors = sizevalidateCreate($data);
           
        if(!empty($errors)){
            $_SESSION['errors'] = $errors;
            $_SESSION['data'] = $data;
        }else{
            update('product_sizes',$id,$data);

            $_SESSION['success'] = "Thao tác thành công";
            header("Location: " . BASE_URL_ADMIN . "?act=sizes");
        }

    }
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function sizeDelete($id){
    $size = showOneBySize($id);
    if($size){
        $_SESSION['xoakhongthanhcong'] = 'Xóa không thành công';
    }else{
        delete2('product_sizes',$id);
    }
    
    header("Location: " . BASE_URL_ADMIN . "?act=sizes");
}