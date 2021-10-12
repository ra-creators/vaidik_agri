<?php 

$showError= "false";
if($_SERVER["REQUEST_METHOD"]== "POST"){

    include ('connection.php');

    $email = $_POST['email'];
    $pass = $_POST['password'];



    $sql = " SELECT * FROM users where email ='$email' ";

    $result = mysqli_query($conn,$sql);
    $numRows = mysqli_num_rows($result);

    if($numRows==1){

        $row = mysqli_fetch_assoc($result);

        if($pass == $row['password'])

        // if(password_verify($pass, $row['password']))
        {

            session_start();

            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $email;
           
            header('Location: ../../index.php');


        }

        else{
            // $_SESSION['loggedin'] = 2;
            header('Location: ../../login.php');
            
        }
        

        
        
    }

    else{
        //  $_SESSION['loggedin'] = 2;
        header('Location: ../../login.php');
        $alertt=1;
    }

}