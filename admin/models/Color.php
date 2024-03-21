<?php
if (!function_exists('checkUniqueColorName')) {
    function checkUniqueColorName($tableName, $color)
    {
        try {
            $sql = "SELECT * FROM $tableName WHERE color_name = :color_name LIMIT 1";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":color_name", $color);

            $stmt->execute();

            $data = $stmt->fetch();

            return empty($data) ? true : false;
        } catch (\Exception $e) {
            debug($e);
        }

    }
}
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