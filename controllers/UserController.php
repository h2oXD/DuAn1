<?php
function userLoginRegister()
{
    $view = "users/login_register";
    if (isset($_POST['login'])) {
        $data = [
            'email' => $_POST['login_email'] ?? null,
            'password' => $_POST['login_password'] ?? null,
            'remember' => $_POST['remember'] ?? null
        ];

        if (validateLoginRegister($data) && userLogin($data['email'], $data['password'])) {
            $_SESSION['user'] = userLogin($data['email'], $data['password']);
            header("Location: " . BASE_URL);
            exit();
        } else {
            if (!isset($_SESSION['errorEmail']) && !isset($_SESSION['errorPass'])) {
                $_SESSION['faillogin'] = "Tài khoản hoặc mật khẩu không chính xác";
            }
        }

    }
    //REGISTER
    if (isset($_POST['register'])) {
        $confirm_password = $_POST['confirm_password'];
        $data = [
            'email' => $_POST['register_email'] ?? null,
            'name' => $_POST['name'] ?? null,
            'password' => $_POST['register_password'] ?? null
        ];
        if (validateLoginRegister($data, $confirm_password)) {
            insert('users', $data);
            $_SESSION['registerSuccess'] = "Đăng ký thành công";
            header("Location: " . BASE_URL . "?act=login#register-tab");
            exit();
        }else{
            header("Location: " . BASE_URL . "?act=login#register-tab");
            exit();
        }
    }
    require PATH_VIEW . 'layouts/master.php';
}
function validateLoginRegister($data, $confirm_password = null)
{
    $check = true;
    if (isset($_POST['login'])) {
        if (empty($data['email']) && filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $_SESSION['errorEmail'] = 'Email không đúng định dạng';
            $check = false;
        }
        if (empty($data['password']) || strlen($data['password']) < 8 || strlen($data['password']) > 20) {
            $_SESSION['errorPass'] = 'Mật khẩu phải từ 8->20 ký tự';
            $check = false;
        }
    }
    if (isset($_POST['register'])) {
        if (empty($data['email']) && filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $_SESSION['errorRegisterEmail'] = 'Email không đúng định dạng';
            $check = false;
        }
        if (empty($data['name']) || strlen($data['name']) >= 50 || strlen($data['name']) <= 3) {
            $_SESSION['errorRegisterName'] = "Tên phải có từ 3->50 ký tự";
            $check = false;
        }
        if (empty($data['password']) || strlen($data['password']) < 8 || strlen($data['password']) > 20) {
            $_SESSION['errorRegisterPass'] = 'Mật khẩu phải từ 8->20 ký tự';
            $check = false;
        }
        if ($data['password'] != $confirm_password) {
            $_SESSION['errorCfPass'] = "Mật khẩu không trùng khớp";
            $check = false;
        }
        if (!checkUniqueEmail('users', $data['email'])) {
            $_SESSION['errorRegisterEmail'] = 'Email đã được sử dụng';
            $check = false;
        }
    }
    return $check;
}
function userForgetPassword()
{
    $view = "users/forget_password";

    require PATH_VIEW . 'layouts/master.php';
}
function accountDetail()
{
    if (!isset($_SESSION['user'])) {
        header("Location:" . BASE_URL . "?act=login");
        exit();
    }
    $view = "users/account_detail";
    if (isset($_POST['account_edit_form'])) {
        $data = [
            'name' => $_POST['name'] ?? $_SESSION['user']['name'],
            'phone_number' => $_POST['phone_number'] ?? $_SESSION['user']['phone_number'],
            'address' => $_POST['address'] ?? $_SESSION['user']['address'],
        ];
        foreach ($data as $key => $value) {
            foreach ($_SESSION['user'] as $key2 => $value2) {
                if ($key == $key2 && $value == $value2) {
                    unset($data[$key]);
                }
            }
        }
        if (validateUserUpdateDetail($data)) {
            update('users', $_SESSION['user']['id'], $data);
            foreach ($data as $key => $value) {
                $_SESSION['user'][$key] = $value;
            }

            $_SESSION['successUpdateUser'] = "Cập nhật thông tin thành công";

        }

    }
    if (isset($_POST['reset_pass'])) {
        $pass = $_SESSION['user']['password'];
        $inputPass = $_POST['password'];
        $newPass = $_POST['new_password'];
        $confirmPass = $_POST['confirm_new_password'];
        if (checkUserPassword($pass, $inputPass, $newPass, $confirmPass)) {
            $data['password'] = $newPass;
            update('users', $_SESSION['user']['id'], $data);
            $_SESSION['successResetPass'] = "Đổi mật khẩu thành công";

        }

    }


    require PATH_VIEW . 'layouts/master.php';
}
function validateUserUpdateDetail($data)
{
    $check = true;
    if ($data) {

        if (isset($data['name'])) {
            if (empty($data['name']) || strlen($data['name']) >= 50 || strlen($data['name']) <= 3) {
                $_SESSION['errorName'] = "Tên phải có từ 3->50 ký tự";
                $check = false;
            }

        }

        if (isset($data['phone_number'])) {
            if (empty($data['phone_number']) || strlen($data['phone_number']) < 10) {
                $_SESSION['errorSDT'] = "Số điện thoại tối thiểu là 10 chữ số";
                $check = false;
            }

        }
    } else {
        $_SESSION['nothing'] = "Bạn chưa thay đổi gì cả!";
        $check = false;

    }
    return $check;
}
function checkUserPassword($pass, $inputPass, $newPass = null, $confirmPass = null)
{
    // debug($inputPass);
    $check = true;
    if (empty($inputPass)) {
        $_SESSION['errorPass'] = "Bạn chưa nhập mật khẩu hiện tại";
        $check = false;
    }
    if (!$newPass || strlen($newPass) < 8 || strlen($newPass) > 20) {
        $_SESSION['errorNewPass'] = "Mật khẩu mới phải từ 8->20 ký tự";
        $check = false;
    } else if ($pass == $newPass) {
        $_SESSION['errorNewPass'] = "Mật khẩu mới phải khác mật khẩu hiện tại";
        $check = false;
    }
    if ($newPass != $confirmPass) {
        $_SESSION['confirmPass'] = "Mật khẩu mới của bạn không trùng khớp";
        $check = false;
    }
    if ($check && $inputPass != $pass) {
        $_SESSION['errorPass'] = "Mật khẩu hiện tại không chính xác";
        $check = false;
    }

    return $check;
}

function accountOrder()
{
    if (!isset($_SESSION['user'])) {
        header("Location:" . BASE_URL . "?act=login");
        exit();
    }
    $view = "users/account_order";
    $orders = Show_Order_ById_User();


    require PATH_VIEW . 'layouts/master.php';

}

function accountDashboard()
{
    if (!isset($_SESSION['user'])) {
        header("Location:" . BASE_URL . "?act=login");
        exit();
    }
    $view = "users/account_dashboard";


    require PATH_VIEW . 'layouts/master.php';

}
function accountAddress()
{
    if (!isset($_SESSION['user'])) {
        header("Location:" . BASE_URL . "?act=login");
        exit();
    }
    $user_address = getAddressUser($_SESSION['user']['id']);
    // debug($user_address);

    $view = "users/account_address";


    require PATH_VIEW . 'layouts/master.php';

}
function userLogout()
{
    unset($_SESSION['user']);
    header("Location: " . BASE_URL);
}
