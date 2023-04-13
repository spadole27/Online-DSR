<?php
include_once "./config.php";
session_start();


$name = $_POST["name"];
$token = bin2hex(random_bytes(4));
$branch = $_POST["branch"];
$iname = $_POST["iname"];
$iq = $_POST["iquantity"];
$ispec = $_POST["ispec"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];


$my_date = date("d/m/Y");
$sql = "INSERT INTO request(token,name,branch,iname,iquantity,ispec,email,mobile,date) VALUES('$token','$name','$branch','$iname','$iq','$ispec','$email','$mobile','$my_date')";
//execute query command
$checkResult = mysqli_query($conn, $sql);

if ($checkResult) {


        
    
   
    header("Location: ./index.php");
  } else {
    echo "Unsuccessful!!";
}


?>
