<?php 
function showOneCart($id)
{
    try {
        $sql = "SELECT * FROM carts WHERE user_id = :user_id LIMIT 1";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(":user_id", $id);

        $stmt->execute();

        return $stmt->fetch();
    } catch (\Exception $e) {
        debug($e);
    }

}
function getCart($cart_id,$id,$colorID,$sizeID)
{
    try {
        $sql = "SELECT * FROM cart_items WHERE cart_id = :cart_id AND product_id = :id AND color = :color AND `size` = :sizeID";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(":cart_id", $cart_id);
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":color", $colorID);
        $stmt->bindParam(":sizeID", $sizeID);

        $stmt->execute();

        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }

}
function getCartByUser($user_id)
{
    try {
        $sql = "SELECT tb2.item, tb1.user_id,tb4.name,tb5.size,tb2.quantity,tb3.title,tb3.thumbnail,tb3.sale FROM carts tb1 
        JOIN cart_items tb2 ON tb1.id = tb2.cart_id 
        JOIN products tb3 ON tb2.product_id = tb3.id
        JOIN product_colors tb4 ON tb2.color = tb4.id
        JOIN product_sizes tb5 ON tb2.size = tb5.id
        WHERE user_id = :user_id";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(":user_id", $user_id);

        $stmt->execute();

        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }

}
function updateCart($cart_id,$product_id,$color,$size,$quantity)
{   
    
    try {
        $sql = "UPDATE cart_items SET quantity=quantity+$quantity WHERE cart_id = :cart_id AND `product_id` = :product_id AND color = :color AND `size` = :sizeID";
        // debug($sql);
        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(":cart_id", $cart_id);
        $stmt->bindParam(":product_id", $product_id);
        $stmt->bindParam(":color", $color);
        $stmt->bindParam(":sizeID", $size);

        $stmt->execute();
        
    } catch (\Exception $e) {
        debug($e);
    }

}
function deleteCartItem($item)
{   
    
    try {
        $sql = "DELETE FROM cart_items WHERE item = :item";
        // debug($sql);
        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(":item", $item);

        $stmt->execute();
        
    } catch (\Exception $e) {
        debug($e);
    }

}