<?php
if (!function_exists('checkUniqueColorNameForUpdate')) {
    function checkUniqueColorNameForUpdate($tableName,$id, $color)
    {
        try {
            $sql = "SELECT * FROM $tableName WHERE color_name = :color_name AND id <> :id LIMIT 1";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":color_name", $color);
            $stmt->bindParam(":id", $id);

            $stmt->execute();

            $data = $stmt->fetch();

            return empty($data) ? true : false;
        } catch (\Exception $e) {
            debug($e);
        }

    }
}
function listAllAttributes($color)
    {
        try {
            $sql = "SELECT * FROM product_attributes WHERE product_color_id = :product_color_id";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":product_color_id", $color);

            $stmt->execute();

            $data = $stmt->fetch();

            return $data ? true : false;
        } catch (\Exception $e) {
            debug($e);
        }

    }