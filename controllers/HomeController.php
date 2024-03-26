<?php
    function homeIndex(){
        $view = "home";
        require PATH_VIEW.'layouts/master.php';
    }
    function Chitiet(){
        $view = "chitiet/detail";
        require PATH_VIEW.'layouts/master.php';
    }
    function viewcart(){
        $view = "cart/view-cart";
        require PATH_VIEW.'layouts/master.php';
    }
    function listproduct(){
        $view = "list/listproduct";
        require PATH_VIEW.'layouts/master.php';
    }
