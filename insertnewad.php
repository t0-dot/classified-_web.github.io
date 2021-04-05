<?php
include('config.php');

/* $category="";
  $ad_type="";
  $phone="";
  $filename1 = "";
  $filename2 = "";
  $filename3 = "";
  $filename4 = "";
  $filename5 = "";
  $name ="";

  $Seller_email = "";


  $phone ="";
  $loc = "";
  $city ="";
  $add ="";
  $methods = "";


  $category = $_POST['category-group'];
  echo "<b>Ad Type:</b>" . $ad_type = $_POST['inlineRadioOptions'] ;
  echo "<b>Ad Title:</b>" . $ad_title = $_POST['adtitle'];
  echo "<b>Descibe_Ad:</b>" . $Descibe_Add = $_POST['textarea'] ;
  echo "<b>Price:</b>" . $price = $_POST['price'];

  echo "</br></br>****************************************";
  echo "</br></br><b>Your images upload details:</b></br></br>";

  $filename1 = rand().$_FILES['image1']['name'];
  $filename2 = rand().$_FILES['image2']['name'];
  $filename3 = rand().$_FILES['image3']['name'];
  $filename4 = rand().$_FILES['image4']['name'];
  $filename5 = rand().$_FILES['image5']['name'];


  if(empty($_FILES['image1']['name']))
  {
  echo "<b>NOT UPLOAD</b></br>";
  $filename6="please upload your first image";
  }
  else
  {
  move_uploaded_file($_FILES['image1']['tmp_name'], "fileupload/" . $filename1);
  echo "your first image is uploaded</br>";
  $filename6=$filename1;
  }

  if(move_uploaded_file($_FILES['image2']['tmp_name'], "fileupload/" . $filename2)){
  echo "your second image is uploaded</br>";
  $filename7=$filename2;


  }
  else {
  echo "<b>NOT UPLOAD</b></br>";
  $filename7="please upload your second image";
  }


  if(move_uploaded_file($_FILES['image3']['tmp_name'], "fileupload/" . $filename3)){
  echo " your third is uploaded</br>";
  $filename8=$filename3;
  }
  else {
  echo "<b>NOT UPLOAD</b></br>";
  $filename8="please upload your third image";
  }

  if(move_uploaded_file($_FILES['image4']['tmp_name'], "fileupload/" . $filename4)){
  echo  " your fourth is uploaded</br>";
  $filename9=$filename4;
  }
  else {
  echo "<b>NOT UPLOAD</b></br>";
  $filename9="please upload your  fourth image";
  }

  if(move_uploaded_file($_FILES['image5']['tmp_name'], "fileupload/" . $filename5)){
  echo " your last image is uploaded</br>";
  $filename10=$filename5;
  }
  else {
  echo "<b>NOT UPLOAD</b></br>";
  $filename10="please upload your fivth image";
  }

  $image_arr=array($filename6,$filename7,$filename8,$filename9,$filename10);
  echo "****************************************</br></br>";
  echo "<b>Your Image Name As:</b></br></br>";
  $str=  implode(",", $image_arr);
  print_r($str);
  echo "</br>";

  echo "</br>****************************************</br></br>";
  echo "<b>Seller Information</b></br></br>";
  echo "<b>Name:</b>" . $name = $_POST['textinput-name'];

  echo "<b>Seller Email:</b>" . $Seller_email = $_POST['seller-email'] ;
  echo "<b>phone number:</b>";

  $phone = $_POST['seller-Number'];
  echo "<b>Loaction:</b>" . $loc = $_POST['seller-Location'];
  echo "<b>City:</b>" . $city = $_POST['seller-area'] ;

  echo "</br>****************************************</br></br>";

  echo "<b>Make your ad premium </b></br></br></br>";
  echo "AD's:" . $add = $_POST['exampleRadios'] . "</br>";
  echo $methods = $_POST['Method'] . "</br>";
*/
 
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
/* Databaase Code Starts */
include('config.php');
$userid = "";
$packageid = $_POST['rdpackage'];
$sql = mysql_query("select * from tb1users where seller_phone='" . $phone . "'");

if (mysql_num_rows($sql) > 0) {
    while ($getrowid = mysql_fetch_array($sql)) {
        $user_id = $getrowid['uid'];
    }
    $query = mysql_query("insert into tb1adds values('0','" . $category . "','" . $ad_type . "','" . $ad_title . "','" . $descibe_Add . "','" . $price . "','" . $str . "','" . $user_id . "','" . $packageid . "','" . date('Y-m-d') . "','N','')");

    echo "<script>alert('Thank You. Your Ad is Awaiting Approval');</script>";
} else {
    $userpass = rand();
    
    $reguser = mysql_query("insert into tb1users values('0','" . $name . "','" . $seller_email . "','" . $phone . "','" . $loc . "','" . $city . "','" . $userpass . "','" . date('d-M-Y') . "','Y')");
      $userid = mysql_insert_id($con);
// mail send for user to info that he was registrated successful on classified website
    if ($reguser) {
        $msg = "You are Registered on Classified website
                Username : $seller_email
                Password : $userpass";
        $to = $seller_email;
        $subject = "you are success registrated";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $mailsend = mail($to, $subject, $msg, $headers);
        if ($mailsend) {
            echo "<script>alert('Email sent');</script>";
        } else {
            echo "<script>alert('Email not sent');</script>";
        }
        
    }
  
        $query = mysql_query("insert into tb1adds values('0','" . $category . "','" . $ad_type . "','" . $ad_title . "','" . $descibe_Add . "','" . $price . "','" . $str . "','" . $userid . "','" . $packageid . "','" . date('Y-m-d') . "','N','')");

        echo "<script>alert('Thank You. Your Ad is Awaiting Approval');</script>";
    
        }
?>