<?php 

 

    $conn = new mysqli('localhost', 'root', '', 'moviedb');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

 

    if(isset($_POST['edit'])){  
        $empid = $_POST['bid']; 
        $sid = $_POST['pname']; 
        $snackamt = $_POST['price'];  
        $totals = $_POST['ticktamt'];  
        $total = $totals+$snackamt;  

        
        $sql = "UPDATE booking SET snack_id = '$sid', snack_amt = '$snackamt', total = '$total'  WHERE bid = '$empid'";  
        if($conn->query($sql)){
            $_SESSION['success'] = 'Item Added successfully';
        }
        else{   
            $_SESSION['error'] = $conn->error;
        }

    }  
    else{
        $_SESSION['error'] = 'Select Record to edit first';
    }

    header('location: payment.php');
?>  

