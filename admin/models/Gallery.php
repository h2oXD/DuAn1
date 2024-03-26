<?php 
if (!function_exists('deleteByGallery')) {
    function deleteByGallery($galleryID) {
        try {
            $sql = "DELETE FROM product_attributes WHERE product_gallery_id = :product_gallery_id;";
            
            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(':product_gallery_id', $galleryID);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}