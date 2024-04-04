<?php

function getTagsByProduct($id)
{
    $sql = "SELECT tb1.product_id,tb1.product_tag_id,tb2.name FROM product_tag AS tb1 JOIN product_tags AS tb2 ON tb1.product_tag_id = tb2.id WHERE product_id = :id";

    $stmt = $GLOBALS['conn']->prepare($sql);

    $stmt->bindParam(":id", $id);

    $stmt->execute();

    return $stmt->fetchAll();
}
// function showOneJoinBrandJoinCategories($id)
// {
//     $sql = "SELECT tb1.title,tb2.name,tb3.name,tb1.price,tb1.sale,tb1.thumbnail,tb1.description FROM products AS tb1 
//     JOIN product_categories AS tb2 ON tb1.product_category_id = tb2.id 
//     JOIN product_brands AS tb3 ON tb1.product_brand_id = tb3.id
//     WHERE id = :id";

//     $stmt = $GLOBALS['conn']->prepare($sql);

//     $stmt->bindParam(":id", $id);

//     $stmt->execute();

//     return $stmt->fetch();
// }

function Get_Max_Price(){
    $sql = "SELECT id, MAX(sale) AS PriceMax FROM `products` GROUP BY id";

    $stmt = $GLOBALS['conn']->prepare($sql);

    $stmt->execute();

    return $stmt->fetch();
}

function Get_Min_Price(){
    $sql = "SELECT id, MIN(sale) AS PriceMin FROM `products` GROUP BY id ORDER BY sale ASC";

    $stmt = $GLOBALS['conn']->prepare($sql);

    $stmt->execute();

    return $stmt->fetch();
}
function Product_Sale(){
    $sql = "SELECT id,title,price,sale,thumbnail FROM products ";

    $stmt = $GLOBALS['conn']->prepare($sql);

    $stmt->execute();

    return $stmt->fetchAll();
}

function Product_Arrival(){
    $sql = "SELECT id,title,price,sale,thumbnail,created_at FROM products ORDER BY created_at desc LIMIT 5";

    $stmt = $GLOBALS['conn']->prepare($sql);

    $stmt->execute();

    return $stmt->fetchAll();
}