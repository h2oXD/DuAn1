<?php

function user_addresses_ListtAll(){
    $view = 'user_addresses/index';
    $title = 'Danh sách Addresses';
    $script = 'datatable';
    $script2 = 'user_addresses/script';
    $style = 'datatable';
    $user_addresses = listAll('user_addresses');

    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function user_address_Create(){
    $view = 'user_addresses/create';
    $title = 'Thêm mới Addresses';
    $user_addresses = listAll_users();
    if(!empty($_POST)){
        $data = [
            "user_id" => $_POST['user_id'],
            "receiver" => $_POST['receiver'],
            "delivery_address" => $_POST['delivery_address'],
            "phone_number" => $_POST['phone_number'],
            "email" => $_POST['email'],
        ];
        $errors = user_address_validateCreate($data);
        if(!empty($errors)){
            $_SESSION['errors'] = $errors;
            $_SESSION['data'] = $data;
        }else{
        
            insert('user_addresses',$data);
            $_SESSION['success'] = "Thao tác thành công";
            header("Location: " . BASE_URL_ADMIN . "?act=user_addresses");
        }

    }
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function user_address_ShowOne($id){
    $user_address = showOne('user_addresses',$id);
    if(empty($user_address)){
        e404();
    }
    $view = 'user_addresses/show';
    $title = 'Chi tiết Address';
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function user_address_Update($id){
    $user_address = showOne('user_addresses',$id);
    $user_addresses = listAll_users();
    if(empty($user_address)){
        e404();
    }
    if(!empty($_POST)){
        $data = [
            "receiver" => $_POST['receiver'],
            "delivery_address" => $_POST['delivery_address'],
            "phone_number" => $_POST['phone_number'],
            "email" => $_POST['email'],
        ];
        $errors = user_address_validateUpdate($id, $data);
        if(!empty($errors)){
            $_SESSION['errors'] = $errors;
            $_SESSION['data'] = $data;
        }else{
        
            update('user_addresses',$id,$data);
            $_SESSION['success'] = "Thao tác thành công";
            header("Location: " . BASE_URL_ADMIN . "?act=user_addresses");
        }
        
    }
    $view = 'user_addresses/update';
    $title = 'Cập nhật';
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}

function user_address_Delete($id){
    delete2('user_addresses',$id);
    header("Location: ".BASE_URL_ADMIN."?act=user_addresses");
}

function user_address_validateCreate($data){

    $errors = [];

    //
    if(empty($data['receiver'])){
        $errors[] = "Trường receiver là bắt buộc";
    }elseif(strlen($data['receiver']) > 50){
        $errors[] = "Trường receiver độ dài tối đa 50 kí tự";
    }
    //
    if (empty ($data['email'])) {
        $errors[] = "Email không được để trống";
    } else if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email không đúng định dạng';
    }
    //
    if (empty ($data['delivery_address'])) {
        $errors[] = "Delivery Address không được để trống";
    }
    //
    if (empty ($data['phone_number'])) {
        $errors[] = "Phone number không được để trống";
    }

    return $errors;
    
}

function user_address_validateUpdate($id, $data){

    $errors = [];

    if(empty($data['receiver'])){
        $errors[] = "Trường name là bắt buộc";
    }elseif(strlen($data['receiver']) > 50){
        $errors[] = "Trường name độ dài tối đa 50 kí tự";
    }
    //
    if (empty ($data['email'])) {
        $errors[] = "Email không được để trống";
    } else if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email không đúng định dạng';
    }
    //
    if (empty ($data['delivery_address'])) {
        $errors[] = "Delivery Address không được để trống";
    }
    //
    if (empty ($data['phone_number'])) {
        $errors[] = "Phone number không được để trống";
    }

    return $errors;
    
}

?>