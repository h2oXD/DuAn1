<?php 

function getAllUser() {
    try {
        $sql = 'SELECT * FROM users';

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}

function userLogin($email , $password) {
    try {
        $sql = 'SELECT * FROM users WHERE email = :email AND `password` = :password';

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);

        $stmt->execute();

         $info_user = $stmt->fetch();
        if($info_user){
            return $info_user;
        }else return false;
    } catch (\Exception $e) {
        debug($e);
    }
}
function getUserByID($id) {
    try {
        $sql = 'SELECT * FROM users WHERE id = :id';

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(':id', $id);

        $stmt->execute();

        return $stmt->fetch();
    } catch (\Exception $e) {
        debug($e);
    }
}