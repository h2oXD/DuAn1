<?php 
function userListtAll(){
    $view = 'users/index';
    $title = 'Danh sách User';
    $script = 'datatable';
    $script2 = 'users/script';
    $style = 'datatable';
    $users = listAll('users');
    debug($users);
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function userCreate(){
    $view = 'users/create';
    $title = 'Thêm mới User';
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function userShowOne($id){
    $view = 'users/show';
    $title = 'Chi tiết User';
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function userUpdate($id){
    $view = 'users/update';
    $title = 'Cập nhật User';
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function userDelete($id){

}