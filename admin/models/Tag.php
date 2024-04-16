<?php 
function deleteTag($id) {
    try {
        $sql = "DELETE FROM product_tag WHERE product_tag_id = :id;";
        
        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(':id', $id);

        $stmt->execute();

        
    } catch (\Exception $e) {
        debug($e);
    }
}