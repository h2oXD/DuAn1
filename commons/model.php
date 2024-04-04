<?php

if (!function_exists('get_str_keys')) {
    function get_str_keys($data)
    {
        return implode(',', array_keys($data));
    }
}

if (!function_exists('get_virtual_params')) {
    function get_virtual_params($data)
    {
        $keys = array_keys($data);
        $tmp = [];
        foreach ($keys as $key) {
            $tmp[] = ":$key";
        }
        return implode(',', $tmp);
    }
}

if (!function_exists('get_set_params')) {
    function get_set_params($data)
    {
        $keys = array_keys($data);
        $tmp = [];
        foreach ($keys as $key) {
            $tmp[] = "$key = :$key";
        }
        return implode(',', $tmp);
    }
}

if (!function_exists('insert')) {
    function insert($tableName, $data = [])
    {
        try {
            $strKeys = get_str_keys($data);
            $virtualParams = get_virtual_params($data);

            $sql = "INSERT INTO $tableName($strKeys) VALUES($virtualParams)";

            $stmt = $GLOBALS['conn']->prepare($sql);

            foreach ($data as $fieldName => &$value) {
                $stmt->bindParam(":$fieldName", $value);
            }

            $stmt->execute();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}
if (!function_exists('insert_get_last_id')) {
    function insert_get_last_id($tableName, $data = [])
    {

        try {
            $strKeys = get_str_keys($data);
            $virtualParams = get_virtual_params($data);

            $sql = "INSERT INTO $tableName($strKeys) VALUES($virtualParams)";

            $stmt = $GLOBALS['conn']->prepare($sql);

            foreach ($data as $fieldName => &$value) {
                $stmt->bindParam(":$fieldName", $value);
            }

            $stmt->execute();
            return  $GLOBALS['conn']->lastInsertId();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('listAll')) {
    function listAll($tableName)
    {
        try {
            $sql = "SELECT * FROM $tableName ORDER BY id DESC";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('showOne')) {
    function showOne($tableName, $id)
    {
        try {
            $sql = "SELECT * FROM $tableName WHERE id = :id LIMIT 1";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":id", $id);

            $stmt->execute();

            return $stmt->fetch();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}


if (!function_exists('update')) {
    function update($tableName, $id, $data = [])
    {
        try {
            $setParams = get_set_params($data);

            $sql = "
                UPDATE $tableName
                SET $setParams
                WHERE id = :id
            ";

            $stmt = $GLOBALS['conn']->prepare($sql);

            foreach ($data as $fieldName => &$value) {
                $stmt->bindParam(":$fieldName", $value);
            }
            $stmt->bindParam(":id", $id);


            $stmt->execute();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}
if (!function_exists('delete2')) {
    function delete2($tableName, $id)
    {
        try {
            $sql = "DELETE FROM $tableName WHERE id = :id";

            $stmt = $GLOBALS['conn']->prepare($sql);
            $stmt->bindParam(":id", $id);

            $stmt->execute();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}
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
    function checkUniqueNameForUpdate($tableName, $id, $name)
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

if (!function_exists('showAttribute')) {
    function showAttribute($tableName, $id)
    {
        try {
            $sql = "SELECT tb1.product_id,tb1.product_color_id,tb1.product_size_id,tb2.title,tb3.name,tb4.size FROM $tableName AS tb1 JOIN products AS tb2 ON tb1.product_id = tb2.id 
            JOIN product_colors as tb3 ON tb1.product_color_id = tb3.id
            JOIN product_sizes AS tb4 ON tb1.product_size_id = tb4.id
             WHERE product_id = :id";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":id", $id);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}
if (!function_exists('showOneJoinProduct')) {
    function showOneJoinProduct($tableName1, $id)
    {
        try {
            $sql = "SELECT tb1.id, tb1.title, tb2.name as c_name, tb3.name as b_name, tb1.price, tb1.sale, tb1.thumbnail, tb1.description,tb1.created_at,tb1.updated_at
            FROM  products AS tb1 JOIN product_categories AS tb2 ON tb1.product_category_id = tb2.id
            JOIN product_brands as tb3 ON tb1.product_brand_id = tb3.id 
            WHERE tb1.id = :id";
            $stmt = $GLOBALS['conn']->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}
if (!function_exists('showOneProduct')) {
    function showOneProduct($id)
    {
        try {
            $sql = "SELECT tb1.id, tb1.title, tb2.name as c_name, tb3.name as b_name, tb1.price, tb1.sale, tb1.thumbnail, tb1.description,tb1.created_at,tb1.updated_at
            FROM  products AS tb1 JOIN product_categories AS tb2 ON tb1.product_category_id = tb2.id
            JOIN product_brands as tb3 ON tb1.product_brand_id = tb3.id 
            WHERE tb1.id = :id";
            $stmt = $GLOBALS['conn']->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            return $stmt->fetch();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}
if (!function_exists('OrderJoin')) {
    function OrderJoin()
    {
        try {
            $sql = "SELECT 
        tb1.id as orderID,
        tb1.receiver as nguoiNhan,
        tb1.delivery_address as diaChiNhan,
        tb1.phone_number as sdt,
        tb1.email,
        tb1.note,
        tb1.order_date,
        tb1.total_money,
        tb1.status
        FROM orders tb1 ";


            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}
if (!function_exists('OrderJoin2')) {
    function OrderJoin2($id)
    {
        try {
            $sql = "SELECT 
        tb1.id as orderID,
        tb1.receiver as nguoiNhan,
        tb1.delivery_address as diaChiNhan,
        tb1.phone_number as sdt,
        tb1.email,
        tb1.note,
        tb1.order_date,
        tb1.total_money,
        tb1.status
        FROM orders tb1 WHERE tb1.user_id = :id";


            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":id", $id);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}
if (!function_exists('showAllOrderDetailByOrderID')) {
    function showAllOrderDetailByOrderID($id)
    {
        try {
            $sql = "SELECT tb2.title,tb2.thumbnail,tb2.sale,tb3.name as color,tb4.size,tb1.quantity FROM order_details tb1 
        JOIN products tb2 ON tb1.product_id = tb2.id 
        JOIN product_colors tb3 ON tb1.color = tb3.id
        JOIN product_sizes tb4 ON tb1.size = tb4.id
        WHERE order_id = :id";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":id", $id);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}
