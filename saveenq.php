<?php

include_once 'dbfun.php';

extract($_POST);

$link= connect();

$query="insert into enquiry(name,subject,email,phone,query) "
        . "values('$name','$subject','$email','$phone','$query')";

mysqli_query($link, $query) or die("Error ".mysqli_error($link));

$_SESSION["msg"]="Enquiry Saved successfully..";

header("location: contact.php");



