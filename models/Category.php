<<<<<<< HEAD
<?php 
function getAllCate() {
    try {
        $sql = 'SELECT * FROM product_categories';

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
=======
<?php

function Show_All_Categories(){
    $categories = listAll('product_categories');
    return $categories;
>>>>>>> d46d6c4a31747d6bf2fd5cdfa7bba15a07261690
}