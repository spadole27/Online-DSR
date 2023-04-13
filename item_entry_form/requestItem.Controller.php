<?php
session_start();
include_once "./config.php";


$iname=$_POST["iname"];
$iq=$_POST["iquantity"];
$ispec=$_POST["ispec"];
$price = $_POST["price"];
$my_date = date("d-m-Y");


// $date=$_POST["date"];
// $hobbyInString=serialize($hobby);
$sql = " INSERT INTO item_entry(iname,iquantity,ispec,price,date) VALUES('$iname','$iq','$ispec','$price','$my_date')";
//execute query command
$checkResult= mysqli_query($conn, $sql);

if($checkResult){
 
  $_SESSION['status'] = "ITEM ENTRY SUCCESS ";
    header("Location: ./index.php");
}
else{
    echo "Unsuccessful!!";
}


?>