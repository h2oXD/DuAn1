<?php 
function tagListtAll(){
    $view = 'tags/index';
    $title = 'Danh sách';
    $script = 'datatable';
    $script2 = 'tags/script';
    $style = 'datatable';    
    $tags = listAll('tags');
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function tagCreate(){
    $view = 'tags/create';
    $title = 'Thêm mới';
    if(!empty($_POST)){
        $data = [
            "name" => $_POST['name'],
        ];
        insert('tags',$data);
    }
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function tagshowOne($id){
    $tag = showOne('tags',$id);
    if(empty($tag)){
        e404();
    }
    $view = 'tags/show';
    $title = 'Chi tiết ';
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function tagUpdate($id){
    $tag = showOne('tags',$id);
    if(empty($tag)){
        e404();
    }
    if(!empty($_POST)){
        $data = [
            "name" => $_POST['name'],
        ];
        update('tags',$id,$data);
    }
    $view = 'tags/update';
    $title = 'Cập nhật';
    require_once PATH_VIEW_ADMIN . "layouts/master.php";
}
function tagDelete($id){
    delete2('tags',$id);
    header("Location: ".BASE_URL_ADMIN."?act=tags");
}