<?php

include_once 'dbfun.php';

extract($_POST);

$link= connect();
$id= getMovieId();

$photoname=$_FILES["photo"]["tmp_name"];
$banner=$_FILES["banner"]["tmp_name"];
move_uploaded_file($photoname, "posters/$id.jpg");
$poster="posters/$id.jpg";
move_uploaded_file($banner, "banners/$id.jpg");
$banner="banners/$id.jpg";

$query="insert into movie(mid,mname,reldate,director,actor,actress,trailer,poster,descr,banner) "
        . "values('$id','$mname','$reldate','$director','$actor','$actress',"
        . "'$trailer','$poster','$descr','$banner')";

mysqli_query($link, $query) or die("Error ".mysqli_error($link));


$_SESSION["msg"]="Movie Saved successfully..";

header("location: movies.php");


