<?php
require_once "models/PlayBoxModels.php";
require_once "function/function.php";

class PlayBoxController{
  
  public function index(){
    $data = PlayBoxModel::select();
    loadView('pages/Dashboard/dashboard', $data);
  }

  public function player(){
    $data = PlayBoxModel::select();
    loadView('pages/PlayBox/player', $data);
  }

  public function formcreate(){
    loadView('pages/Playbox/create');
  }

  public function create(){
    global $url;
    $data = PlayBoxModel::create($_POST['nama'],$_POST['tanggal'],$_POST['play_time'], $_POST['end_time'], $_POST['harga']);
    header("Location:".$url."PlayBox/");
  }

  public function detail($id){
    $data = PlayBoxModel::detail($id);
    return $data;
  }

  public function formupdate($id){
    // die($id);
    $data = PlayBoxModel::detail($id);
    loadView('pages/PlayBox/update', $data);
  }

  public function update($id){
    global $url;
    $data = PlayBoxModel::update($id,$_POST['nama'],$_POST['tanggal'],$_POST['play_time'], $_POST['end_time'], $_POST['harga']);
    header("Location:".$url."PlayBox/player");
  }

  public function delete($id){
    global $url;
    $data = PlayBoxModel::delete($id);
    header("Location:".$url."PlayBox/player");
  }
}