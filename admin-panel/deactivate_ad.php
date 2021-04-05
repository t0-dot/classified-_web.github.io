<?php

include'config.php';

$pram = $_GET['aid'];
if (mysql_query("update tb1adds set ad_status='R' where aid='" . $pram . "'")) {
    $con1 = mysql_query("select seller_email from tb1users where uid='" . $pram . "'");
    $row = mysql_fetch_array($con1);
   $from="you@yourdomain";
    $to = $row['seller_email'];
    $subject = "Rejected";
    $message = "<html><head><title>Ad</title></head><body>You ad has been reject<br/>Login to yoru Member Panel to see why your Ad is Rejected</body></html>";
    
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
    $mailsend = mail($to, $subject, $message, $headers);
    if ($mailsend) {
        echo "<script>alert('Email sent');</script>";
    } else {
        echo "<script>alert('Email not sent');</script>";
    }

    echo "<script>window.location.href='adds.php';</script>";
    
} else {

    echo "<script>alert('Error !!');window.location.href='adds.php';</script>";
}
?>
