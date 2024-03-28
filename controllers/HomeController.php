<?php
    function homeIndex(){
        $view = "home";
        // debug($_POST);
        if(isset($_POST['login'])){

        }
        require PATH_VIEW.'layouts/master.php';
    }

    function Chitiet(){
        $view = "chitiet_sanpham/detail";
        require PATH_VIEW.'layouts/master.php';
    }

    function viewcart(){
        $view = "cart/view-cart";
        require PATH_VIEW.'layouts/master.php';
    }

    function List_sp(){
        $view = "danhsach_sanpham/list_sp";
        require PATH_VIEW.'layouts/master.php';
    }

    function ship(){
        $view = "ship/ship-checkout";
        require PATH_VIEW.'layouts/master.php';
    }

    
    function confirm(){
        $view = "confirmation/confirm";
        require PATH_VIEW.'layouts/master.php';
    }

    // Users
    function Account_Dashboard(){
        $view = "users/account_dashboard";
        require PATH_VIEW.'layouts/master.php';
    }
    function Account_Order(){
        $view = "users/account_order";
        require PATH_VIEW.'layouts/master.php';
    }
    function Account_Edit(){
        $view = "users/account_detail";
        require PATH_VIEW.'layouts/master.php';
    }

    function Login_Register(){
        $view = "users/login_register";
        require PATH_VIEW.'layouts/master.php';
    }
    


    //
    function Show_Term(){
        $view = "terms/term_home";
        require PATH_VIEW.'layouts/master.php';
    }

    //
    function Show_About(){
        $view = "about/about_show";
        require PATH_VIEW.'layouts/master.php';
    }