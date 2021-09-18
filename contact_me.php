<?php
    header('Content-type: application/ajax');
    $status=array(
        'type'=>'success',
        'message'=>'Email sent!'
    );
    $name=@trim(stripslashes($_POST['name'])); 
    $email=@trim(stripslashes($_POST['email'])); 
    $phone=@trim(stripslashes($_POST['phone'])); 
    $message=@trim(stripslashes($_POST['message'])); 
    $email_from='work@agencyworld.in';
    $email_to='work@agencyworld.in';
    $body='Name: '.$name."\n\n".'Email: '.$email."\n\n".'Phone No.: '.$phone."\n\n".'Message: '.$message;
    mail($email_to, 'contactForm', $body, 'From: <'.$email_from.'>');
    echo json_encode($status);
    die;
?>


