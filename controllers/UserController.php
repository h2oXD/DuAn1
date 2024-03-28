<?php 
    function userLoginRegister(){
        $view = "users/login_register";
        if(isset($_POST['login'])){
            
            $data = [
                'email' => $_POST['login_email'] ?? null,
                'password' => $_POST['login_password'] ?? null,
                'remember' => $_POST['remember'] ?? null
            ];
             
            $errors = [];
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
            $_POST['new_password'];
            $_POST['confirm_new_password'];
            $_POST['password'];
            $data = [
                'name'                 => $_POST['name']                  ?? $_SESSION['user']['name'],
                'phone_number'         => $_POST['phone_number']          ?? $_SESSION['user']['phone_number'],
                'email'                => $_POST['email']                 ?? $_SESSION['user']['email'],
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
            // debug($data);
            
            // update('users', $_SESSION['user']['id'], $data);
        }
        

        require PATH_VIEW.'layouts/master.php';
    }
    function validateUserUpdateDetail($data){
        if(isset($data['name']) || !$data['name'] || strlen($data['name']) >= 50 || strlen($data['name']) <= 3){
            $_SESSION['errorName'] = "Tên phải có từ 3->50 ký tự";
        }
        if(isset($data['phone_number']) && !$data['phone_number']){
            $_SESSION['saisdt'] = "Số điện thoại không được để trống";
        }
        if(isset($data['phone_number']) && strlen($data['phone_number']) < 10){
            $_SESSION['saisdt'] = "Số điện thoại tối thiểu là 10 chữ số";
        }
    }
    function userLogout(){
        unset($_SESSION['user']);
        $view = "home";

        require PATH_VIEW.'layouts/master.php';
    }
