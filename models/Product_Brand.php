<?php

function Get_All_Brand_And_Count_Product(){
    $sql = "SELECT product_brands.id, product_brands.name, COUNT(products.id) AS SLsp
            FROM `product_brands`
            INNER JOIN products
            ON products.product_brand_id = product_brands.id
            GROUP BY product_brands.id, product_brands.name";

    $stmt = $GLOBALS['conn']->prepare($sql);

    $stmt->execute();

    return $stmt->fetchAll();
}