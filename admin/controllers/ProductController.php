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

    $script2 = 'products/script';
    $categories = listAll('product_categories');
    $tags = listAll('product_tags');
    $colors = listAll('product_colors');
    if (!empty ($_POST)) {
        $data = [
            "title" => $_POST['title'] ?? null,
            "price" => $_POST['price'] ?? null,
            "sale" => $_POST['sale'] ?? null,
            "tags" => $_POST['tags'] ?? null,
            "thumbnail" => $_FILES['thumbnail'] ?? null,
            "description" => $_POST['description'] ?? null,
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "product_category_id" => $_POST['product_category_id'] ?? null,
        ];

        $errors = validateProductCreate($data);
        $thumbnail = $_FILES['thumbnail'] ?? null;

        if (!empty ($errors)) {
            $_SESSION['errors'] = $errors;
            $_SESSION['data'] = $data;
        } else {
            if (!empty ($thumbnail)) {
                $data['thumbnail'] = upload_file($thumbnail, 'uploads/product/');
            }
            insert('products', $data);
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
        if (empty ($data['title'])) {
            $errors[] = "Tên không được để trống";
        }
        //
        if (empty ($data['price'])) {
            $errors[] = "Price không được để trống";
        } else if (!filter_var($data['price'], FILTER_VALIDATE_FLOAT)) {
            $errors[] = 'Price không đúng định dạng';
        }
        if (empty ($data['sale'])) {
            $errors[] = "Sale không được để trống";
        } else if (!filter_var($data['sale'], FILTER_VALIDATE_FLOAT)) {
            $errors[] = 'Sale không đúng định dạng';
        }
        //
        if (empty ($data['product_category_id'])) {
            $errors[] = "Category không được để trống";
        }
        if (empty ($data['tags'])) {
            $errors[] = "Tags không được để trống";
        }
        if ($data['thumbnail']['size'] <= 0){
            $errors[] = "Thumbnail không được để trống";
        }
        // Check file size
        if ($data["thumbnail"]["size"] > 2 * 1024 * 1024) {
            $errors[] = "Thumbnail không được quá 2MB";
        }else if (
            !empty($data['thumbnail']['name']) &&    $data["thumbnail"]["type"] != "image/jpg" &&$data["thumbnail"]["type"] != "image/png" && $data["thumbnail"]["type"] != "image/jpeg"
        ) {
            $errors[] = "Thumbnail chỉ chấp nhận các file JPG, JPEG, PNG";
        }
        // Allow certain file formats
        
        return $errors;

    }
}
function productshowOne($id)
{
    $product = showOne('products', $id);
    if (empty ($product)) {
        e404();
    }
    $view = 'products/show';
    $title = 'Chi tiết ';
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function productUpdate($id)
{
    $product = showOne('products', $id);
    $categories = listAll('product_categories');
    if (empty ($product)) {
        e404();
    }
    if (!empty ($_POST)) {
        $data = [
            "title" => $_POST['title'] ?? $product['title'],
            "price" => $_POST['price'] ?? $product['price'],
            "sale" => $_POST['sale'] ?? $product['sale'],
            "tags" => $_POST['tags'] ?? $product['tags'],
            "thumbnail" => $_FILES['thumbnail'] ?? null,
            "description" => $_POST['description'] ?? $product['description'],
            "updated_at" => date('Y-m-d H:i:s'),
            "product_category_id" => $_POST['product_category_id'] ?? $product['product_category_id'],
        ];

        $errors = validateProductCreate($data);
        $thumbnail = $_FILES['thumbnail'] ?? null;

        if (!empty ($errors)) {
            $_SESSION['errors'] = $errors;
            $_SESSION['data'] = $data;
        } else {
            if (!empty($thumbnail)) {
                $data['thumbnail'] = upload_file($thumbnail, 'uploads/product/');
            }
                 
            update('products',$id, $data);
            if(!empty($thumbnail) && !empty($product['thumbnail']) && !empty($data['thumbnail']) && file_exists(PATH_UPLOAD.$product['thumbnail'])){
                unlink(PATH_UPLOAD.$product['thumbnail']);
            }
            
            $_SESSION['success'] = "Thao tác thành công";
            header("Location: " . BASE_URL_ADMIN . "?act=products");
        }

    }
    $view = 'products/update';
    $script2 = 'products/script';

    $title = 'Cập nhật';
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function productDelete($id)
{
    delete2('products', $id);
    header("Location: " . BASE_URL_ADMIN . "?act=products");
}