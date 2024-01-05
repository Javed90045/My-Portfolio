<?php

if(isset($_POST['send']))
{
    $to = "Javedali90045@gmail.com";
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $from = $_POST['from-email'];
    $headers = "From : $from";

    mail($to , $subject , $message , $headers);
    echo "mail sent";
}
?>