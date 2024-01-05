<?php

if(isset($_POST['send']))
{
    $to = "Javedali90045@gmail.com";
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $from = $_POST['from-email'];
    $headers = "From : $from";

    
    if(mail($to , $subject , $message , $headers))
    {
        echo "mail sent";
    }
    else{
        echo "not sent";
    }
}
?>