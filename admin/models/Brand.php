<?php
if (!function_exists('checkUniqueBrandName')) {
    function checkUniqueBrandName($tableName, $brand)
    {
        try {
            $sql = "SELECT * FROM $tableName WHERE brand_name = :brand_name LIMIT 1";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":brand_name", $brand);

            $stmt->execute();

            $data = $stmt->fetch();

            return empty($data) ? true : false;
        } catch (\Exception $e) {
            debug($e);
        }

    }
}
if (!function_exists('checkUniqueBrandNameForUpdate')) {
    function checkUniqueBrandNameForUpdate($tableName,$id, $brand)
    {
        try {
            $sql = "SELECT * FROM $tableName WHERE brand_name = :brand_name AND id <> :id LIMIT 1";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":brand_name", $brand);
            $stmt->bindParam(":id", $id);

            $stmt->execute();

            $data = $stmt->fetch();

            return empty($data) ? true : false;
        } catch (\Exception $e) {
            debug($e);
        }

    }
}
if (!function_exists('deleteBrand')) {
    function deleteBrand($productID) {
        try {
            $sql = "DELETE FROM products WHERE product_brand_id = :product_brand_id;";
            
            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(':product_brand_id', $productID);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}
