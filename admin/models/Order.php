<?php 
function OrderJoin(){
    try {
        $sql = "SELECT 
        tb1.id as orderID,
        tb1.receiver as nguoiNhan,
        tb1.delivery_address as diaChiNhan,
        tb1.phone_number as sdt,
        tb1.email,
        tb1.note,
        tb1.order_date,
        tb1.total_money,
        tb1.status
        FROM orders tb1 ";


        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}
function showAllOrderDetailByOrderID($id){
    try {
        $sql = "SELECT tb2.title,tb2.thumbnail,tb2.sale,tb3.name as color,tb4.size,tb1.quantity FROM order_details tb1 
        JOIN products tb2 ON tb1.product_id = tb2.id 
        JOIN product_colors tb3 ON tb1.color = tb3.id
        JOIN product_sizes tb4 ON tb1.size = tb4.id
        WHERE order_id = :id";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(":id", $id);

        $stmt->execute();

        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}
function orderStatus($id,$trangthai){
    try {
        $sql = "UPDATE orders SET `status` = :trangthai WHERE id = :id";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":trangthai", $trangthai);

        $stmt->execute();

        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}