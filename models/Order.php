<?php 
function deleteCartItemsByCartID($cart_id){
    try {
        $sql = "DELETE FROM cart_items WHERE cart_id = :cart_id ";
        
        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(":cart_id", $cart_id);


        $stmt->execute();

    } catch (\Exception $e) {
        debug($e);
    }
}
function getOrderByID($order_id){
    try {
        $sql = "SELECT tb1.id,tb3.title,tb3.sale,tb2.quantity,tb1.order_date FROM orders tb1 
        JOIN order_details tb2 ON tb1.id = tb2.order_id
        JOIN products tb3 ON tb2.product_id = tb3.id
        WHERE tb1.id = :id";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(":id", $order_id);


        $stmt->execute();

        return $stmt->fetchAll();


    } catch (\Exception $e) {
        debug($e);
    }
}
function cancelOrderByID($id){
    try {
        $sql = "UPDATE orders SET `status` = 4 WHERE id = :id";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(":id", $id);


        $stmt->execute();

    } catch (\Exception $e) {
        debug($e);
    }
}

