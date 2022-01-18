<?php 
//extract($_POST);
//if(isset($_POST['submit'])){
    $from="care@roshnitemposervice.com";
    $from1="rajesh.tewari@ymail.com";
    $username =  $_POST['username'];
    $companyname =  $_POST['companyname'];
    $subject =  $_POST['subject'];
    $email = $_POST['email']; 
  	$message  =  $_POST['message'];
    $message .= "<h1>This is headline.</h1>";
    $phonenumber  =  $_POST['phonenumber'];    
    $headers = "From:" . $from;
    $headers2 = "From:" . $from1;
    $retval= mail($email,$subject,$message,$headers);
     if( $retval == true ) {
     	//include "index.html";
        //header('refresh=5;location=index.html');        
        echo "Message sent successfully...we will contact you shortly";
     }else {
        echo "Message could not be sent...";
     }
?>
