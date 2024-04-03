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
            tb3.name AS b_name,
            tb1.price, 
            tb1.sale, 
            tb1.thumbnail
            FROM 
            $tableName1 AS tb1 
            JOIN product_categories AS tb2 ON tb1.product_category_id = tb2.id
            JOIN product_brands AS tb3 ON tb1.product_brand_id = tb3.id
            
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
if (!function_exists('getColorsAndsizesForProduct')) {
    function getColorsAndsizesForProduct($id)
    {
        try {
            $sql = "SELECT product_color_id,product_size_id  FROM product_attributes where product_id = $id";
            
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
if (!function_exists('deleteColorandSizeByProductID')) {
    function deleteColorandSizeByProductID($productID,$colorID,$sizeID) {
        try {
            $sql = "DELETE FROM product_attributes WHERE product_id = :product_id AND product_color_id = :product_color_id AND product_size_id = :product_size_id ;";
            
            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(':product_id', $productID);
            $stmt->bindParam(':product_color_id', $colorID);
            $stmt->bindParam(':product_size_id', $sizeID);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('checkAttribute')) {
    function checkAttribute($id)
    {
        try {
            $sql = "SELECT COUNT(product_id) AS dem FROM product_attributes WHERE product_id = :id";
            // debug($sql);
            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":id", $id);

            $stmt->execute();

            return $stmt->fetch();
        } catch (\Exception $e) {
            debug($e);
        }

    }
}
