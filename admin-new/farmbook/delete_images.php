<?php
include('../assets/partials/connection.php');
$ids = $_GET['image_id'];
$sql = "DELETE  from `images` where `sl_no` = '$ids'";
$result = mysqli_query($conn , $sql);
if($result){
    echo 'deleted';
}
else{
    echo 'not deleted';
}
header('images.php');

?>