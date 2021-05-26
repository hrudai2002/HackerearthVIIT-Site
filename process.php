<?php
 if(isset($_POST['email']))  {

    // Email information
    $admin_email = "hrudai2002@gmail.com";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    // send email
    mail($admin_email,"New Form Submission",$message . '-' . $phone, "From:" . $email);
    
    // back to
    header('Location: http://edgeledger.net/success.html');
 }