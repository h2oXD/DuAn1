<?php
if (!function_exists('listAllJoinProduct')) {
    function listAllJoinProduct($tableName1)
    {
        try {
            $sql = "
            SELECT 
            tb1.id, 
            tb1.title, 
            tb2.name, 
            tb1.price, 
            tb1.sale, 
            tb1.thumbnail
            FROM 
            $tableName1 AS tb1 
            JOIN product_categories AS tb2 ON tb1.product_category_id = tb2.id
            
            ORDER BY id DESC";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }

    }
}
if (!function_exists('getTagForProduct')) {
    function getTagForProduct($id)
    {
        try {
            $sql = "SELECT product_tag_id  FROM product_tag where product_id = $id";
            
            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }

    }
}
if (!function_exists('getColorsAndGalleriesForProduct')) {
    function getColorsAndGalleriesForProduct($id)
    {
        try {
            $sql = "SELECT product_color_id,product_gallery_id  FROM product_attributes where product_id = $id";
            
            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }

    }
}