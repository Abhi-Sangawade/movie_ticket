<?php

include_once 'dbfun.php';

extract($_POST);
 
$link= connect();
$userid=$_SESSION["userid"];
$snack_id = 0;
$snack_amt = 0;
$total =0;
 
$ticket_rate = 

$amount=$seats*$ticket_rate;

$query="insert into booking(cid,mid,tid,sid,bdate,seat,seatnums,amount,snack_id,snack_amt,total) "
        . "values('$userid','$mid','$tid','$sid','$bdate','$seats','$seatnums','$amount','$snack_id','$snack_amt','$total')";

mysqli_query($link, $query) or die("Error ".mysqli_error($link));

$_SESSION["msg"]="Booking successfully..";
$bid= mysqli_insert_id($link);

header("location: payment.php?id=$bid");


