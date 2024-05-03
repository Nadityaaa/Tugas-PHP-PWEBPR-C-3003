require_once ("D:/xampp/htdocs/PlayBox/models/UserModels.php");
<?php
if (isset($_GET['action']) and $_GET['action'] == 'create') {
  UserController::create();
}
else if (isset($_GET['action']) and $_GET['action'] == 'update') {
  UserController::update();
}

class UserController{
  
  static function index(){
    $data = UserModel::select();
    return $data;
  }

  public static function create(){
    global $url;
    $data = UserModel::create($_POST['nama'],$_POST['email'],$_POST['password']);
    header("Location:".$url."pages/Auth/signup.php");
  }

  public static function detail($id){
    $data = UserModel::detail($_GET['id']);
    return $data;
  }

  public static function update(){
    global $url;
    $data = UserModel::update($_POST['id'],$_POST['nama'],$_POST['email'],$_POST['password'], $_POST['deskripsi'], $_POST['image']);
    header("Location:".$url."pages/PlayBox/account.php");
  }
}
