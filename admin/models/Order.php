<?php 
function OrderJoin(){
    try {
        $sql = "SELECT
        o.id AS id,
        u.name AS u_nguoimua,
        ud.receiver AS ud_nguoinhan,
        ud.delivery_address AS ud_diachinhan,
        ud.phone_number AS ud_sodienthoainhan,
        ud.email AS ud_emailnhan,
        p.title AS p_tensanpham,
        od.price AS p_giasanpham,
        od.quantity AS p_soluong,
        o.total_money AS o_tongtien,
        o.status AS o_trangthai
        FROM orders AS o JOIN user_addresses AS ud ON o.user_address_id = ud.id
        JOIN order_details AS od ON o.id = od.order_id JOIN products AS p ON od.product_id = p.id  
        JOIN users AS u ON o.user_id = u.id
        ";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}