<?php 
function userListtAll(){
    $view = 'users/index';
    $title = 'Danh sách';
    $script = 'datatable';
    $script2 = 'users/script';
    $style = 'datatable';    
    $users = listAll('users');

    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function userCreate(){
    $view = 'users/create';
    $title = 'Thêm mới';
    if(!empty($_POST)){
        $data = [
            "name" => $_POST['name'],
            "email" => $_POST['email'],
            "password" => $_POST['password'],
            "role" => $_POST['role']
        ];
        insert('users',$data);
    }
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function userShowOne($id){
    $user = showOne('users',$id);
    if(empty($user)){
        e404();
    }
    $view = 'users/show';
    $title = 'Chi tiết ';
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function userUpdate($id){
    $view = 'users/update';
    $title = 'Cập nhật';
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function userDelete($id){

}