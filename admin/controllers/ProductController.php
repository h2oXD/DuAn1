<?php
function productListtAll()
{
    $view = 'products/index';
    $title = 'Danh sách';
    $script = 'datatable';
    $script2 = 'products/script';
    $style = 'datatable';
    $products = listAllJoinProduct('products');
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function productCreate()
{
    $view = 'products/create';
    $title = 'Thêm mới';
    $style2 = 'products/style';
    $script2 = 'products/script';
    $categories = listAll('product_categories');
    $tags = listAll('product_tags');
    $colors = listAll('product_colors');
    $brands = listAll('product_brands');
    $sizes = listAll('product_sizes');
    $galleries = listAll('product_galleries');
    if (!empty($_POST)) {
        $data = [
            "title" => $_POST['title'] ?? null,
            "price" => $_POST['price'] ?? null,
            "sale" => $_POST['sale'] ?? null,
            "thumbnail" => $_FILES['thumbnail'] ?? null,
            "description" => $_POST['description'] ?? null,
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "product_category_id" => $_POST['product_category_id'] ?? null,
            "product_brand_id" => $_POST['product_brand_id'] ?? null,
        ];
        $errors = validateProductCreate($data);
        $thumbnail = $_FILES['thumbnail'] ?? null;

        if (!empty($errors)) {
            $_SESSION['errors'] = $errors;
            $_SESSION['data'] = $data;
        } else {
            if (!empty($thumbnail)) {
                $data['thumbnail'] = upload_file($thumbnail, 'uploads/product/');
            }
            try {
                $GLOBALS['conn']->beginTransaction();

                $productID = insert_get_last_id('products', $data);
                // Xử lý Product - Tags 
                if (!empty($_POST['tags'])) {
                    foreach ($_POST['tags'] as $tag) {
                        insert('product_tag', ['product_tag_id' => $tag, 'product_id' => $productID]);
                    }
                }
                // Xử lý color - size - product
                if (!empty($_POST['colors']) && !empty($_POST['sizes'])) {
                    insert('product_attributes', ['product_id' => $productID, 'product_color_id' => $_POST['colors'], 'product_size_id' => $_POST['sizes']]);
                }
                $GLOBALS['conn']->commit();
            } catch (\Throwable $th) {
                $GLOBALS['conn']->rollBack();
            }





            $_SESSION['success'] = "Thao tác thành công";
            header("Location: " . BASE_URL_ADMIN . "?act=products");
        }
    }
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
if (!function_exists('validateProductCreate')) {
    function validateProductCreate($data)
    {
        $errors = [];
        //
        if (empty($data['title'])) {
            $errors[] = "Tên không được để trống";
        }
        //
        if (empty($data['price'])) {
            $errors[] = "Price không được để trống";
        } else if (!filter_var($data['price'], FILTER_VALIDATE_FLOAT)) {
            $errors[] = 'Price không đúng định dạng';
        }
        if (empty($data['sale'])) {
            $errors[] = "Sale không được để trống";
        } else if (!filter_var($data['sale'], FILTER_VALIDATE_FLOAT)) {
            $errors[] = 'Sale không đúng định dạng';
        }
        //
        if (empty($data['product_category_id'])) {
            $errors[] = "Category không được để trống";
        }

        if ($data['thumbnail']['size'] <= 0) {
            $errors[] = "Thumbnail không được để trống";
        }
        // Check file size
        if ($data["thumbnail"]["size"] > 2 * 1024 * 1024) {
            $errors[] = "Thumbnail không được quá 2MB";
        } else if (
            !empty($data['thumbnail']['name']) && $data["thumbnail"]["type"] != "image/jpg" && $data["thumbnail"]["type"] != "image/png" && $data["thumbnail"]["type"] != "image/jpeg"
        ) {
            $errors[] = "Thumbnail chỉ chấp nhận các file JPG, JPEG, PNG";
        }
        // Allow certain file formats

        return $errors;
    }
}
function validateProductUpdate($id, $data)
{
    $errors = [];
    //
    if (empty($data['title'])) {
        $errors[] = "Tên không được để trống";
    }
    //
    if (empty($data['price'])) {
        $errors[] = "Price không được để trống";
    } else if (!filter_var($data['price'], FILTER_VALIDATE_FLOAT)) {
        $errors[] = 'Price không đúng định dạng';
    }
    if (empty($data['sale'])) {
        $errors[] = "Sale không được để trống";
    } else if (!filter_var($data['sale'], FILTER_VALIDATE_FLOAT)) {
        $errors[] = 'Sale không đúng định dạng';
    }
    //
    if (empty($data['product_category_id'])) {
        $errors[] = "Category không được để trống";
    }
    if (empty($data['thumbnail'])) {
        $errors[] = "Thumbnail là bắt buộc";
    }
    if (is_array($data["thumbnail"])) {
        // Check file size
        if ($data["thumbnail"]["size"] > 2 * 1024 * 1024) {
            $errors[] = "Thumbnail không được quá 2MB";
        } else if (
            !empty($data['thumbnail']['name']) && $data["thumbnail"]["type"] != "image/jpg" && $data["thumbnail"]["type"] != "image/png" && $data["thumbnail"]["type"] != "image/jpeg"
        ) {
            $errors[] = "Thumbnail chỉ chấp nhận các file JPG, JPEG, PNG";
        }
        // Allow certain file formats
    }


    return $errors;
}
function productshowOne($id)
{
    $product = showOne('products', $id);
    if (empty($product)) {
        e404();
    }
    $view = 'products/show';
    $title = 'Chi tiết ';
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function attributeShow($id)
{
    $attributes = showAttribute('product_attributes', $id);
    $colors = listAll('product_colors');
    $sizes = listAll('product_sizes');
    if (empty($attributes)) {
        e404();
    }
    if(isset($_POST['submit'])){
        $data = [
            'product_id' => $id,
            'product_color_id' => $_POST['colors'] ?? null,
            'product_size_id' => $_POST['sizes'] ?? null,
        ];
        $errors = validateAttribute($id,$data,$attributes);
        if (!empty($errors)) {
            $_SESSION['errors'] = $errors;
            // $_SESSION['data'] = $data;
        }elseif(!empty($data['product_color_id'])&&!empty($data['product_size_id']) ){
            insert('product_attributes',$data);
            $_SESSION['success'] = "Thao tác thành công";
            header("Location: " . BASE_URL_ADMIN . "?act=products");
        }
        
    }
    $view = 'products/attribute';
    $title = ' ';

    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function validateAttribute($id,$data,$attributes){
    $errors = [];
        if(empty($data['product_color_id'])){
            $errors[] = "Bạn chưa chọn màu";
            
        }
        if(empty($data['product_size_id'])){
            $errors[] = "Bạn chưa chọn kích thước";
            
        }
        foreach($attributes as $at){
            if($at['product_id'] == $id && $at['product_color_id'] == $data['product_color_id'] && $at['product_size_id'] == $data['product_size_id']){
                $errors[] = "Thuộc tính đã tồn tại";
            }
        }
        return $errors;
}
function attributeDelete($id){
    $values = explode(',',$id);
    $attribute = [
        'product_id' => $values[0],
        'product_color_id' => $values[1],
        'product_size_id' => $values[2],
    ];
    $count = checkAttribute($attribute['product_id']);
    if($count['dem'] <= 1){
        $_SESSION['errors']['abc'] = "Chỉ còn lại 1 thuộc tính không thể xóa";
        header("Location: " . BASE_URL_ADMIN . "?act=attribute&id=".$attribute['product_id']);
    }else{
        deleteColorandSizeByProductID($attribute['product_id'],$attribute['product_color_id'],$attribute['product_size_id']);
        $_SESSION['success'] = "Thao tác thành công";
        header("Location: " . BASE_URL_ADMIN . "?act=products");
    }
}
function productUpdate($id)
{
    $product = showOne('products', $id);
    $categories = listAll('product_categories');
    $tags = listAll('product_tags');
    $colors = listAll('product_colors');
    $brands = listAll('product_brands');
    $sizes = listAll('product_sizes');
    $getTagsForProduct = getTagForProduct($id);
    $idTagsProduct = array_column($getTagsForProduct, 'product_tag_id');

    $getColorsAndsizesForProduct = getColorsAndsizesForProduct($id);
    $idColorsForProduct = array_unique(array_column($getColorsAndsizesForProduct, 'product_color_id'));
    $idsizesForProduct = array_unique(array_column($getColorsAndsizesForProduct, 'product_size_id'));

    if (empty($product)) {
        e404();
    }
    if (!empty($_POST)) {
        $data = [
            "title" => $_POST['title'] ?? $product['title'],
            "price" => $_POST['price'] ?? $product['price'],
            "sale" => $_POST['sale'] ?? $product['sale'],
            "thumbnail" => get_file_upload('thumbnail', $product['thumbnail']),
            "description" => $_POST['description'] ?? $product['description'],
            "product_category_id" => $_POST['product_category_id'] ?? $product['product_category_id'],
            "updated_at" => date('Y-m-d H:i:s'),
        ];

        $errors = validateProductUpdate($id, $data);

        $thumbnail = $data['thumbnail'];
        $check = false;
        if (is_array($thumbnail)) {
            $data['thumbnail'] = upload_file($thumbnail, 'uploads/product/');
            $check = true;
        }
        if (!empty($errors)) {
            $_SESSION['errors'] = $errors;
            $_SESSION['data'] = $data;
        } else {

            try {
                $GLOBALS['conn']->beginTransaction();
                update('products', $id, $data);;
                if ($check && !empty($thumbnail) && !empty($product['thumbnail']) && !empty($data['thumbnail']) && file_exists(PATH_UPLOAD . $product['thumbnail'])) {
                    unlink(PATH_UPLOAD . $product['thumbnail']);
                }
                deleteTagsByProductID($id);
                // Xử lý Product - Tags 
                if (!empty($_POST['tags'])) {
                    foreach ($_POST['tags'] as $tag) {
                        insert('product_tag', ['product_tag_id' => $tag, 'product_id' => $id]);
                    }
                }
                $_SESSION['success'] = "Thao tác thành công";
                header("Location: " . BASE_URL_ADMIN . "?act=products");
                $GLOBALS['conn']->commit();
            } catch (\Throwable $th) {
                $GLOBALS['conn']->rollBack();
            }
        }
    }
    $view = 'products/update';
    $script2 = 'products/script';

    $title = 'Cập nhật';
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}

function productDelete($id)
{
    $product = showOne('products', $id);
    if (empty($product)) {
        e404();
    }
    try {
        $GLOBALS['conn']->beginTransaction();

        deleteTagsByProductID($id);

        delete2('products', $id);

        $GLOBALS['conn']->commit();
    } catch (Exception $e) {
        $GLOBALS['conn']->rollBack();

        debug($e);
    }


    if (
        !empty($product['thumbnail'])
        && file_exists(PATH_UPLOAD . $product['thumbnail'])
    ) {
        unlink(PATH_UPLOAD . $product['thumbnail']);
    }

    $_SESSION['success'] = 'Thao tác thành công!';

    header('Location: ' . BASE_URL_ADMIN . '?act=products');
    exit();
}
