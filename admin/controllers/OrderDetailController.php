<?php

function order_details_ListtAll(){
    $view = 'order_details/index';
    $title = 'Danh sách Order Details';
    $script = 'datatable';
    $script2 = 'order_details/script';
    $style = 'datatable';
    $order_details = listAll('order_details');

    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function order_detail_Create(){
    $view = 'order_details/create';
    $title = 'Thêm mới Order Detail';
    $orders = List_all_orders();
    $products = List_all_products();
    if(!empty($_POST)){
        $data = [
            "order_id" => $_POST['order_id'],
            "product_id" => $_POST['product_id'],
            "price" => $_POST['price'],
            "quantity" => $_POST['quantity'],
        ];
        $errors = order_detail_validateCreate($data);
        if(!empty($errors)){
            $_SESSION['errors'] = $errors;
            $_SESSION['data'] = $data;
        }else{
        
            insert('order_details',$data);
            $_SESSION['success'] = "Thao tác thành công";
            header("Location: " . BASE_URL_ADMIN . "?act=order_details");
        }

    }
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function order_detail_ShowOne($id){
    $order_detail = showOne('order_details',$id);
    if(empty($order_detail)){
        e404();
    }
    $view = 'order_details/show';
    $title = 'Chi tiết Order Detail';
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function order_detail_Update($id){
    $order_detail = showOne('order_details',$id);
    if(empty($order_detail)){
        e404();
    }
    if(!empty($_POST)){
        $data = [
            "price" => $_POST['price'],
            "quantity" => $_POST['quantity'],
        ];
        $errors = order_detail_validateUpdate($id, $data);
        if(!empty($errors)){
            $_SESSION['errors'] = $errors;
            $_SESSION['data'] = $data;
        }else{
        
            update('order_details',$id,$data);
            $_SESSION['success'] = "Thao tác thành công";
            header("Location: " . BASE_URL_ADMIN . "?act=order_details");
        }
        
    }
    $view = 'order_details/update';
    $title = 'Cập nhật';
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}

function order_detail_Delete($id){
    delete2('order_details',$id);
    header("Location: ".BASE_URL_ADMIN."?act=order_details");
}

function order_detail_validateCreate($data){

    $errors = [];

    //
    if (empty ($data['price'])) {
        $errors[] = "Price không được để trống";
    }
    //
    if (empty ($data['quantity'])) {
        $errors[] = "Quantity không được để trống";
    }

    return $errors;
    
}

function order_detail_validateUpdate($id, $data){

    $errors = [];

    //
    if (empty ($data['price'])) {
        $errors[] = "Price không được để trống";
    }
    //
    if (empty ($data['quantity'])) {
        $errors[] = "Quantity không được để trống";
    }

    return $errors;
    
}

?>