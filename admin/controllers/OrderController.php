<?php

function orders_ListtAll(){
    $view = 'orders/index';
    $title = 'Danh sách Orders';
    $script = 'datatable';
    $script2 = 'orders/script';
    $style = 'datatable';
    $orders = listAll('orders');

    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function order_Create(){
    $view = 'orders/create';
    $title = 'Thêm mới Order';
    $users = listAll_users();
    if(!empty($_POST)){
        $data = [
            "user_id" => $_POST['user_id'],
            "frist_name" => $_POST['frist_name'],
            "last_name" => $_POST['last_name'],
            "phone_number" => $_POST['phone_number'],
            "address" => $_POST['address'],
            "email" => $_POST['email'],
            "note" => $_POST['note'],
            "order_date" => $_POST['order_date'],
            "status" => $_POST['status'],
        ];
        $errors = order_validateCreate($data);
        if(!empty($errors)){
            $_SESSION['errors'] = $errors;
            $_SESSION['data'] = $data;
        }else{
        
            insert('orders',$data);
            $_SESSION['success'] = "Thao tác thành công";
            header("Location: " . BASE_URL_ADMIN . "?act=orders");
        }

    }
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function order_ShowOne($id){
    $order = showOne('orders',$id);
    if(empty($order)){
        e404();
    }
    $view = 'orders/show';
    $title = 'Chi tiết Order';
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function order_Update($id){
    $order = showOne('orders',$id);
    if(empty($order)){
        e404();
    }
    if(!empty($_POST)){
        $data = [
            "frist_name" => $_POST['frist_name'],
            "last_name" => $_POST['last_name'],
            "phone_number" => $_POST['phone_number'],
            "address" => $_POST['address'],
            "email" => $_POST['email'],
            "note" => $_POST['note'],
            "order_date" => $_POST['order_date'],
            "status" => $_POST['status'],
        ];
        $errors = order_validateUpdate($id, $data);
        if(!empty($errors)){
            $_SESSION['errors'] = $errors;
            $_SESSION['data'] = $data;
        }else{
        
            update('orders',$id,$data);
            $_SESSION['success'] = "Thao tác thành công";
            header("Location: " . BASE_URL_ADMIN . "?act=orders");
        }
        
    }
    $view = 'orders/update';
    $title = 'Cập nhật';
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}

function order_Delete($id){
    delete2('orders',$id);
    header("Location: ".BASE_URL_ADMIN."?act=orders");
}

function order_validateCreate($data){

    $errors = [];

    //
    if(empty($data['frist_name'])){
        $errors[] = "Trường first name là bắt buộc";
    }elseif(strlen($data['frist_name']) > 50){
        $errors[] = "Trường first name độ dài tối đa 50 kí tự";
    }
    //
    if(empty($data['last_name'])){
        $errors[] = "Trường last name là bắt buộc";
    }elseif(strlen($data['last_name']) > 50){
        $errors[] = "Trường last name độ dài tối đa 50 kí tự";
    }
    //
    if (empty ($data['email'])) {
        $errors[] = "Email không được để trống";
    } else if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email không đúng định dạng';
    }
    //
    if (empty ($data['address'])) {
        $errors[] = "Address không được để trống";
    }
    //
    if (empty ($data['phone_number'])) {
        $errors[] = "Phone number không được để trống";
    }
    //
    if (empty ($data['order_date'])) {
        $errors[] = "Order date không được để trống";
    }
    //
    if (empty ($data['status'])) {
        $errors[] = "Status không được để trống";
    }

    return $errors;
    
}

function order_validateUpdate($id, $data){

    $errors = [];

    //
    if(empty($data['frist_name'])){
        $errors[] = "Trường first name là bắt buộc";
    }elseif(strlen($data['frist_name']) > 50){
        $errors[] = "Trường first name độ dài tối đa 50 kí tự";
    }
    //
    if(empty($data['last_name'])){
        $errors[] = "Trường last name là bắt buộc";
    }elseif(strlen($data['last_name']) > 50){
        $errors[] = "Trường last name độ dài tối đa 50 kí tự";
    }
    //
    if (empty ($data['email'])) {
        $errors[] = "Email không được để trống";
    } else if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email không đúng định dạng';
    }
    //
    if (empty ($data['address'])) {
        $errors[] = "Address không được để trống";
    }
    //
    if (empty ($data['phone_number'])) {
        $errors[] = "Phone number không được để trống";
    }
    //
    if (empty ($data['order_date'])) {
        $errors[] = "Order date không được để trống";
    }
    //
    if (empty ($data['status'])) {
        $errors[] = "Status không được để trống";
    }

    return $errors;
    
}

?>