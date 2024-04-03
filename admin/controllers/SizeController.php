<?php 
function sizeListAll(){
    $view = 'sizes/index';
    $title = 'Danh sách Size';
    $script = 'datatable';
    $script2 = 'brand/script';
    $style = 'datatable';
    $sizes = listAll('product_sizes');

    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}