<?php
include("Model_Song.php");
session_start(); //memulai session

//buat session songlist kalo belum ada
if (!isset($_SESSION['songlist'])){
    $_SESSION['songlist'] = array();
}

function createSong(){
    $song = new Model_Song();
    $song->title = $_POST['inputTitle'];
    $song->artist = $_POST['inputArtist'];
    $song->year = $_POST['inputYear'];
    array_push($_SESSION['songlist'],$song);
}

//utk dpt semua song yg ada dalam songlist
function getAllSong(){
    return $_SESSION['songlist'];
}


//jika button add di klik
if(isset($_POST['button_add'])){
    createSong();
    header("Location:View_Song.php");//kembali ke halaman lain
}

?>