<?php

function listAllOrder(){
    $view = 'orders/index';
    $title = 'Danh sách Orders';
    $script = 'datatable';
    $script2 = 'orders/script';
    $style = 'datatable';
    $orders = OrderJoin();

    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function orderDetail($id){
    $orderDetails = showAllOrderDetailByOrderID($id);
    $view = 'orders/show';
    $title = 'Chi tiết Order';
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function orderTrangThai($id,$trangthai){
    orderStatus($id,$trangthai);
    header("Location: ".BASE_URL_ADMIN.'?act=orders');
}


