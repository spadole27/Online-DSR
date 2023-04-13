<?php
include_once("config.php");
$id= $_GET['id'];
$sql= "DELETE FROM `request` WHERE  id=$id";
$result=mysqli_query($conn,$sql);
if($result){
echo "<script>
alert('deleted succesfully');
</script>";

    header("Location: show_request.php?");
}
else{
    echo "Failed;".mysqli_error($conn);
}
?>
