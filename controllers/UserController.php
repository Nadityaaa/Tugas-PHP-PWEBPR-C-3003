<?php

require_once "models/UserModels.php";
require_once "function/function.php";

class UserController{
  
  public function __construct()
  {
    global $url;
    session_start();
    if(isset($_SESSION['is_auth']) and $_SESSION['is_auth'] == true)
    {
      echo "<script>window.location.href = '".$url."PlayBox/dashboard'</script>";
    }
  }

  static function viewsignin(){
    loadView('pages/Auth/signin');
  }

  static function viewsignup(){
      loadView('pages/Auth/signup');
  }

  static function signin(){
    global $url;
    if (empty($_POST["email"])) {
      echo "<script>alert('Kolom email tidak boleh kosong');window.location.href = '".$url."PlayBox/signin'</script>";
      exit(); 
    } 
    else if (empty($_POST["password"])) {
      echo "<script>alert('Kolom password tidak boleh kosong');window.location.href = '".$url."PlayBox/signin'</script>";
      exit();
    }
    $data = UserModel::getdata($_POST["email"]);
    if ($_POST["email"] != $data[0]['email']) {
      echo("<script>alert('Kolom email salah');window.location.href = '".$url."PlayBox/signin'</script>");
      exit();
    }
    if ($_POST["password"] != $data[0]['password']) {
      echo("<script>alert('Kolom password salah');window.location.href = '".$url."PlayBox/signin'</script>");
      exit();
    }
    session_start();
    $_SESSION["email"] = $data[0]['email'];
    $_SESSION["id"] = $data[0]['id'];
    $_SESSION["is_auth"] = true;
    header('Location: '.$url.'PlayBox/dashboard');
    exit();
  }

  static function signup(){
    global $url;
    if (empty($_POST["nama"])) {
      echo "<script>alert('Kolom nama tidak boleh kosong');window.location.href = '".$url."PlayBox/signup'</script>";
      exit(); 
    } 
    else if (empty($_POST["email"])) {
      echo "<script>alert('Kolom email tidak boleh kosong');window.location.href = '".$url."PlayBox/signup'</script>";
      exit();
    }
    else if (empty($_POST["password"])) {
      echo "<script>alert('Kolom password tidak boleh kosong');window.location.href = '".$url."PlayBox/signup'</script>";
      exit();
    }
    if (strlen($_POST["password"]) < 8) {
      echo("<script>alert('Kolom judul minimal input 8 karakter');window.location.href = '".$url."PlayBox/signup'</script>");
      exit();
    }
    $data = UserModel::getdata($_POST["nama"]);
    if ($data[0]['nama'] != "") {
      echo("<script>alert('Uesrname sudah dipakai!');window.location.href = '".$url."PlayBox/signup'</script>");
      exit();
    }
    $result = UserModel::signup($_POST['nama'], $_POST['email'], $_POST['password']);
    if($result){
      $data = UserModel::getdata($_POST["nama"]);
      session_start();
      $_SESSION["nama"] = $data[0]['nama'];
      $_SESSION["email"] = $data[0]['email'];
      $_SESSION["id_user"] = $data[0]['id_user'];
      $_SESSION["is_auth"] = true;
      header('Location: '.$url.'PlayBox/dashboard');
      exit();
    }
    else {
      echo("<script>alert('gagal signup, ulangi kembali');window.location.href = '".$url."PlayBox/signup'</script>");
      exit();
    }
  }

  static function logout(){
    global $url;
    session_start();
    if(!isset($_SESSION['is_auth']))
    {
      echo "<script>window.location.href = '".$url."PlayBox/signin'</script>";
      exit();
    }
    session_unset();
    session_destroy();
    header('Location: '.$url.'PlayBox/signin');
  }
}
