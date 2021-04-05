<?php
include'config.php';

$pram=$_GET['aid'];
if(mysql_query("delete from tb1adds where aid='".$pram."'")){
    echo  "<script>window.location.href='adds.php';</script>";
}
else{
   
    echo  "<script>alert('Error !!');window.location.href='adds.php';</script>";
}
?>
