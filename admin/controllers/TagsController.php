<?php
function tagListtAll()
{
    $view = 'tags/index';
    $title = 'Danh sách';
    $script = 'datatable';
    $script2 = 'tags/script';
    $style = 'datatable';
    $tags = listAll('product_tags');

    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function tagCreate()
{
    $view = 'tags/create';
    $title = 'Thêm mới tags';
    if (!empty ($_POST)) {
        $data = [
            "name" => $_POST['name'] ?? null,
        ];
        
        $errors = validateTagCreate($data);
        if (!empty ($errors)) {
            $_SESSION['errors'] = $errors;
            $_SESSION['data'] = $data;
        } else {
            insert('product_tags', $data);
            $_SESSION['success'] = "Thao tác thành công";
            header("Location: " . BASE_URL_ADMIN . "?act=tags");
        }

    }
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function validateTagCreate($data)
{
    $errors = [];
    //
    if (empty($data['name'])) {
        $errors[] = "Tên không được để trống";
    } else if (!checkUniqueName('product_tags',$data['name'])) {
        $errors[] = 'Tên tag đã tồn tại';
    }
    return $errors;
}
function tagShowOne($id)
{
    $tag = showOne('product_tags', $id);
    if (empty ($tag)) {
        e404();
    }
    $view = 'tags/show';
    $title = 'Chi tiết ';
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function tagUpdate($id)
{
    $tag = showOne('product_tags', $id);
    if (empty ($tag)) {
        e404();
    }
    if (!empty ($_POST)) {
        $data = [
            "name" => $_POST['name'] ?? $tag['name'],
        ];
        $errors = validateTagUpdate($id, $data);
        if (!empty ($errors)) {
            $_SESSION['errors'] = $errors;
            $_SESSION['data'] = $data;
        } else {
            update('product_tags', $id, $data);
            $_SESSION['success'] = "Thao tác thành công";
            header("Location: " . BASE_URL_ADMIN . "?act=tags");
        }

    }
    $view = 'tags/update';
    $title = 'Cập nhật';
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function validateTagUpdate($id, $data)
{
    $errors = [];
    //
    if (empty($data['name'])) {
        $errors[] = "Tên không được để trống";
    } else if (!checkUniqueNameForUpdate('product_tags',$id,$data['name'])) {
        $errors[] = 'Tên tag đã tồn tại';
    }
    return $errors;
}
function tagDelete($id)
{
    deleteTag($id); 
    delete2('product_tags', $id);
    header("Location: " . BASE_URL_ADMIN . "?act=tags");
}