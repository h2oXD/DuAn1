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
function getCart($user_id,$id)
{
    try {
        $sql = "SELECT * FROM carts WHERE user_id = :user_id AND product_id = :id";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(":user_id", $user_id);
        $stmt->bindParam(":id", $id);

        $stmt->execute();

        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }

}
function updateCart($cart_id,$id,$color,$size,$quantity)
{   
    debug($id);
    try {
        $sql = "UPDATE cart_items SET quantity+=$quantity WHERE cart_id = :cart_id AND product_id = :id AND color = :color AND `size` = :sizeID";
        
        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(":cart_id", $cart_id);
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":color", $color);
        $stmt->bindParam(":sizeID", $size);

        $stmt->execute();

        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }

}