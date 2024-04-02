<?php

function Show_All_Categories(){
    $categories = listAll('product_categories');
    return $categories;
}