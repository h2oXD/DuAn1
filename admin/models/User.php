<?php 

if (!function_exists('showOneAddress')) {
    function showOneAddress($id)
    {
        try {
            $sql = "SELECT * FROM user_addresses WHERE user_id = :id LIMIT 1";

            $stmt = $GLOBALS['conn']->prepare($sql);


            $stmt->bindParam(":id", $id);

            $stmt->execute();

            $data = $stmt->fetch();

            return $data;
        } catch (\Exception $e) {
            debug($e);
        }

    }
}
if (!function_exists('checkUniqueEmailForUpdate')) {
    function checkUniqueEmailForUpdate($tableName,$id, $email)
    {
        try {
            $sql = "SELECT * FROM $tableName WHERE email = :email AND id <> :id LIMIT 1";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":id", $id);

            $stmt->execute();

            $data = $stmt->fetch();

            return empty($data) ? true : false;
        } catch (\Exception $e) {
            debug($e);
        }

    }
}
function showOneByUserID($id)
{
    try {
        $sql = "SELECT id FROM orders WHERE user_id = :id";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(":id", $id);

        $stmt->execute();

        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }

}
function deleteOrderDetails($id)
{
    try {
        $sql = "DELETE FROM order_details WHERE order_id = :id";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(":id", $id);

        $stmt->execute();

        
    } catch (\Exception $e) {
        debug($e);
    }

}
function deleteOrderByUserID($id)
{
    try {
        $sql = "DELETE FROM orders WHERE user_id = :id";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(":id", $id);

        $stmt->execute();

        
    } catch (\Exception $e) {
        debug($e);
    }

}
function deleteUserAddressByUserID($id)
{
    try {
        $sql = "DELETE FROM user_addresses WHERE user_id = :id";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(":id", $id);

        $stmt->execute();

        
    } catch (\Exception $e) {
        debug($e);
    }

}