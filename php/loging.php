<?php
$host='localhost';
$uname='root';
$pwd='';
$db='loging';
$con=new mysqli($host,$uname,$pwd,$db);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
if(isset($_POST['add'])) {
    $myusername =$_POST['username'];
    $mypassword =$_POST['password']; 
    
    $sql = "SELECT * FROM loging WHERE username = '$myusername' and password = '$mypassword'";
    $count=0; 
    $result = $con->query($sql)or die($con->error);
    while(($row = $result->fetch_assoc()) !== null){
        $count++;
    }
    if($count==1){
        header("location:admin_search.php");
    }
    else{
        echo "fail";
    }
 }
?>