<?php 
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