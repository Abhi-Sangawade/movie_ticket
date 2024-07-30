<?php

include_once 'dbfun.php';

extract($_POST);

$link= connect();


if(isset($_FILES["banner"])){
    $banner=$_FILES["banner"]["tmp_name"];
    $banner="banners/$mid.jpg";
}

if(isset($_FILES["posters"])){
    move_uploaded_file($banner, "banners/$id.jpg");
    $poster="posters/$mid.jpg";
}

$query="update movie set mname='$mname',director='$director',actor='$actor',"
        . "actress='$actress',trailer='$trailer',"
        . "reldate='$reldate',descr='$descr' where mid=$mid";

mysqli_query($link, $query) or die("Error ".mysqli_error($link));


$_SESSION["msg"]="Movie Saved successfully..";

header("location: movies.php");


