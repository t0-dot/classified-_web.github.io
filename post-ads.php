<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

    <!-- Mirrored from templatecycle.com/demo/bootclassified-5.1/dist/post-ads.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Mar 2021 09:13:37 GMT -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <title>BOOTCLASIFIED - Responsive Classified Theme</title>
        <!-- Bootstrap core CSS -->
        <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">


        <link href="assets/css/style.css" rel="stylesheet">

        <!-- styles needed for carousel slider -->
        <link href="assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
        <link href="assets/plugins/owl-carousel/owl.theme.css" rel="stylesheet">

        <!-- bxSlider CSS file -->
        <link href="assets/plugins/bxslider/jquery.bxslider.css" rel="stylesheet"/>

        <!-- Just for debugging purposes. -->
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <!-- include pace script for automatic web page progress bar  -->
        <script>
            paceOptions = {
                elements: true
            };
        </script>
        <script src="assets/js/pace.min.js"></script>
        <script src="assets/plugins/modernizr/modernizr-custom.js"></script>


    </head>
    <body>
        <div id="wrapper">

            <?php
            
            include 'header.php';
            $disabled="";
            $readonly="";
            $getcategory = "";
            $getad_type = "";
            $getad_title = "";
            $getdescribe_add = "";
            $getprice = "";
            $getad_images = "";
            $getad_user = "";
            $getad_package = "";
            $getseller_name="";
            $getseller_email="";
            $getseller_phone="";
            $getseller_loc="";
            $getseller_city_loc="";
            $required="required";
            if (isset($_GET['aid'])) {
                if ($sql = mysql_query("select * from tb1adds where aid='" . $_GET['aid'] . "'")) {

                    while ($row = mysql_fetch_array($sql)) {
                        $disabled="disabled";
                        $readonly="readonly";
                        
                        $required="";
                        $getcategory = $row['ad_category'];
                        $getad_type = $row['ad_type'];
                        $getad_title = $row['ad_title'];
                        $getdescribe_add = $row['describe_add'];
                        $getprice = $row['ad_price'];
                        $getad_images = $row['ad_images'];

                        $getad_user = $row['ad_user'];
                        $getad_package = $row['ad_package'];
                          if( $con1=mysql_query("select * from tb1users where uid =".$row['ad_user'])){
                                if($row1=mysql_fetch_array($con1)){
                                  $getseller_name= $row1['seller_name'];
                                   $getseller_email=  $row1['seller_email'];
                                   $getseller_phone=$row1['seller_phone'];
                                    $getseller_loc=$row1['seller_location'];
                                   
                                   $getseller_city_loc=$row1['seller_city'];
                                                 
                   }
                        
                    }
                }
            }
            }
            $arr_of_images = explode(",", $getad_images);
            ?>
            <!-- /.header -->

            <label class="theme-switcher theme-switcher-left-right">
                <span class="theme-switcher-label" data-on="Dark Off" data-off="Dark Mode"></span>
                <span class="theme-switcher-handle"></span>
            </label>


            <div class="main-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 page-content">
                            <div class="inner-box category-content">
                                <h2 class="title-2 uppercase"><strong> <i class="icon-docs"></i> Post a Free Classified
                                        Ad</strong></h2>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <?php
                                        if(isset($_GET['aid']))
                                        {
                                            $action="updatead.php?id=".$_GET['aid'];
                                        }
                                        else
                                        {
                                            $action="insertnewad.php";
                                        }
                                        ?>
                                        <form class="form-horizontal" method="post" action="<?php echo $action;?>" enctype="multipart/form-data">

                                            <div class="form-group row">
                                                <label  class="col-sm-3 col-form-label">Category</label>
                                                <div class="col-sm-8">
                                                    <select name="category-group" id="category-group" class="form-control">
                                                        <option value="0" selected="selected"> Select a category...</option>
                                                        <option value="Vehicles"
                                                                style="background-color:#E9E9E9;font-weight:bold;"
                                                                disabled="disabled"> - Vehicles -
                                                        </option>
                                                        <?php echo $getcategory; ?>
                                                        <option value="Cars"<?php
                                                        if ($getcategory == "Cars") {
                                                            echo "selected";
                                                        }
                                                        ?>> Cars</option>

                                                        <option value="Commercial vehicles"<?php
                                                        if ($getcategory == "Commercial vehicles") {
                                                            echo "selected";
                                                        }
                                                        ?>> Commercial vehicles</option>
                                                        <option value="Motorcycles"<?php
                                                        if ($getcategory == "Motorcycles") {
                                                            echo "selected";
                                                        }
                                                        ?>> Motorcycles</option>
                                                        <option value="Motorcycle Equipment"<?php
                                                        if ($getcategory == "Motorcycle Equipment") {
                                                            echo "selected";
                                                        }
                                                        ?>> Car &amp; Motorcycle
                                                            Equipment
                                                        </option>
                                                        <option value="Boats"<?php
                                                        if ($getcategory == "Boats") {
                                                            echo "selected";
                                                        }
                                                        ?>> Boats</option>
                                                        <option value="Vehicles"<?php
                                                        if ($getcategory == "Vehicles") {
                                                            echo "selected";
                                                        }
                                                        ?>> Other Vehicles</option>
                                                        <option value="House"
                                                                style="background-color:#E9E9E9;font-weight:bold;"
                                                                disabled="disabled"> - House and Children -
                                                        </option>
                                                        <option value="Appliances"<?php
                                                        if ($getcategory == "Appliances") {
                                                            echo "selected";
                                                        }
                                                        ?>> Appliances</option>
                                                        <option value="Inside"<?php
                                                        if ($getcategory == "Inside") {
                                                            echo "selected";
                                                        }
                                                        ?>> Inside</option>
                                                        <option value="Games"<?php
                                                        if ($getcategory == "Games") {
                                                            echo "selected";
                                                        }
                                                        ?>> Games and Clothing</option>
                                                        <option value="Garden"<?php
                                                        if ($getcategory == "Garden") {
                                                            echo "selected";
                                                        }
                                                        ?>> Garden</option>
                                                        <option value="Multimedia"
                                                                style="background-color:#E9E9E9;font-weight:bold;"
                                                                disabled="disabled"> - Multimedia -
                                                        </option>
                                                        <option value="Telephony"<?php
                                                        if ($getcategory == "Telephony") {
                                                            echo "selected";
                                                        }
                                                        ?>> Telephony</option>
                                                        <option value="Image"<?php
                                                        if ($getcategory == "Image") {
                                                            echo "selected";
                                                        }
                                                        ?>> Image and sound</option>
                                                        <option value="Computers"<?php
                                                        if ($getcategory == "Computers") {
                                                            echo "selected";
                                                        }
                                                        ?>> Computers and Accessories</option>
                                                        <option value="Video"<?php
                                                        if ($getcategory == "Video") {
                                                            echo "selected";
                                                        }
                                                        ?>> Video games and consoles</option>
                                                        <option value="Real"
                                                                style="background-color:#E9E9E9;font-weight:bold;"
                                                                disabled="disabled"> - Real Estate -
                                                        </option>
                                                        <option value="Apartment"<?php
                                                        if ($getcategory == "Apartment") {
                                                            echo "selected";
                                                        }
                                                        ?>> Apartment</option>
                                                        <option value="Home"<?php
                                                        if ($getcategory == "Home") {
                                                            echo "selected";
                                                        }
                                                        ?>> Home</option>
                                                        <option value="Vacation"<?php
                                                        if ($getcategory == "Vacation") {
                                                            echo "selected";
                                                        }
                                                        ?>> Vacation Rentals</option>
                                                        <option value="Commercial"<?php
                                                        if ($getcategory == "Commercial") {
                                                            echo "selected";
                                                        }
                                                        ?>> Commercial offices and local</option>
                                                        <option value="Grounds"<?php
                                                        if ($getcategory == "Grounds") {
                                                            echo "selected";
                                                        }
                                                        ?>> Grounds</option>
                                                        <option value="Houseshares"<?php
                                                        if ($getcategory == "Houseshares") {
                                                            echo "selected";
                                                        }
                                                        ?>> Houseshares</option>
                                                        <option value="Other real estate"<?php
                                                        if ($getcategory == "Other real estate") {
                                                            echo "selected";
                                                        }
                                                        ?>> Other real estate</option>
                                                        <option value="Services"
                                                                style="background-color:#E9E9E9;font-weight:bold;"
                                                                disabled="disabled"> - Services -
                                                        </option>
                                                        <option value="Jobs"<?php
                                                        if ($getcategory == "Jobs") {
                                                            echo "selected";
                                                        }
                                                        ?>> Jobs</option>
                                                        <option value="Job application"<?php
                                                        if ($getcategory == "Job application") {
                                                            echo "selected";
                                                        }
                                                        ?>> Job application</option>
                                                        <option value="Services"<?php
                                                        if ($getcategory == "Services") {
                                                            echo "selected";
                                                        }
                                                        ?>> Services</option>
                                                        <option value="Price"<?php
                                                        if ($getcategory == "Price") {
                                                            echo "selected";
                                                        }
                                                        ?>> Price</option>
                                                        <option value="Business"<?php
                                                        if ($getcategory == "Business") {
                                                            echo "selected";
                                                        }
                                                        ?>> Business and goodwill</option>
                                                        <option value="Professional"<?php
                                                        if ($getcategory == "Professional") {
                                                            echo "selected";
                                                        }
                                                        ?>> Professional equipment</option>
                                                        <option value="dropoff"
                                                                style="background-color:#E9E9E9;font-weight:bold;"
                                                                disabled="disabled"> - Extra -
                                                        </option>
                                                        <option value="Other"<?php
                                                        if ($getcategory == "Other") {
                                                            echo "selected";
                                                        }
                                                        ?>> Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="col-sm-3 col-form-label">Add Type</label>
                                                <div class="col-sm-8">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="add_type" id="inlineRadio1" value="Private" <?php
                                                            if ($getad_type == "Private") {
                                                                echo "checked";
                                                            }
                                                            ?> > Private
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="add_type" id="inlineRadio2" value="Business"<?php
                                                            if ($getad_type == "Business") {
                                                                echo "checked";
                                                            }
                                                            ?>> Business
                                                        </label>
                                                    </div>


                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-sm-3 col-form-label">Ad title</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="Adtitle" name="adtitle" placeholder="Ad title" value="<?php echo $getad_title; ?>">
                                                    <small id="" class="form-text text-muted">
                                                        A great title needs at least 60 characters
                                                    </small>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label  class="col-sm-3 col-form-label">Describe ad</label>
                                                <div class="col-sm-8">
                                                    <textarea class="form-control" name="add_describe" rows="3"><?php
                                                        if ($getdescribe_add) {
                                                            echo $getdescribe_add;
                                                        } else {
                                                            echo "Describe what makes your ad unique";
                                                        }
                                                        ?></textarea>

                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label  class="col-sm-3 col-form-label">Price</label>

                                                <div class="input-group col-sm-6">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">$</span>
                                                    </div>
                                                    <input type="text" class="form-control" name="price" aria-label="Amount (to the nearest dollar)" value="<?php echo $getprice; ?>">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">.00</span>
                                                    </div>
                                                </div>


                                                <div class="col-sm-3">

                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="check" > Negotiable
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label" for="textarea">Picture</label>
                                                <div class="col-lg-8">
                                                    <div class="mb10">
                                                        <?php
                                                        if (isset($_GET['aid'])) {
                                                            echo "<img src='fileupload/" . $arr_of_images[0] . "' width='100px' height='100px' />";
                                                        }
                                                        else{echo $required;}
                                                        ?>
                                                        <input id="input-upload-img1" type="file" name="image1" class="file"  data-preview-file-type="text" />
                                                      
                                                    </div>
                                                    <div class="mb10">
                                                        <?php
                                                        if (isset($_GET['aid'])) {
                                                            echo "<img src='fileupload/" . $arr_of_images[1] . "' width='100px' height='100px' />";
                                                        }
                                                         else{echo $required;}
                                                        ?>
                                                        <input id="input-upload-img2" type="file" name="image2" class="file" data-preview-file-type="text"/>
                                                            
                                                    </div>
                                                    <div class="mb10">
                                                        <?php
                                                        if (isset($_GET['aid'])) {
                                                            echo "<img src='fileupload/" . $arr_of_images[2] . "' width='100px' height='100px' />";
                                                        }
                                                        ?>
                                                        <input id="input-upload-img3" type="file" class="file" name="image3" data-preview-file-type="text">
                                                    </div>
                                                    <div class="mb10">
                                                        <?php
                                                        if (isset($_GET['aid'])) {
                                                            echo "<img src='fileupload/" . $arr_of_images[3] . "' width='100px' height='100px' />";
                                                        }
                                                         else{echo $required;}
                                                        ?>
                                                        <input id="input-upload-img4" type="file" class="file" name="image4" data-preview-file-type="text" />
                                                              
                                                    </div>
                                                    <div class="mb10">
                                                        <?php
                                                        if (isset($_GET['aid'])) {
                                                            echo "<img src='fileupload/" . $arr_of_images[4] . "' width='100px' height='100px' />";
                                                        }
                                                         else{echo $required;}
                                                        ?>
                                                        <input id="input-upload-img5" type="file" class="file" name="image5" data-preview-file-type="text" />
                                                               
                                                    </div>
                                                    <p  class="form-text text-muted">
                                                        Add up to 5 photos. Use a real image1 of your product, not catalogs
                                                    </p>
                                                </div>
                                            </div>


                                            <div class="content-subheading"><i class="icon-user fa"></i> <strong>Seller
                                                    information</strong></div>

                                            <!-- Text input-->
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label" for="textinput-name">Name</label>

                                                <div class="col-sm-8">
                                                    <input id="textinput-name" name="seller-name"
                                                           placeholder="Seller Name" class="form-control input-md"
                                                           type="text" value="<?php echo $getseller_name;?>" <?php echo $readonly; ?>>
                                                </div>
                                            </div>

                                            <!-- Appended checkbox -->
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label" for="seller-email"> Seller
                                                    Email</label>

                                                <div class="col-sm-8">
                                                    <input id="seller-email" name="seller-email" class="form-control"
                                                           placeholder="Email"  type="text" value="<?php echo $getseller_email;?>"<?php echo $readonly; ?>>

                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="" name="hidenumber">
                                                            <small> Hide the phone number on this ads.</small>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label" for="seller-Number">Phone
                                                    Number</label>

                                                <div class="col-sm-8">
                                                    <input id="seller-Number" name="seller-Number"
                                                           placeholder="Phone Number" class="form-control input-md"
                                                       type="text" value="<?php echo $getseller_phone;?>"<?php echo $readonly; ?>>
                                                </div>
                                            </div>

                                            <!-- Select Basic -->
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label" for="seller-Location">Location</label>

                                                <div class="col-sm-8">
                                                    <?php if(isset($_GET['aid']))
                                                    {
                                                        echo '<label class="col-sm-3 col-form-label" for="seller-Location">'.$getseller_loc.'</label>';
                                                    }
                                                    else
                                                    {
                                                        ?>
                                                    
                                                    <select id="seller-Location" name="seller-Location"
                                                            class="form-control">
                                                        <option value="ambalaCantt" <?php if($getseller_loc== "ambalaCantt"){echo "selected"; }else{echo $disabled;}?>>Ambala Cantt</option>
                                                        <option value="hoshiyarpur"<?php if($getseller_city_loc== "hoshiyarpur"){echo "selected";}else{echo $disabled;}?>>Hoshiyarpur</option>
                                                    </select>
                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                            </div>

                                            <!-- Select Basic -->
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label" for="seller-area">City</label>

                                                <div class="col-sm-8">
                                                    <select id="seller-area" name="seller-area" class="form-control">
                                                        <option value="punjab"<?php if($getseller_city_loc=="punjab"){echo "selected";}else{ echo $disabled; }?> >punjab</option>
                                                        <option value="ambala"<?php if($getseller_city_loc=="ambala"){echo "selected"; }else{ echo $disabled; }?>>Ambala</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="card bg-light card-body mb-3">
                                                <h3><i class=" icon-certificate icon-color-1"></i> Make your Ad Premium
                                                </h3>

                                                <p>Premium ads help sellers promote their product or service by getting
                                                    their ads more visibility with more
                                                    buyers and sell what they want faster. <a href="help.php">Learn
                                                        more</a></p>

                                                <div class="form-group row">
                                                    <table class="table table-hover checkboxtable">
                                                        <?php 
                                                                $sql_package=mysql_query("select * from tb1packages where pack_status='Y' ");
                                                                while($row1=  mysql_fetch_array($sql_package)){?>
                                                        <tr>
                                                            <td>
                                                                
                                                                <div class="form-check">
                                                                    <label class="form-check-label">
                                                                        <input class="form-check-input" type="radio" name="rdpackage" id="optionsRadios0" value="<?php echo $row1['pid']; ?>" <?php if ($getad_package ==  $row1['pid']) {
                                                             echo "checked";
                                                        } ?>>
                                                                        <?php
                                                                        echo $row1['pack_name'];
                                                                        ?>
                                                                    </label>
                                                                </div>

                                                            </td>
                                                            <td>
                                                                <p> <?php
                                                                        echo $row1['pack_price'];
                                                                        ?></p>
                                                            </td>
                                                        </tr>
                                                       <!-- <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <label class="form-check-label">
                                                                        <input class="form-check-input" type="radio" name="rdpackage" id="optionsRadios1" value="1"
                                                         
                                                                        <strong> Urgent Ad</strong>
                                                                    </label>
                                                                </div>

                                                            </td>
                                                            <td><p>$10.00</p></td>
                                                        </tr>
                                                        <tr>
                                                            <td>

                                                                <div class="form-check">
                                                                    <label class="form-check-label">
                                                                        <input class="form-check-input" type="radio" name="rdpackage" id="optionsRadios2" value="2" 
                                                      
                                                                        <strong> Top of the Page Ad</strong>
                                                                    </label>
                                                                </div>


                                                            </td>
                                                            <td><p>$20.00</p></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <label class="form-check-label">
                                                                        <input class="form-check-input" type="radio" name="rdpackage" id="optionsRadios3" value="3" 
                                                       
                                                                        <strong> Top of the Page Ad + Urgent Ad</strong>
                                                                    </label>
                                                                </div>


                                                            </td>
                                                            <td><p>$40.00</p></td>
                                                        </tr>-->
                                                         <?php } ?>
                                                        <tr>
                                                            <td>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-8">
                                                                        Select Payment Method:<select class="form-control" name="Method"
                                                                                                      id="PaymentMethod">
                                                                            <option value="paytm">Paytm</option>
                                                                            <option value="Credit / Debit Card">Credit / Debit Card</option>
                                                                            <option value="paypal">Paypal</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><p><strong>Payable Amount : $40.00</strong></p></td>
                                                        </tr>
                                                              
                                                    </table>

                                                </div>
                                            </div>

                                            <!-- terms -->
                                            <div class="form-group row">

                                                <div class="col-sm-8">

                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1">Remember above contact information</label>
                                                    </div>


                                                </div>
                                            </div>

                                            <!-- Button  -->
                                            <div class="form-group row">

                                                <div class="col-sm-8"><!--<a href="posting-success.php" id="button1id"
                                                                         class="btn btn-success btn-lg">-->
                                                    <?php //if(isset($_GET['id'])){
                                                       // echo "<button type='submit'formaction='insertnewad.php?aid='".$_GET['id']."''></button>";
                                                    //}
                                                    ?>
                                                                                       
                                                                                        <input class="btnads" type="submit" name="Submit" value="submit"/><!--</a>--></div>
                                            </div>


                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.page-content -->

                        <div class="col-md-3 reg-sidebar">
                            <div class="reg-sidebar-inner text-center">
                                <div class="promo-text-box"><i class=" icon-picture fa fa-4x icon-color-1"></i>

                                    <h3><strong>Post a Free Classified</strong></h3>

                                    <p> Post your free online classified ads with us. Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. </p>
                                </div>

                                <div class="card sidebar-card">
                                    <div class="card-header uppercase">
                                        <small><strong>How to sell quickly?</strong></small>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body text-left">
                                            <ul class="list-check">
                                                <li> Use a brief title and description of the item</li>
                                                <li> Make sure you post in the correct category</li>
                                                <li> Add nice photos to your ad</li>
                                                <li> Put a reasonable price</li>
                                                <li> Check the item before publish</li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <!--/.reg-sidebar-->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.main-container -->

<?php include 'footer.php'; ?>
            <!--/.footer-->
        </div>
        <!-- /.wrapper -->


        <!-- Modal contactAdvertiser -->

        <div class="modal fade" id="contactAdvertiser" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><i class=" icon-mail-2"></i> Contact advertiser </h4>

                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                                class="sr-only">Close</span></button>
                    </div>
                    <div class="modal-body">
                        <form role="form">
                            <div class="form-group">
                                <label for="recipient-name" class="control-label">Name:</label>
                                <input class="form-control required" id="recipient-name" placeholder="Your name"
                                       data-placement="top" data-trigger="manual"
                                       data-content="Must be at least 3 characters long, and must only contain letters."
                                       type="text">
                            </div>
                            <div class="form-group">
                                <label for="sender-email" class="control-label">E-mail:</label>
                                <input id="sender-email" type="text"
                                       data-content="Must be a valid e-mail address (user@gmail.com)" data-trigger="manual"
                                       data-placement="top" placeholder="email@you.com" class="form-control email">
                            </div>
                            <div class="form-group">
                                <label for="recipient-Phone-Number" class="control-label">Phone Number:</label>
                                <input type="text" maxlength="60" class="form-control" id="recipient-Phone-Number">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="control-label">Message <span class="text-count">(300) </span>:</label>
                                <textarea class="form-control" id="message-text" placeholder="Your message here.."
                                          data-placement="top" data-trigger="manual"></textarea>
                            </div>
                            <div class="form-group">
                                <p class="help-block pull-left text-danger hide" id="form-error">&nbsp; The form is not
                                    valid. </p>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success pull-right">Send message!</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.modal -->

        <!-- Modal contactAdvertiser -->

        <div class="modal fade" id="reportAdvertiser" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><i class="fa icon-info-circled-alt"></i> There's something wrong with this ads?
                        </h4>

                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                                class="sr-only">Close</span></button>
                    </div>
                    <div class="modal-body">
                        <form role="form">
                            <div class="form-group">
                                <label for="report-reason" class="control-label">Reason:</label>
                                <select name="report-reason" id="report-reason" class="form-control">
                                    <option value="">Select a reason</option>
                                    <option value="soldUnavailable">Item unavailable</option>
                                    <option value="fraud">Fraud</option>
                                    <option value="duplicate">Duplicate</option>
                                    <option value="spam">Spam</option>
                                    <option value="wrongCategory">Wrong category</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="recipient-email" class="control-label">Your E-mail:</label>
                                <input type="text" name="email" maxlength="60" class="form-control" id="recipient-email">
                            </div>
                            <div class="form-group">
                                <label for="message-text2" class="control-label">Message <span class="text-count">(300) </span>:</label>
                                <textarea class="form-control" id="message-text2"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary">Send Report</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.modal -->
        <!-- Modal Change City -->

        <div class="modal fade modalHasList" id="select-country" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title uppercase font-weight-bold" id="exampleModalLabel"><i class=" icon-map"></i> Select your region </h4>

                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                                class="sr-only">Close</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="row" style="padding: 0 20px">
                                <ul class="cat-list col-sm-3 col-xs-6 ">
                                    <li>
                                        <span  class="flag-icon flag-icon-af"> </span>
                                        <a href="#AF">
                                            Afghanistan
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-al"> </span>
                                        <a href="#AL">
                                            Albania
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-dz"> </span>
                                        <a href="#DZ">
                                            Algeria
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-ad"> </span>
                                        <a href="#AD">
                                            Andorra
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-ao"> </span>
                                        <a href="#AO">
                                            Angola
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-ar"> </span>
                                        <a href="#AR">
                                            Argentina
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-am"> </span>
                                        <a href="#AM">
                                            Armenia
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-au"> </span>
                                        <a href="#AU">
                                            Australia
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-at"> </span>
                                        <a href="#AT">
                                            Austria
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-az"> </span>
                                        <a href="#AZ">
                                            Azerbaijan
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-bs"> </span>
                                        <a href="#BS">
                                            Bahamas
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-bh"> </span>
                                        <a href="#BH">
                                            Bahrain
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-bd"> </span>
                                        <a href="#BD">
                                            Bangladesh
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-by"> </span>
                                        <a href="#BY">
                                            Belarus
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-be"> </span>
                                        <a href="#BE">
                                            Belgium
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-bz"> </span>
                                        <a href="#BZ">
                                            Belize
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-bj"> </span>
                                        <a href="#BJ">
                                            Benin
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-bo"> </span>
                                        <a href="#BO">
                                            Bolivia
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-ba"> </span>
                                        <a href="#BA">
                                            Bosnia and Herzegovina
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-bw"> </span>
                                        <a href="#BW">
                                            Botswana
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-br"> </span>
                                        <a href="#BR">
                                            Brazil
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-bn"> </span>
                                        <a href="#BN">
                                            Brunei
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-bg"> </span>
                                        <a href="#BG">
                                            Bulgaria
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-bf"> </span>
                                        <a href="#BF">
                                            Burkina Faso
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-bi"> </span>
                                        <a href="#BI">
                                            Burundi
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-kh"> </span>
                                        <a href="#KH">
                                            Cambodia
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-cm"> </span>
                                        <a href="#CM">
                                            Cameroon
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-ca"> </span>
                                        <a href="#CA">
                                            Canada
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-cv"> </span>
                                        <a href="#CV">
                                            Cape Verde
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-cf"> </span>
                                        <a href="#CF">
                                            Central African Republic
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-td"> </span>
                                        <a href="#TD">
                                            Chad
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-cl"> </span>
                                        <a href="#CL">
                                            Chile
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-cn"> </span>
                                        <a href="#CN">
                                            China
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-co"> </span>
                                        <a href="#CO">
                                            Colombia
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-km"> </span>
                                        <a href="#KM">
                                            Comoros
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-cg"> </span>
                                        <a href="#CG">
                                            Congo - Brazzaville
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-cd"> </span>
                                        <a href="#CD">
                                            Congo - Kinshasa
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-cr"> </span>
                                        <a href="#CR">
                                            Costa Rica
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-hr"> </span>
                                        <a href="#HR">
                                            Croatia
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-cu"> </span>
                                        <a href="#CU">
                                            Cuba
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-cy"> </span>
                                        <a href="#CY">
                                            Cyprus
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-cz"> </span>
                                        <a href="#CZ">
                                            Czech Republic
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-ci"> </span>
                                        <a href="#CI">
                                            Côte d’Ivoire
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-dk"> </span>
                                        <a href="#DK">
                                            Denmark
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-dj"> </span>
                                        <a href="#DJ">
                                            Djibouti
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-dm"> </span>
                                        <a href="#DM">
                                            Dominica
                                        </a>
                                    </li>
                                </ul>
                                <ul class="cat-list col-sm-3 col-xs-6 ">
                                    <li>
                                        <span  class="flag-icon flag-icon-do"> </span>
                                        <a href="#DO">
                                            Dominican Republic
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-ec"> </span>
                                        <a href="#EC">
                                            Ecuador
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-eg"> </span>
                                        <a href="#EG">
                                            Egypt
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-gq"> </span>
                                        <a href="#GQ">
                                            Equatorial Guinea
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-er"> </span>
                                        <a href="#ER">
                                            Eritrea
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-ee"> </span>
                                        <a href="#EE">
                                            Estonia
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-et"> </span>
                                        <a href="#ET">
                                            Ethiopia
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-fj"> </span>
                                        <a href="#FJ">
                                            Fiji
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-fi"> </span>
                                        <a href="#FI">
                                            Finland
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-fr"> </span>
                                        <a href="#FR">
                                            France
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-ga"> </span>
                                        <a href="#GA">
                                            Gabon
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-gm"> </span>
                                        <a href="#GM">
                                            Gambia
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-ge"> </span>
                                        <a href="#GE">
                                            Georgia
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-de"> </span>
                                        <a href="#DE">
                                            Germany
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-gh"> </span>
                                        <a href="#GH">
                                            Ghana
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-gi"> </span>
                                        <a href="#GI">
                                            Gibraltar
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-gr"> </span>
                                        <a href="#GR">
                                            Greece
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-gl"> </span>
                                        <a href="#GL">
                                            Greenland
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-gd"> </span>
                                        <a href="#GD">
                                            Grenada
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-gp"> </span>
                                        <a href="#GP">
                                            Guadeloupe
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-gu"> </span>
                                        <a href="#GU">
                                            Guam
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-gt"> </span>
                                        <a href="#GT">
                                            Guatemala
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-gn"> </span>
                                        <a href="#GN">
                                            Guinea
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-gw"> </span>
                                        <a href="#GW">
                                            Guinea-Bissau
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-gy"> </span>
                                        <a href="#GY">
                                            Guyana
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-ht"> </span>
                                        <a href="#HT">
                                            Haiti
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-hn"> </span>
                                        <a href="#HN">
                                            Honduras
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-hk"> </span>
                                        <a href="#HK">
                                            Hong Kong SAR China
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-hu"> </span>
                                        <a href="#HU">
                                            Hungary
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-is"> </span>
                                        <a href="#IS">
                                            Iceland
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-in"> </span>
                                        <a href="#IN">
                                            India
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-id"> </span>
                                        <a href="#ID">
                                            Indonesia
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-ir"> </span>
                                        <a href="#IR">
                                            Iran
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-iq"> </span>
                                        <a href="#IQ">
                                            Iraq
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-ie"> </span>
                                        <a href="#IE">
                                            Ireland
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-il"> </span>
                                        <a href="#IL">
                                            Israel
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-it"> </span>
                                        <a href="#IT">
                                            Italy
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-jm"> </span>
                                        <a href="#JM">
                                            Jamaica
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-jp"> </span>
                                        <a href="#JP">
                                            Japan
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-jo"> </span>
                                        <a href="#JO">
                                            Jordan
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-kz"> </span>
                                        <a href="#KZ">
                                            Kazakhstan
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-ke"> </span>
                                        <a href="#KE">
                                            Kenya
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-ki"> </span>
                                        <a href="#KI">
                                            Kiribati
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-kw"> </span>
                                        <a href="#KW">
                                            Kuwait
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-kg"> </span>
                                        <a href="#KG">
                                            Kyrgyzstan
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-la"> </span>
                                        <a href="#LA">
                                            Laos
                                        </a>
                                    </li>
                                </ul>
                                <ul class="cat-list col-sm-3 col-xs-6 ">
                                    <li>
                                        <span  class="flag-icon flag-icon-lv"> </span>
                                        <a href="#LV">
                                            Latvia
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-lb"> </span>
                                        <a href="#LB">
                                            Lebanon
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-ls"> </span>
                                        <a href="#LS">
                                            Lesotho
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-lr"> </span>
                                        <a href="#LR">
                                            Liberia
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-ly"> </span>
                                        <a href="#LY">
                                            Libya
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-li"> </span>
                                        <a href="#LI">
                                            Liechtenstein
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-lt"> </span>
                                        <a href="#LT">
                                            Lithuania
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-lu"> </span>
                                        <a href="#LU">
                                            Luxembourg
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-mk"> </span>
                                        <a href="#MK">
                                            Macedonia
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-mg"> </span>
                                        <a href="#MG">
                                            Madagascar
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-mw"> </span>
                                        <a href="#MW">
                                            Malawi
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-my"> </span>
                                        <a href="#MY">
                                            Malaysia
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-mv"> </span>
                                        <a href="#MV">
                                            Maldives
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-ml"> </span>
                                        <a href="#ML">
                                            Mali
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-mt"> </span>
                                        <a href="#MT">
                                            Malta
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-mq"> </span>
                                        <a href="#MQ">
                                            Martinique
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-mr"> </span>
                                        <a href="#MR">
                                            Mauritania
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-mu"> </span>
                                        <a href="#MU">
                                            Mauritius
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-yt"> </span>
                                        <a href="#YT">
                                            Mayotte
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-mx"> </span>
                                        <a href="#MX">
                                            Mexico
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-fm"> </span>
                                        <a href="#FM">
                                            Micronesia
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-md"> </span>
                                        <a href="#MD">
                                            Moldova
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-mc"> </span>
                                        <a href="#MC">
                                            Monaco
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-mn"> </span>
                                        <a href="#MN">
                                            Mongolia
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-me"> </span>
                                        <a href="#ME">
                                            Montenegro
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-ma"> </span>
                                        <a href="#MA">
                                            Morocco
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-mz"> </span>
                                        <a href="#MZ">
                                            Mozambique
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-mm"> </span>
                                        <a href="#MM">
                                            Myanmar [Burma]
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-na"> </span>
                                        <a href="#NA">
                                            Namibia
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-np"> </span>
                                        <a href="#NP">
                                            Nepal
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-nl"> </span>
                                        <a href="#NL">
                                            Netherlands
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-nc"> </span>
                                        <a href="#NC">
                                            New Caledonia
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-nz"> </span>
                                        <a href="#NZ">
                                            New Zealand
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-ni"> </span>
                                        <a href="#NI">
                                            Nicaragua
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-ne"> </span>
                                        <a href="#NE">
                                            Niger
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-ng"> </span>
                                        <a href="#NG">
                                            Nigeria
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-kp"> </span>
                                        <a href="#KP">
                                            North Korea
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-no"> </span>
                                        <a href="#NO">
                                            Norway
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-om"> </span>
                                        <a href="#OM">
                                            Oman
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-pk"> </span>
                                        <a href="#PK">
                                            Pakistan
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-ps"> </span>
                                        <a href="#PS">
                                            Palestinian Territories
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-pa"> </span>
                                        <a href="#PA">
                                            Panama
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-pg"> </span>
                                        <a href="#PG">
                                            Papua New Guinea
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-py"> </span>
                                        <a href="#PY">
                                            Paraguay
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-pe"> </span>
                                        <a href="#PE">
                                            Peru
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-ph"> </span>
                                        <a href="#PH">
                                            Philippines
                                        </a>
                                    </li>
                                </ul>
                                <ul class="cat-list col-sm-3 col-xs-6 ">
                                    <li>
                                        <span  class="flag-icon flag-icon-pl"> </span>
                                        <a href="#PL">
                                            Poland
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-pt"> </span>
                                        <a href="#PT">
                                            Portugal
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-pr"> </span>
                                        <a href="#PR">
                                            Puerto Rico
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-qa"> </span>
                                        <a href="#QA">
                                            Qatar
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-ro"> </span>
                                        <a href="#RO">
                                            Romania
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-ru"> </span>
                                        <a href="#RU">
                                            Russia
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-rw"> </span>
                                        <a href="#RW">
                                            Rwanda
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-re"> </span>
                                        <a href="#RE">
                                            Réunion
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-ws"> </span>
                                        <a href="#WS">
                                            Samoa
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-sa"> </span>
                                        <a href="#SA">
                                            Saudi Arabia
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-sn"> </span>
                                        <a href="#SN">
                                            Senegal
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-rs"> </span>
                                        <a href="#RS">
                                            Serbia
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-sl"> </span>
                                        <a href="#SL">
                                            Sierra Leone
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-sg"> </span>
                                        <a href="#SG">
                                            Singapore
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-sk"> </span>
                                        <a href="#SK">
                                            Slovakia
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-si"> </span>
                                        <a href="#SI">
                                            Slovenia
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-so"> </span>
                                        <a href="#SO">
                                            Somalia
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-za"> </span>
                                        <a href="#ZA">
                                            South Africa
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-kr"> </span>
                                        <a href="#KR">
                                            South Korea
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-es"> </span>
                                        <a href="#ES">
                                            Spain
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-lk"> </span>
                                        <a href="#LK">
                                            Sri Lanka
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-sd"> </span>
                                        <a href="#SD">
                                            Sudan
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-sz"> </span>
                                        <a href="#SZ">
                                            Swaziland
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-se"> </span>
                                        <a href="#SE">
                                            Sweden
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-ch"> </span>
                                        <a href="#CH">
                                            Switzerland
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-sy"> </span>
                                        <a href="#SY">
                                            Syria
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-tw"> </span>
                                        <a href="#TW">
                                            Taiwan
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-tj"> </span>
                                        <a href="#TJ">
                                            Tajikistan
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-tz"> </span>
                                        <a href="#TZ">
                                            Tanzania
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-th"> </span>
                                        <a href="#TH">
                                            Thailand
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-tl"> </span>
                                        <a href="#TL">
                                            Timor-Leste
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-tg"> </span>
                                        <a href="#TG">
                                            Togo
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-tn"> </span>
                                        <a href="#TN">
                                            Tunisia
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-tr"> </span>
                                        <a href="#TR">
                                            Turkey
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-tm"> </span>
                                        <a href="#TM">
                                            Turkmenistan
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-ug"> </span>
                                        <a href="#UG">
                                            Uganda
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-ua"> </span>
                                        <a href="#UA">
                                            Ukraine
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-ae"> </span>
                                        <a href="#AE">
                                            United Arab Emirates
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-gb"> </span>
                                        <a href="#UK">
                                            United Kingdom
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-us"> </span>
                                        <a href="#US">
                                            United States
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-uy"> </span>
                                        <a href="#UY">
                                            Uruguay
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-uz"> </span>
                                        <a href="#UZ">
                                            Uzbekistan
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-vu"> </span>
                                        <a href="#VU">
                                            Vanuatu
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-ve"> </span>
                                        <a href="#VE">
                                            Venezuela
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-vn"> </span>
                                        <a href="#VN">
                                            Vietnam
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-ye"> </span>
                                        <a href="#YE">
                                            Yemen
                                        </a>
                                    </li>
                                </ul>
                                <ul class="cat-list col-sm-3 col-xs-6 ">
                                    <li>
                                        <span  class="flag-icon flag-icon-zm"> </span>
                                        <a href="#ZM">
                                            Zambia
                                        </a>
                                    </li>
                                    <li>
                                        <span  class="flag-icon flag-icon-zw"> </span>
                                        <a href="#ZW">
                                            Zimbabwe
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.modal -->

        <!-- Le javascript
        ================================================== -->

        <!-- Placed at the end of the document so the pages load faster -->

        <script src="../../../../cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/jquery/jquery-3.3.1.min.js">\x3C/script>')</script>
        <script src="assets/bootstrap/js/bootstrap.bundle.js"></script>
        <script src="assets/js/vendors.min.js"></script>

        <!-- include custom script for site  -->
        <script src="assets/js/main.min.js"></script>


        <!-- include jquery file upload plugin  -->
        <script src="assets/js/fileinput.min.js" type="text/javascript"></script>
        <script>
            // initialize with defaults
            $("#input-upload-img1").fileinput();
            $("#input-upload-img2").fileinput();
            $("#input-upload-img3").fileinput();
            $("#input-upload-img4").fileinput();
            $("#input-upload-img5").fileinput();
        </script>
    </body>

    <!-- Mirrored from templatecycle.com/demo/bootclassified-5.1/dist/post-ads.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Mar 2021 09:13:37 GMT -->
</html>
