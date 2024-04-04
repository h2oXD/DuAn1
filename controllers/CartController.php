<?php 
function addCart($id){
    if(!isset($_SESSION['user'])){header("Location:" . BASE_URL ."?act=login"); exit();}
    $product = showOne('products',$id);
    if(empty($product)){
        debug('404NotFound');
    }
    $cart = showOneCart($_SESSION['user']['id']);
    if(empty($cart)){
       $cart = insert_get_last_id('carts',['user_id' => $_SESSION['user']['id']]);
    }
    if(isset($_POST['quantity'])){
        // debug($_POST);
        $data = [
            'cart_id'=> $cart['id'] ?? null,
            'product_id' => $id ?? null,
            'color' => $_POST['color'] ?? null,
            'size' => $_POST['size'] ?? null,
            'quantity' => $_POST['quantity'] ?? null,
        ];
        if(empty(getCart($cart['id'],$id,$_POST['color'],$_POST['size']))){
            insert('cart_items',$data);
        }else{
            // debug($id);
            updateCart($cart['id'],$id,$_POST['color'],$_POST['size'],$_POST['quantity']);
        }
        
        header("Location: " . BASE_URL . "?act=view-cart");
    }
   
}
function viewcart(){
    if(!isset($_SESSION['user'])){header("Location:" . BASE_URL ."?act=login"); exit();}
    $view = "cart/view-cart";
    $cartUser = getCartByUser($_SESSION['user']['id']);

    // debug($cartUser);
    require PATH_VIEW.'layouts/master.php';
}
function deleteCart($item){
    if(!isset($_SESSION['user'])){header("Location:" . BASE_URL ."?act=login"); exit();}
    deleteCartItem($item);
    header("Location: " . BASE_URL . "?act=view-cart");
}

