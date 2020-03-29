<?php
$host='localhost';
$uname='root';
$pwd='';
$db='contact';
$con=new mysqli($host,$uname,$pwd,$db);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
if(isset($_POST['add'])){
    $fname=$con -> real_escape_string($_POST['first_name']);
    $lname=$con -> real_escape_string($_POST['last_name']);
    $email=$con -> real_escape_string($_POST['email']);
    $phone=$con -> real_escape_string($_POST['phone']);
    $add1=$con -> real_escape_string($_POST['address1']);
    $add2=$con -> real_escape_string($_POST['address2']);
    $city=$con -> real_escape_string($_POST['city']);
    $district=$con -> real_escape_string($_POST['district']);
    $zip=$con -> real_escape_string($_POST['zip']);
    if(isset($_POST['confirm'])){
        $confirm="Confirmed";
    }
    else{$confirm="Not Confirmed";}
    
    $weddingdate=$_POST['weddingdate'];
    $package=$_POST['package'];
   

    $sql="INSERT INTO contact VALUES ('{$invoice}','{$fname}','{$lname}','{$email}','{$phone}','{$add1}','{$add2}','{$city}','{$district}','{$zip}','{$confirm}','{$weddingdate}','{$package}')";
    if($con->query($sql)or die($con->error)){
        echo "done";
        header("location:booking_sucess.html");
    }
    else{echo "fail";}
}

?>