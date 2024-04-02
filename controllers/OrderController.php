<?php 
    function ship(){
        if(!isset($_SESSION['user'])){header("Location:" . BASE_URL ."?act=login"); exit();}
        $user_address = getAddressUser($_SESSION['user']['id']);
        $view = "ship/ship-checkout";
        
        require PATH_VIEW.'layouts/master.php';
    }