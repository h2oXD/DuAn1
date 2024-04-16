<?php

function getTagsByProduct($id)
{
    $sql = "SELECT tb1.product_id,tb1.product_tag_id,tb2.name FROM product_tag AS tb1 JOIN product_tags AS tb2 ON tb1.product_tag_id = tb2.id WHERE product_id = :id";

    $stmt = $GLOBALS['conn']->prepare($sql);

    $stmt->bindParam(":id", $id);

    $stmt->execute();

    return $stmt->fetchAll();
}
function findProduct($category,$color,$size,$brand,$minprice,$maxprice)
{
    $sql = "SELECT * FROM products";
    if($category || $color || $size || $brand || $minprice || $maxprice){
        $query= [];
        if($category){
            $query[] = "product_category_id = $category";
        }
        if($category){
            $query[] = "product_brand_id = $brand";
        }
        if($minprice && $maxprice){
            $query[] = "sale BETWEEN $minprice AND $maxprice";
        }elseif($minprice && !$maxprice){
            $query[] = "sale >= $minprice";
        }
        elseif(!$minprice && $maxprice){
            $query[] = "sale <= $maxprice";
        }
        $queryStr = implode(' AND ',$query);
        $sql .= ' WHERE '.$queryStr;
    }
    $stmt = $GLOBALS['conn']->prepare($sql);
    // debug($sql);
    $stmt->execute();

    return $stmt->fetchAll();
}

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