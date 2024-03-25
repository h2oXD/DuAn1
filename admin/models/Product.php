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
if (!function_exists('showOneJoinProduct')) {
    function showOneJoinProduct($tableName1,$id)
    {
        try {
            $sql = "SELECT tb1.id, tb1.title, tb2.name as c_name, tb3.name as b_name, tb1.price, tb1.sale, tb1.thumbnail, tb1.description,tb1.created_at,tb1.updated_at
            FROM  products AS tb1 JOIN product_categories AS tb2 ON tb1.product_category_id = tb2.id
            JOIN product_brands as tb3 ON tb1.product_brand_id = tb3.id 
            WHERE tb1.id = :id";
            $stmt = $GLOBALS['conn']->prepare($sql);
            $stmt->bindParam(':id',$id);
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
if (!function_exists('deleteTagsByProductID')) {
    function deleteTagsByProductID($productID) {
        try {
            $sql = "DELETE FROM product_tag WHERE product_id = :product_id;";
            
            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(':product_id', $productID);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}