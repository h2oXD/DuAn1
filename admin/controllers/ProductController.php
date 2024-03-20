<?php 
function productListtAll(){
    $view = 'products/index';
    $title = 'Danh sách';
    $script = 'datatable';
    $script2 = 'products/script';
    $style = 'datatable';    
    $products = listAll('products');
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function productCreate(){
    $view = 'products/create';
    $title = 'Thêm mới';
    if(!empty($_POST)){
        $data = [
            "title" => $_POST['title'],
        ];
        insert('products',$data);
    }
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function productshowOne($id){
    $product = showOne('products',$id);
    if(empty($product)){
        e404();
    }
    $view = 'products/show';
    $title = 'Chi tiết ';
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function productUpdate($id){
    $product = showOne('products',$id);
    if(empty($product)){
        e404();
    }
    if(!empty($_POST)){
        $data = [
            "title" => $_POST['title'],
            "price" => $_POST['price'],
            "sale" => $_POST['sale'],
            "thumbnail" => $_POST['thumbnail'],
            "description" => $_POST['description'],
            "tags" => $_POST['tags'],
        ];
        update('products',$id,$data);
    }
    $view = 'products/update';
    $title = 'Cập nhật';
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function productDelete($id){
    delete2('products',$id);
    header("Location: ".BASE_URL_ADMIN."?act=products");
}