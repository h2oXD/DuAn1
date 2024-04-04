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

