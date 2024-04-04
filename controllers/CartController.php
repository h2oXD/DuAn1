<?php
function addCart($id)
{
    if (!isset($_SESSION['user'])) {
        header("Location:" . BASE_URL . "?act=login");
        exit();
    }
    $product = showOne('products', $id);
    if (empty($product)) {
        debug('404NotFound');
    }
    $cart = showOneCart($_SESSION['user']['id']);
    if (empty($cart)) {
        $cart = [];
        $cart['id'] = insert_get_last_id('carts', ['user_id' => $_SESSION['user']['id']]);
        $cart['user_id'] = $_SESSION['user']['id'];
    }
    // $_SESSION['cartID'] = $cart['id'];
    if (isset($_POST['quantity'])) {
        // debug($_POST);
        $data = [
            'cart_id' => $cart['id'] ?? null,
            'product_id' => $id ?? null,
            'color' => $_POST['color'] ?? null,
            'size' => $_POST['size'] ?? null,
            'quantity' => $_POST['quantity'] ?? null,
        ];

        $errors = validateCart($data);
        $check = true;
        if (!empty($errors)) {
            $_SESSION['errors'] = $errors;
            $check = false;
            header("Location: " . BASE_URL . "?act=chitiet&id=" . $data['product_id']);
        } elseif ($check) {
            // debug($data);
            if (empty(getCart($cart['id'], $id, $_POST['color'], $_POST['size']))) {
                insert('cart_items', $data);
            } else {
                // debug($id);
                updateCart($cart['id'], $id, $_POST['color'], $_POST['size'], $_POST['quantity']);
            }

            header("Location: " . BASE_URL . "?act=view-cart");
        }
    }
}
function validateCart($data)
{
    $errors = [];
    if (empty($data['color'])) {
        $errors['errorColor'] = "Bạn chưa chọn màu sắc";
    }
    if (empty($data['size'])) {
        $errors['errorSize'] = "Bạn chưa chọn kích thước";
    }
    return $errors;
}
function viewcart()
{
    if (!isset($_SESSION['user'])) {
        header("Location:" . BASE_URL . "?act=login");
        exit();
    }
    $cart = showOneCart($_SESSION['user']['id']);
    if($cart){
        $_SESSION['cart'] = listAllCartByUser('cart_items', $cart['id']);
    }
    
    $view = "cart/view-cart";
    $cartUser = getCartByUser($_SESSION['user']['id']);

    // debug($cartUser);
    require PATH_VIEW . 'layouts/master.php';
}
function deleteCart($item)
{
    if (!isset($_SESSION['user'])) {
        header("Location:" . BASE_URL . "?act=login");
        exit();
    }
    // debug($_SESSION['cart']);
    foreach ($_SESSION['cart'] as $c) {
        if ($c['item'] == $item) {
            deleteCartItem($item);
        }
    }
    header("Location: " . BASE_URL . "?act=view-cart");
}
