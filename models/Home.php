<?php 
function countCart($user_id){
    $sql = "SELECT COUNT(item) AS dem FROM cart_items tb1 JOIN carts tb2 ON tb1.cart_id = tb2.id WHERE tb2.user_id = :user_id";
            // debug($sql);
            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":user_id", $user_id);

            $stmt->execute();

            return $stmt->fetch();
}