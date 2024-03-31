<?php 
function OrderJoin(){
    try {
        $sql = "SELECT o.name,p.title,p.thumbnail,o.note,od.quantity,od.price,o.total_money 
        FROM order_details AS od 
        JOIN orders as o 
        ON od.order_id = o.id
        JOIN products as p
        ON od.product_id = p.id
        ";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}