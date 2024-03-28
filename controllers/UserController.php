<?php 
    function userLoginRegister(){
        $view = "users/login_register";
        if(isset($_POST['login'])){
            
            $data = [
                'email' => $_POST['login_email'] ?? null,
                'password' => $_POST['login_password'] ?? null,
                'remember' => $_POST['remember'] ?? null
            ];
            // validateUserUpdateDetail($data);
            if(userLogin($data['email'],$data['password'])){
               $_SESSION['user'] = userLogin($data['email'],$data['password']);
               header("Location: " . BASE_URL);
            }else{
                $_SESSION['faillogin'] = "Đăng nhập không thành công";
            }

        }
        if(isset($_POST['register'])){
            $data = [
                'email'             => $_POST['register_email']     ?? null,
                'password'          => $_POST['register_password']  ?? null,
                'confirm_password'  => $_POST['confirm_password']   ?? null,
            ];
            // validateUserUpdateDetail($data);
        }
        require PATH_VIEW.'layouts/master.php';
    }
    function userForgetPassword(){
        $view = "users/forget_password";

        require PATH_VIEW.'layouts/master.php';
    }
    function accountDetail(){
        $view = "users/account_detail";
        if(isset($_POST['account_edit_form'])){
            $data = [
                'name'                 => $_POST['name']                  ?? $_SESSION['user']['name'],
                'phone_number'         => $_POST['phone_number']          ?? $_SESSION['user']['phone_number'],
                'address'              => $_POST['address']               ?? $_SESSION['user']['address'],
            ];
            foreach($data as $key => $value){
                foreach($_SESSION['user'] as $key2 => $value2){
                    if($key == $key2 && $value == $value2){
                        unset($data[$key]);
                    }
                }
            }

            validateUserUpdateDetail($data);
             update('users', $_SESSION['user']['id'], $data);
            
           
        }
        if(isset($_POST['reset_pass'])){
            $pass = $_SESSION['user']['password'];
            $inputPass = $_POST['password'];
            $newPass = $_POST['new_password'];
            $confirmPass = $_POST['confirm_new_password'];
            if(checkUserPassword($pass,$inputPass,$newPass,$confirmPass)){
                $data['password'] = $newPass;
                update('users', $_SESSION['user']['id'], $data);
                $_SESSION['successResetPass'] = "Đổi mật khẩu thành công";

            }

            }
        

        require PATH_VIEW.'layouts/master.php';
    }
    function validateUserUpdateDetail($data){
        if($data){
            if(isset($data['name'])){
                if(empty($data['name']) || strlen($data['name']) >= 50 || strlen($data['name']) <= 3){
                    $_SESSION['errorName'] = "Tên phải có từ 3->50 ký tự";
                }
                
            }

            if(isset($data['phone_number'])){
                if(empty($data['phone_number']) || strlen($data['phone_number']) < 10){
                    $_SESSION['errorSDT'] = "Số điện thoại tối thiểu là 10 chữ số";
                }
               
            }
            if(isset($data['email'])){
                if(empty($data['phone_number']) || filter_var($data['email'],FILTER_VALIDATE_EMAIL)){
                    $_SESSION['errorEmail'] = "Email không đúng định dạng";
                }
               
            }
        }
        
    }
    function checkUserPassword($pass,$inputPass,$newPass = null ,$confirmPass = null){
        // debug($inputPass);
        $check = true;
        if(empty($inputPass)){
            $_SESSION['errorPass'] = "Bạn chưa nhập mật khẩu hiện tại";
            $check = false;
        }
        if(!$newPass || strlen($newPass) < 8 || strlen($newPass) > 20){
            $_SESSION['errorNewPass'] = "Mật khẩu mới phải từ 8->20 ký tự";
            $check = false;
        }else if ($pass == $newPass){
            $_SESSION['errorNewPass'] = "Mật khẩu mới phải khác mật khẩu hiện tại";
            $check = false;
        }
        if($newPass != $confirmPass){
            $_SESSION['confirmPass'] = "Mật khẩu mới của bạn không trùng khớp";
            $check = false;
        }
        if($check && $inputPass != $pass){
            $_SESSION['errorPass'] = "Mật khẩu hiện tại không chính xác";
            $check = false;
        }

        return $check;
    }
    function userLogout(){
        unset($_SESSION['user']);
        $view = "home";

        require PATH_VIEW.'layouts/master.php';
    }
