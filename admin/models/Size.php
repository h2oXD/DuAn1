<?php 
function showOneBySize($id)
{
    try {
        $sql = "SELECT * FROM product_attributes WHERE product_size_id = :id";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(":id", $id);

        $stmt->execute();

        return $stmt->fetch() ? true : false;
    } catch (\Exception $e) {
        debug($e);
    }

}