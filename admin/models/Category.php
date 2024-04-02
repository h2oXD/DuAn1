
<?php 
if (!function_exists('checkUniqueName')) {
    function checkUniqueName($tableName, $name)
    {
        try {
            $sql = "SELECT * FROM $tableName WHERE name = :name LIMIT 1";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":name", $name);

            $stmt->execute();

            $data = $stmt->fetch();

            return empty($data) ? true : false;
        } catch (\Exception $e) {
            debug($e);
        }

    }
}
if (!function_exists('checkUniqueNameForUpdate')) {
    function checkUniqueNameForUpdate($tableName,$id, $name)
    {
        try {
            $sql = "SELECT * FROM $tableName WHERE name = :name AND id <> :id LIMIT 1";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":id", $id);

            $stmt->execute();

            $data = $stmt->fetch();

            return empty($data) ? true : false;
        } catch (\Exception $e) {
            debug($e);
        }

    }
}

// hàm sửa loại hàng
// nếu k upload ảnh mới thì sẽ sử dụng lại ảnh cũ
function update_category_by_old_image($id,$name,$old_thumbnail,$active)
    {
        try {
            $sql = "UPDATE product_categories SET `name` = '$name', thumbnail = '$old_thumbnail', is_active = '$active' WHERE id = $id";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->execute();

        } catch (\Exception $e) {
            debug($e);
        }

    }