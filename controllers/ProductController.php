<?php 
    function List_sp(){
        $view = "danhsach_sanpham/list_sp";
        $products = listAll('products');
        // debug($products);
        require PATH_VIEW.'layouts/master.php';
    }
    function Chitiet(){
        $view = "chitiet_sanpham/detail";
        require PATH_VIEW.'layouts/master.php';
    }