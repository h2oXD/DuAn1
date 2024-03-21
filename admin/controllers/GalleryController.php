<?php
function galleryListtAll()
{
    $view = 'galleries/index';
    $title = 'Danh sách';
    $script = 'datatable';
    $script2 = 'galleries/script';
    $style = 'datatable';
    $galleries = listAll('product_galleries');

    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function gallery_Create()
{
    $view = 'galleries/create';
    $title = 'Thêm mới galleries';
    if (!empty ($_POST)) {
        $data = [
            "thumbnail" => $_FILES['thumbnail'] ?? null,
        ];
        $thumbnail = $data['thumbnail'];
        $errors = validateGalleryCreate($data);
        if (!empty ($errors)) {
            $_SESSION['errors'] = $errors;
            $_SESSION['data'] = $data;
        } else {
            if (!empty($thumbnail)) {
                $data['thumbnail'] = upload_file($thumbnail, 'uploads/product/');
            }

            insert('product_galleries', $data);
            $_SESSION['success'] = "Thao tác thành công";
            header("Location: " . BASE_URL_ADMIN . "?act=galleries");
        }

    }
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function validateGalleryCreate($data)
{
    $errors = [];
    //
    if ($data['thumbnail']['size']<=0) {
        $errors[] = "Ảnh không được để trống";
    }
    return $errors;
}
function galleryShowOne($id)
{
    $tag = showOne('product_galleries', $id);
    if (empty ($tag)) {
        e404();
    }
    $view = 'galleries/show';
    $title = 'Chi tiết ';
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function galleryUpdate($id)
{
    $gallery = showOne('product_galleries', $id);
    if (empty ($gallery)) {
        e404();
    }
    if (!empty ($_POST)) {
        $data = [
            "thumbnail" => $_FILES['thumbnail'] ?? $gallery['thumbnail'],
        ];
        
        $errors = validateGalleryUpdate($id, $data);
        $thumbnail = $_FILES['thumbnail'] ?? null;
        if (!empty ($errors)) {
            $_SESSION['errors'] = $errors;
            $_SESSION['data'] = $data;
        } else {
            if (!empty($thumbnail)) {
                $data['thumbnail'] = upload_file($thumbnail, 'uploads/product/');
            }
            // debug($data);     
            update('product_galleries',$id, $data);
            if(!empty($thumbnail) && !empty($product['thumbnail']) && !empty($data['thumbnail']) && file_exists(PATH_UPLOAD.$gallery['thumbnail'])){
                unlink(PATH_UPLOAD.$gallery['thumbnail']);
            }
            $_SESSION['success'] = "Thao tác thành công";
            header("Location: " . BASE_URL_ADMIN . "?act=galleries");
        }

    }
    $view = 'galleries/update';
    $title = 'Cập nhật';
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function validateGalleryUpdate($id, $data)
{
    $errors = [];
    //
    if ($data['thumbnail']['size'] <= 0) {
        $errors[] = "Ảnh không được để trống";
    }
    return $errors;
}
function galleryDelete($id)
{
    delete2('product_galleries', $id);
    header("Location: " . BASE_URL_ADMIN . "?act=galleries");
}