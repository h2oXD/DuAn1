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
}