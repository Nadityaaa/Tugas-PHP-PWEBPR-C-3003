<?php
require_once ("models/ImageModels.php");
// if (isset($_GET['action']) and $_GET['action'] == 'create') {
//   ImageController::create();
// }

class ImageController{

  public function formcreate(){
    loadView('pages/Playbox/dokumentasi');
  }

  public function create(){
    global $url;
    $file = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    move_uploaded_file($file_tmp, 'pages/Image/' . $file);

    $data = ImageModel::create($file,$_POST['deskripsi']);
    header("Location:".$url."PlayBox/");
  }
}