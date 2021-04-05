<?php
include 'config.php';
$pram=$_GET['id'];
$category = $_POST['category-group'];
$ad_type = $_POST['add_type'];
$ad_title = $_POST['adtitle'];
$descibe_Add = $_POST['add_describe'];
$price = $_POST['price'];
$filename1 = rand() . $_FILES['image1']['name'];
$filename2 = rand() . $_FILES['image2']['name'];
$filename3 = rand() . $_FILES['image3']['name'];
$filename4 = rand() . $_FILES['image4']['name'];
$filename5 = rand() . $_FILES['image5']['name'];
move_uploaded_file($_FILES['image1']['tmp_name'], "fileupload/" . $filename1);
move_uploaded_file($_FILES['image2']['tmp_name'], "fileupload/" . $filename2);
move_uploaded_file($_FILES['image3']['tmp_name'], "fileupload/" . $filename3);
move_uploaded_file($_FILES['image4']['tmp_name'], "fileupload/" . $filename4);
move_uploaded_file($_FILES['image5']['tmp_name'], "fileupload/" . $filename5);
$image_arr = array($filename1, $filename2, $filename3, $filename4, $filename5);
$str = implode(",", $image_arr);
$name = $_POST['seller-name'];
$seller_email = $_POST['seller-email'];
$phone = $_POST['seller-Number'];
$loc = $_POST['seller-Location'];
$city = $_POST['seller-area'];
$add = $_POST['rdpackage'];
$methods = $_POST['Method']; 
/*database starts now*/
$sql = mysql_query("update tb1adds set ad_category='" . $category . "',ad_type='" . $ad_type . "',ad_title='" . $ad_title . "',describe_add='" . $descibe_Add . "',ad_price='" . $price . "',ad_images='" . $str . "',ad_package='".$add."' where aid='" . $pram . "'");
if($sql){
    echo "your updation is successfully done!!!!";
}
?>