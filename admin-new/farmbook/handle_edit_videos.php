<?php


include('../assets/partials/connection.php');

    
        // if(isset($_POST['upload']))
        $method =  $_SERVER['REQUEST_METHOD'];
        if($method == 'POST')
{

    $title=$_POST["author"];

    
   

    $file_name = $_FILES['file']['name'];
    $file_type = $_FILES['file']['type'];
    $file_size = $_FILES['file']['size'];
    $file_tem_loc = $_FILES['file']['tmp_name'];
    $file_store = "../assets/upload/images/".$file_name;

    
    $ids = $_GET['image_id'];

    $sql = "UPDATE videos SET `location` = '$file_store' , `title`='$title' where `id` = '$ids'";
    $result = mysqli_query($conn , $sql);
    if($result){
        echo 'hey this is the good one';
    }
    else{
        echo 'this is the bad one';
    }

   
    if(move_uploaded_file($file_tem_loc,$file_store)){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Image has been successfully edited.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    else{
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
       <strong>Error!</strong> We are facing some technical issue. Try again later
       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>';
   }
}

// header('location:videos.php');
?>

