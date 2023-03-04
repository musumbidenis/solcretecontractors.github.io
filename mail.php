<?php
    $to = 'info@solcretecontractors.com';
    $name = $_POST['name'];
    $from = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $subject = $_POST['subject'];
    $headers = 'From:' . $from;
    
    $txt = "You have received an email from \r\nName:" .$name. "\r\nEmail:" .$from. "\r\nPhone Number:" .$phone. "\r\nMessage:" .$message;
    
    $result = mail($to, $subject, $txt, $headers);

    if ($result) {
        header('location:notification.html');
    } else {
        echo '<script type="text/javascript">alert("Sorry! Message was not sent, Try again Later.");</script>';
        echo '<script type="text/javascript">window.location.href = index.html;</script>';
    }

?>
