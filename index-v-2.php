<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from templatecycle.com/demo/bootclassified-5.1/dist/index-v-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Mar 2021 09:07:50 GMT -->
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

 <?php include 'header.php';?>
    <!-- /.header -->

    <label class="theme-switcher theme-switcher-left-right">
    	<span class="theme-switcher-label" data-on="Dark Off" data-off="Dark Mode"></span>
    	<span class="theme-switcher-handle"></span>
    </label>


    <div class="intro" style="background-image: url(images/bg3.jpg);">
        <div class="dtable hw100">
            <div class="dtable-cell hw100">
                <div class="container text-center">
                    <h1 class="intro-title animated fadeInDown">   Find Classified Ads </h1>

                    <p class="sub animateme fittext3 animated fadeIn">
                        Find local classified ads on bootclassified in Minutes  </p>

                    <div class="row search-row animated fadeInUp">
                        <div class="col-xl-4 col-sm-4 search-col relative locationicon">
                            <div class="search-col-inner">
                            <i class="icon-location-2 icon-append"></i>
                                <div class="search-col-input">
                                <input type="text" name="country" id="autocomplete-ajax"
                                   class="form-control locinput input-rel searchtag-input has-icon"
                                   placeholder="City/Zipcode..." value="">

                        </div>  </div>  </div>
                        <div class="col-xl-4 col-sm-4 search-col relative"><i class="icon-docs icon-append"></i>
                            <input type="text" name="ads" class="form-control has-icon"
                                   placeholder="I'm looking for a ..." value="">
                        </div>
                        <div class="col-xl-4 col-sm-4 search-col">
                            <button class="btn btn-primary btn-search btn-block btn-gradient"><i
                                    class="icon-search"></i><strong>Find</strong></button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /.intro -->

    <div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-9 page-content col-thin-right">
                    <div class="inner-box category-content">
                        <h2 class="title-2">Find Classified Ads World Wide </h2>

                        <div class="row">
                            <div class="col-md-4 col-sm-4 ">
                                <div class="cat-list">
                                    <h3 class="cat-title"><a href="category.html"><i class="fa fa-car ln-shadow"></i>
                                        Automobiles <span class="count">277,959</span> </a>

                                        <span data-target=".cat-id-1" aria-expanded="true"  data-toggle="collapse"
                                              class="btn-cat-collapsed collapsed">   <span
                                                class=" icon-down-open-big"></span> </span>
                                    </h3>
                                    <ul class="cat-collapse collapse show cat-id-1">
                                        <li><a href="category.html">Car Parts &amp; Accessories</a></li>
                                        <li><a href="category.html">Campervans &amp; Caravans</a></li>
                                        <li><a href="category.html">Motorbikes &amp; Scooters</a></li>
                                        <li><a href="category.html">Motorbike Parts &amp; Accessories</a></li>
                                        <li><a href="category.html">Vans, Trucks &amp; Plant</a></li>
                                        <li><a href="category.html">Wanted</a></li>
                                    </ul>
                                </div>
                                <div class="cat-list">
                                    <h3 class="cat-title"><a href="category.html"><i class="icon-home ln-shadow"></i>
                                        Property <span class="count">228,705</span></a> <span data-target=".cat-id-2"
                                                                                              aria-expanded="true"  data-toggle="collapse"
                                                                                              class="btn-cat-collapsed collapsed">   <span
                                            class=" icon-down-open-big"></span> </span></h3>


                                    <ul class="cat-collapse collapse show cat-id-2">
                                        <li><a href="category.html">House for Rent</a></li>
                                        <li><a href="category.html">House for Sale </a></li>
                                        <li><a href="category.html"> Apartments For Sale </a></li>
                                        <li><a href="category.html">Apartments for Rent </a></li>
                                        <li><a href="category.html">Farms-Ranches </a></li>
                                        <li><a href="category.html">Land </a></li>
                                        <li><a href="category.html">Vacation Rentals </a></li>
                                        <li><a href="category.html">Commercial Building</a></li>
                                    </ul>
                                </div>
                                <div class="cat-list">
                                    <h3 class="cat-title"><a href="category.html"><i class="icon-home ln-shadow"></i>
                                        Jobs <span class="count">6375</span></a>

                                        <span data-target=".cat-id-3" aria-expanded="true"  data-toggle="collapse"
                                              class="btn-cat-collapsed collapsed">   <span
                                                class=" icon-down-open-big"></span> </span>
                                    </h3>
                                    <ul class="cat-collapse collapse show cat-id-3">
                                        <li><a href="category.html">Full Time Jobs</a></li>
                                        <li><a href="category.html">Internet Jobs </a></li>
                                        <li><a href="category.html">Learn &amp; Earn jobs </a></li>
                                        <li><a href="category.html"> Manual Labor Jobs </a></li>
                                        <li><a href="category.html">Other Jobs </a></li>
                                        <li><a href="category.html">OwnBusiness </a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="cat-list">
                                    <h3 class="cat-title"><a href="category.html"><i
                                            class="fa fa-briefcase ln-shadow"></i> Services <span
                                            class="count">45,526</span></a>
                                        <span data-target=".cat-id-4" aria-expanded="true"  data-toggle="collapse"
                                              class="btn-cat-collapsed collapsed">   <span
                                                class=" icon-down-open-big"></span> </span>
                                    </h3>
                                    <ul class="cat-collapse collapse show cat-id-4">
                                        <li><a href="category.html">Building, Home &amp; Removals</a></li>
                                        <li><a href="category.html">Entertainment</a></li>
                                        <li><a href="category.html">Health &amp; Beauty</a></li>
                                        <li><a href="category.html">Miscellaneous</a></li>
                                        <li><a href="category.html">Property &amp; Shipping</a></li>
                                        <li><a href="category.html">Tax, Money &amp; Visas</a></li>
                                        <li><a href="category.html">Telecoms &amp; Computers</a></li>
                                        <li><a href="category.html">Travel Services &amp; Tours</a></li>
                                        <li><a href="category.html">Tuition &amp; Lessons</a></li>
                                    </ul>
                                </div>
                                <div class="cat-list">
                                    <h3 class="cat-title"><a href="category.html"><i
                                            class="icon-book-open ln-shadow"></i> Learning <span
                                            class="count">26,529</span></a> <span data-target=".cat-id-5"
                                                                                  aria-expanded="true"  data-toggle="collapse"
                                                                                  class="btn-cat-collapsed collapsed">   <span
                                            class=" icon-down-open-big"></span> </span>
                                    </h3>
                                    <ul class="cat-collapse collapse show cat-id-5">
                                        <li><a href="category.html"> Automotive Classes </a></li>
                                        <li><a href="category.html"> Computer Multimedia Classes </a></li>
                                        <li><a href="category.html"> Sports Classes </a></li>
                                        <li><a href="category.html"> Home Improvement Classes </a></li>
                                        <li><a href="category.html"> Language Classes </a></li>
                                        <li><a href="category.html"> Music Classes </a></li>
                                        <li><a href="category.html"> Personal Fitness </a></li>
                                        <li><a href="category.html"> Other Classes </a></li>
                                    </ul>
                                </div>
                                <div class="cat-list">
                                    <h3 class="cat-title"><a href="category.html"><i
                                            class="icon-guidedog ln-shadow"></i> Pets <span class="count">42,111</span></a>
                                        <span data-target=".cat-id-6" aria-expanded="true"  data-toggle="collapse"
                                              class="btn-cat-collapsed collapsed">   <span
                                                class=" icon-down-open-big"></span> </span>
                                    </h3>
                                    <ul class="cat-collapse collapse show cat-id-6">
                                        <li><a href="category.html">Pets for Sale</a></li>
                                        <li><a href="category.html">Petsitters &amp; Dogwalkers</a></li>
                                        <li><a href="category.html">Equipment &amp; Accessories</a></li>
                                        <li><a href="category.html">Missing, Lost &amp; Found</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4   last-column">
                                <div class="cat-list">
                                    <h3 class="cat-title"><a href="category.html"><i
                                            class=" icon-basket-1 ln-shadow"></i> For Sale <span
                                            class="count">64,526</span></a> <span data-target=".cat-id-7"
                                                                                  aria-expanded="true"  data-toggle="collapse"
                                                                                  class="btn-cat-collapsed collapsed">   <span
                                            class=" icon-down-open-big"></span> </span>
                                    </h3>
                                    <ul class="cat-collapse collapse show cat-id-7">
                                        <li><a href="category.html">Audio &amp; Stereo</a></li>
                                        <li><a href="category.html">Baby &amp; Kids Stuff</a></li>
                                        <li><a href="category.html">CDs, DVDs, Games &amp; Books</a></li>
                                        <li><a href="category.html">Clothes, Footwear &amp; Accessories</a></li>
                                        <li><a href="category.html">Computers &amp; Software</a></li>
                                        <li><a href="category.html">Home &amp; Garden</a></li>
                                        <li><a href="category.html">Music &amp; Instruments</a></li>
                                        <li><a href="category.html">Office Furniture &amp; Equipment</a></li>
                                        <li><a href="category.html">Phones, Mobile Phones &amp; Telecoms</a></li>
                                        <li><a href="category.html">Sports, Leisure &amp; Travel</a></li>
                                        <li><a href="category.html">Tickets</a></li>
                                        <li><a href="category.html">TV, DVD &amp; Cameras</a></li>
                                        <li><a href="category.html">Video Games &amp; Consoles</a></li>
                                        <li><a href="category.html">Freebies</a></li>
                                        <li><a href="category.html">Miscellaneous Goods</a></li>
                                        <li><a href="category.html">Stuff Wanted</a></li>
                                        <li><a href="category.html">Swap Shop</a></li>
                                    </ul>
                                </div>
                                <div class="cat-list ">
                                    <h3 class="cat-title"><a href="category.html"><i
                                            class=" icon-theatre ln-shadow"></i> Community <span
                                            class="count">5,30</span> </a> <span data-target=".cat-id-8"
                                                                                 aria-expanded="true"  data-toggle="collapse"
                                                                                 class="btn-cat-collapsed collapsed">   <span
                                            class=" icon-down-open-big"></span> </span>
                                    </h3>
                                    <ul class="cat-collapse collapse show cat-id-8">
                                        <li><a href="category.html">Announcements </a></li>
                                        <li><a href="category.html">Car Pool - Bike Ride </a></li>
                                        <li><a href="category.html">Charity - Donate - NGO </a></li>
                                        <li><a href="category.html">Lost - Found </a></li>
                                        <li><a href="category.html">Tender Notices </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="inner-box relative">
                        <h2 class="title-2">Featured Listings

                            <a id="nextItem" class="link  pull-right carousel-nav"> <i class="icon-right-open-big"></i></a>
                            <a id="prevItem" class="link pull-right carousel-nav"> <i class="icon-left-open-big"></i>
                            </a>

                        </h2>

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="no-margin item-carousel owl-carousel owl-theme">
                                    <div class="item"><a href="ads-details-automobile.html">
                     <span class="item-carousel-thumb"> 
                    	<img class="img-responsive" src="images/auto/2012-mercedes-benz-sls-amg.jpg" alt="img">
                     </span>
                                        <span class="item-name"> 2011 Mercedes-Benz SLS AMG  </span>
                                        <span class="price">  $204,990 </span>
                                    </a>
                                    </div>

                                    <div class="item"><a href="ads-details.html">
                                        <span class="item-carousel-thumb"> <img class="item-img"
                                                                                src="images/item/tp/Image00006.jpg"
                                                                                alt="img"> </span>
                                        <span class="item-name"> consectetuer adipiscing elit </span>
                                        <span class="price"> $ 240 </span></a></div>


                                    <div class="item"><a href="ads-details.html">
                                        <span class="item-carousel-thumb"> <img class="item-img"
                                                                                src="images/item/tp/Image00022.jpg"
                                                                                alt="img"> </span> <span
                                            class="item-name"> sed diam nonummy  </span> <span
                                            class="price"> $ 140</span></a></div>

                                    <div class="item"><a href="ads-details.html">
                                        <span class="item-carousel-thumb"> <img class="item-img"
                                                                                src="images/item/tp/Image00013.jpg"
                                                                                alt="img">  </span><span
                                            class="item-name"> feugiat nulla facilisis  </span> <span class="price"> $ 140 </span></a>
                                    </div>

                                    <div class="item"><a href="ads-details.html">
                                        <span class="item-carousel-thumb"> <img class="item-img"
                                                                                src="images/item/12.jpg"
                                                                                alt="img"> </span> <span
                                            class="item-name"> praesent luptatum zzril  </span> <span class="price"> $ 220 </span></a>
                                    </div>

                                    <div class="item"><a href="ads-details.html">
                                        <span class="item-carousel-thumb"> <img class="item-img"
                                                                                src="images/item/11.jpg"
                                                                                alt="img"> </span> <span
                                            class="item-name"> delenit augue duis dolore  </span> <span class="price"> $ 120 </span></a>
                                    </div>

                                    <div class="item"><a href="ads-details.html">
                                        <span class="item-carousel-thumb"> <img class="item-img"
                                                                                src="images/item/12.jpg"
                                                                                alt="img"> </span> <span
                                            class="item-name"> te feugait nulla facilisi </span> <span class="price"> $ 251 </span></a>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="inner-box relative">
                        <div class="row">
                            <div class="col-md-5">
                                <div>
                                    <h3 class="title-2"><i class="icon-location-2"></i> Popular locations </h3>

                                    <div class="row">
                                        <ul class="cat-list col-sm-6">
                                            <li><a href="category.html">Atlanta</a></li>
                                            <li><a href="category.html">Wichita </a></li>
                                            <li><a href="category.html"> Anchorage </a></li>
                                            <li><a href="category.html"> Dallas </a></li>
                                            <li><a href="category.html"> New York </a></li>
                                            <li><a href="category.html">Santa Ana/Anaheim </a></li>
                                            <li><a href="category.html"> Miami </a></li>
                                            <li><a href="category.html">Los Angeles</a></li>
                                        </ul>

                                        <ul class="cat-list cat-list-border col-sm-6">
                                            <li><a href="category.html">Virginia Beach </a></li>
                                            <li><a href="category.html"> San Diego </a></li>
                                            <li><a href="category.html">Boston </a></li>
                                            <li><a href="category.html">Houston</a></li>
                                            <li><a href="category.html">Salt Lake City </a></li>
                                            <li><a href="category.html">San Francisco </a></li>
                                            <li><a href="category.html">Tampa </a></li>
                                            <li><a href="category.html"> Washington DC </a></li>

                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-7 ">
                                <h3 class="title-2"><i class="icon-search-1"></i> Popular Makes </h3>

                                <div class="row">
                                    <ul class="cat-list col-md-4 col-xs-4 col-xxs-6">
                                        <li><a href="category.html">free </a></li>
                                        <li><a href="category.html">furniture </a></li>
                                        <li><a href="category.html">general </a></li>
                                        <li><a href="category.html">household </a></li>
                                        <li><a href="category.html">jewelry </a></li>
                                        <li><a href="category.html">materials </a></li>
                                        <li><a href="category.html">sporting </a></li>
                                        <li><a href="category.html">tickets </a></li>
                                    </ul>
                                    <ul class="cat-list col-md-4 col-xs-4 col-xxs-6">
                                        <li><a href="category.html">tools </a></li>
                                        <li><a href="category.html">wanted </a></li>
                                        <li><a href="category.html">cell phones </a></li>
                                        <li><a href="category.html">clothes+acc </a></li>
                                        <li><a href="category.html">collectibles </a></li>
                                        <li><a href="category.html">electronics </a></li>
                                        <li><a href="category.html">farm+garden </a></li>
                                        <li><a href="category.html">garage sale </a></li>
                                    </ul>
                                    <ul class="cat-list col-md-4 col-xs-4 col-xxs-6">
                                        <li><a href="category.html">heavy equip </a></li>
                                        <li><a href="category.html">motorcycles </a></li>
                                        <li><a href="category.html">music instr </a></li>
                                        <li><a href="category.html">photo+video </a></li>
                                        <li><a href="category.html">appliances </a></li>
                                        <li><a href="category.html">Land </a></li>
                                        <li><a href="category.html">arts+crafts </a></li>
                                        <li><a href="category.html">auto parts </a></li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 page-sidebar col-thin-left">
                    <aside>
                        <div class="inner-box no-padding">
                            <div class="inner-box-content"><a href="#"><img class="img-responsive"
                                                                            src="images/site/app.jpg" alt="tv"></a>
                            </div>
                        </div>
                        <div class="inner-box">
                            <h2 class="title-2">Popular Categories </h2>

                            <div class="inner-box-content">
                                <ul class="cat-list arrow">
                                    <li><a href="sub-category-sub-location.html"> Apparel (1,386) </a></li>
                                    <li><a href="sub-category-sub-location.html"> Art (1,163) </a></li>
                                    <li><a href="sub-category-sub-location.html"> Business Opportunities (4,974) </a>
                                    </li>
                                    <li><a href="sub-category-sub-location.html"> Community and Events (1,258) </a></li>
                                    <li><a href="sub-category-sub-location.html"> Electronics and Appliances
                                        (1,578) </a></li>
                                    <li><a href="sub-category-sub-location.html"> Jobs and Employment (3,609) </a></li>
                                    <li><a href="sub-category-sub-location.html"> Motorcycles (968) </a></li>
                                    <li><a href="sub-category-sub-location.html"> Pets (1,188) </a></li>
                                    <li><a href="sub-category-sub-location.html"> Services (7,583) </a></li>
                                    <li><a href="sub-category-sub-location.html"> Vehicles (1,129) </a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="inner-box no-padding"><img class="img-responsive" src="images/add2.jpg" alt="">
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- /.main-container -->
    <div class="page-info hasOverly" style="background: url(images/bg.jpg); background-size:cover">
        <div class="bg-overly ">
            <div class="container text-center section-promo">
                <div class="row">
                    <div class="col-sm-3 col-xs-6 col-xxs-12">
                        <div class="iconbox-wrap">
                            <div class="iconbox">
                                <div class="iconbox-wrap-icon">
                                    <i class="icon  icon-group"></i>
                                </div>
                                <div class="iconbox-wrap-content">
                                    <h5><span>2200</span></h5>

                                    <div class="iconbox-wrap-text">Trusted Seller</div>
                                </div>
                            </div>
                            <!-- /..iconbox -->
                        </div>
                        <!--/.iconbox-wrap-->
                    </div>

                    <div class="col-sm-3 col-xs-6 col-xxs-12">
                        <div class="iconbox-wrap">
                            <div class="iconbox">
                                <div class="iconbox-wrap-icon">
                                    <i class="icon  icon-th-large-1"></i>
                                </div>
                                <div class="iconbox-wrap-content">
                                    <h5><span>100</span></h5>

                                    <div class="iconbox-wrap-text">Categories</div>
                                </div>
                            </div>
                            <!-- /..iconbox -->
                        </div>
                        <!--/.iconbox-wrap-->
                    </div>

                    <div class="col-sm-3 col-xs-6  col-xxs-12">
                        <div class="iconbox-wrap">
                            <div class="iconbox">
                                <div class="iconbox-wrap-icon">
                                    <i class="icon  icon-map"></i>
                                </div>
                                <div class="iconbox-wrap-content">
                                    <h5><span>700</span></h5>

                                    <div class="iconbox-wrap-text">Location</div>
                                </div>
                            </div>
                            <!-- /..iconbox -->
                        </div>
                        <!--/.iconbox-wrap-->
                    </div>

                    <div class="col-sm-3 col-xs-6 col-xxs-12">
                        <div class="iconbox-wrap">
                            <div class="iconbox">
                                <div class="iconbox-wrap-icon">
                                    <i class="icon icon-facebook"></i>
                                </div>
                                <div class="iconbox-wrap-content">
                                    <h5><span>50,000</span></h5>

                                    <div class="iconbox-wrap-text"> Facebook Fans</div>
                                </div>
                            </div>
                            <!-- /..iconbox -->
                        </div>
                        <!--/.iconbox-wrap-->
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- /.page-info -->

    <div class="page-bottom-info">
        <div class="page-bottom-info-inner">

            <div class="page-bottom-info-content text-center">
                <h1>If you have any questions, comments or concerns, please call the Classified Advertising department
                    at (000) 555-5555</h1>
                <a class="btn  btn-lg btn-primary-dark" href="tel:+000000000">
                    <i class="icon-mobile"></i> <span class="hide-xs color50">Call Now:</span> (000) 555-5555 </a>
            </div>

        </div>
    </div>

  <?php include 'footer.php';?>

    <!-- /.footer -->
</div>
<!-- /.wrapper -->


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


<!-- include jquery autocomplete plugin  -->

<script type="text/javascript" src="assets/plugins/autocomplete/jquery.mockjax.js"></script>
<script type="text/javascript" src="assets/plugins/autocomplete/jquery.autocomplete.js"></script>
<script type="text/javascript" src="assets/plugins/autocomplete/usastates.js"></script>

<script type="text/javascript" src="assets/plugins/autocomplete/autocomplete-demo.js"></script>


</body>

<!-- Mirrored from templatecycle.com/demo/bootclassified-5.1/dist/index-v-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Mar 2021 09:07:51 GMT -->
</html>
