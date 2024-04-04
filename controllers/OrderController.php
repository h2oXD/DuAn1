<?php 
    function ship(){
        if(!isset($_SESSION['user'])){header("Location:" . BASE_URL ."?act=login"); exit();}
        $user_address = getAddressUser($_SESSION['user']['id']);
        $view = "order/ship-checkout";
        
        require PATH_VIEW.'layouts/master.php';
    }
    function confirm(){
        if(!isset($_SESSION['user'])){header("Location:" . BASE_URL ."?act=login"); exit();}
        $view = "order/confirm";
        require PATH_VIEW.'layouts/master.php';
    }