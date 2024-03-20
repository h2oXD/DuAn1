<?php
function userListtAll()
{
    $view = 'users/index';
    $title = 'Danh sách';
    $script = 'datatable';
    $script2 = 'users/script';
    $style = 'datatable';
    $users = listAll('users');
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function userCreate()
{
    $view = 'users/create';
    $title = 'Thêm mới';
    if (!empty ($_POST)) {
        $data = [
            "name" => $_POST['name'] ?? null,
            "email" => $_POST['email'] ?? null,
            "password" => $_POST['password'] ?? null,
            "role" => $_POST['role'] ?? null
        ];
        $errors = validateCreate($data);
        if (!empty ($errors)) {
            $_SESSION['errors'] = $errors;
            $_SESSION['data'] = $data;
        } else {
            insert('users', $data);
            $_SESSION['success'] = "Thao tác thành công";
            header("Location: " . BASE_URL_ADMIN . "?act=users");
        }

    }
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function validateUpdate($id, $data)
{
    $errors = [];
    //
    if (empty ($data['name'])) {
        $errors[] = "Tên không được để trống";
    } else if (strlen($data['name']) > 50) {
        $errors[] = 'Tên không được quá 50 ký tự';
    }
    //
    if (empty ($data['email'])) {
        $errors[] = "Email không được để trống";
    } else if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email không đúng định dạng';
    } else if (!checkUniqueEmailForUpdate('users', $id, $data['email'])) {
        $errors[] = 'Email đã được sử dụng';
    }
    //
    if (empty ($data['password'])) {
        $errors[] = "Password không được để trống";
    } else if (strlen($data['password']) < 8 || strlen($data['password']) > 20) {
        $errors[] = 'Password phải lơn hơn 8 ký tự và không được quá 20 ký tự';
    }
    if ($data['role'] === null) {
        $errors[] = "Role không được để trống";
    } else if (!in_array($data['role'], [0, 1])) {
        $errors[] = 'Role phải là 0 hoặc 1';
    }
    return $errors;
}
function validateCreate($data)
{
    $errors = [];
    //
    if (empty ($data['name'])) {
        $errors[] = "Tên không được để trống";
    } else if (strlen($data['name']) > 50) {
        $errors[] = 'Tên không được quá 50 ký tự';
    }
    //
    if (empty ($data['email'])) {
        $errors[] = "Email không được để trống";
    } else if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email không đúng định dạng';
    } else if (!checkUniqueEmail('users', $data['email'])) {
        $errors[] = 'Email đã được sử dụng';
    }
    //
    if (empty ($data['password'])) {
        $errors[] = "Password không được để trống";
    } else if (strlen($data['password']) < 8 || strlen($data['password']) > 20) {
        $errors[] = 'Password phải lơn hơn 8 ký tự và không được quá 20 ký tự';
    }
    if ($data['role'] === null) {
        $errors[] = "Role không được để trống";
    } else if (!in_array($data['role'], [0, 1])) {
        $errors[] = 'Role phải là 0 hoặc 1';
    }
    return $errors;
}
function userShowOne($id)
{
    $user = showOne('users', $id);
    if (empty ($user)) {
        e404();
    }
    $view = 'users/show';
    $title = 'Chi tiết ';
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function userUpdate($id)
{
    $user = showOne('users', $id);
    if (empty ($user)) {
        e404();
    }
    if (!empty ($_POST)) {
        $data = [
            "name" => $_POST['name'] ?? null,
            "email" => $_POST['email'] ?? null,
            "password" => $_POST['password'] ?? null,
            "phone_number" => $_POST['phone_number'] ?? null,
            "address" => $_POST['address'] ?? null,
            "role" => $_POST['role'] ?? null
        ];
        $errors = validateUpdate($id, $data);
        if (!empty ($errors)) {
            $_SESSION['errors'] = $errors;
            $_SESSION['data'] = $data;
        } else {
            update('users', $id, $data);
            $_SESSION['success'] = "Thao tác thành công";
            header("Location: " . BASE_URL_ADMIN . "?act=users");
        }

    }
    $view = 'users/update';
    $title = 'Cập nhật';
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function userDelete($id)
{
    delete2('users', $id);
    header("Location: " . BASE_URL_ADMIN . "?act=users");
}