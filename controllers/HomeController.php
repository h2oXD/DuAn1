<?php
    function homeIndex(){
        $view = "home";
        $categories = Show_All_Categories();
        $productsale = Product_Sale();
        $productarrival = Product_Arrival();
        
        
        // debug($countcart);
        require PATH_VIEW.'layouts/master.php';
    }




    //
    function Show_About(){
        $view = "about/about_show";
        require PATH_VIEW.'layouts/master.php';
    }