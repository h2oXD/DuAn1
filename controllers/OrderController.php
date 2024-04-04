<?php 
    function ship(){
        if(!isset($_SESSION['user'])){header("Location:" . BASE_URL ."?act=login"); exit();}
        $user_address = getAddressUser($_SESSION['user']['id']);
        $cartUser = getCartByUser($_SESSION['user']['id']);
        $view = "order/ship-checkout";
        
        require PATH_VIEW.'layouts/master.php';
    }
    function confirm(){
        if(!isset($_SESSION['user'])){header("Location:" . BASE_URL ."?act=login"); exit();}
        if(isset($_POST['thanhtoan']) && isset($_SESSION['cart'])){
            $data = [
                'receiver' => $_POST['receiver'] ?? null,
                'delivery_address' => $_POST['delivery_address'] ?? null,
                'phone_number' => $_POST['phone_number'] ?? null,
                'email' => $_POST['email'] ?? null,
            ];
            $check = validateUserAddress($data);
            if($check){
                $user_address = getAddressUser($_SESSION['user']['id']);
                if($user_address == null && isset($_POST['saveAddress']) && $_POST['saveAddress'] == 1){
                    $data['user_id'] = $_SESSION['user']['id'];
                    insert('user_addresses',$data);
                }else{
                    if(isset($_POST['saveAddress']) && $_POST['saveAddress'] == 1){
                        update('user_addresses',$user_address['id'],$data);
                    }
                }
                
                $data+= [
                    'total_money' => $_POST['total_money'] ?? null,
                    'user_id' => $_SESSION['user']['id'] ?? null,
                    'note' => $_POST['note'] ?? null
                ];
                
                $cartUser = showOneCart($data['user_id']);
                
                if($cartUser){
                    $orderID = insert_get_last_id('orders',$data);
                    foreach($_SESSION['cart'] as $item){
                    $data2 = [
                        'order_id' => $orderID,
                        'product_id' => $item['product_id'],
                        'color' =>  $item['color'],
                        'size' =>   $item['size'],
                        'quantity' =>   $item['quantity']
                    ];
                    insert('order_details',$data2);
                }
                
                    deleteCartItemsByCartID($_SESSION['cart'][0]['cart_id']);
                    delete2('carts',$_SESSION['cart'][0]['cart_id']);
                    unset($_SESSION['cart']);
                    $orderCf = getOrderByID($orderID);
                    // debug($orderCf);
                    $view = "order/confirm";
                    // debug($_POST);
                    require PATH_VIEW.'layouts/master.php';
                }
            }else{
                header("Location: ?act=ship-checkout");
                exit();
            }
        }else{
            header("Location:" . BASE_URL ."?act=ship-checkout"); exit();
        }
    }
    function validateUserAddress($data){
        $check = true;
        if(strlen($data['receiver']) <= 3 || strlen($data['receiver']) >=50){
            $_SESSION['errors']['errorReceiver'] = "Tên người nhận phải từ 3->50 ký tự";
            $check = false;
        }
        if(empty($data['delivery_address'])){
            $_SESSION['errors']['delivery_address'] = "Địa chỉ nhận hàng không được để trống ";
            $check = false;
        }
        if(empty($data['phone_number'])){
            $_SESSION['errors']['phone_number'] = "Số điện thoại không được để trống";
            $check = false;
        }
        if(strlen($data['email']) <1){
            $_SESSION['errors']['email'] = "Không đúng định dạng";
            $check = false;
        }
        return $check;
    }