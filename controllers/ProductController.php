<?php 
    function List_sp(){
        $view = "danhsach_sanpham/list_sp";
        $products = listAll('products');
        $categories = listAll('product_categories');
        $brands = listAll('product_brands');
        $colors = listAll('product_colors');
        $sizes = listAll('product_sizes');
        // debug($products);
        require PATH_VIEW.'layouts/master.php';
    }
    function Chitiet(){
        $view = "chitiet_sanpham/detail";
        $product = showOneProduct($_GET['id']);
        $tag = implode(",",(array_column(getTagsByProduct($_GET['id']),'name')));
        // $attributeByProdcutID = showAttributeByProductID($_GET['id']);
        $attribute = showAttribute('product_attributes', $_GET['id']);
        $keysize = array_unique(array_column($attribute,'product_size_id'));
        $valuesize = array_unique(array_column($attribute,'size'));
        $keycolor = array_unique(array_column($attribute,'product_color_id'));
        $valuecolor = array_unique(array_column($attribute,'name'));
        $size = array_combine($keysize,$valuesize);
        $color = array_combine($keycolor,$valuecolor);
        // foreach
        
        // debug($attribute);  
        require PATH_VIEW.'layouts/master.php';
    }
