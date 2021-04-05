<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from templatecycle.com/demo/bootclassified-5.1/dist/property-list.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Mar 2021 09:13:45 GMT -->
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
    <script src="https://oss.maxcdn.com/libs/php5shiv/3.7.0/php5shiv.js"></script>
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

    <div class="search-row-wrapper" style="background-image: url(images/bg.jpg)">
    	<div class="inner">
    	<div class="container ">
    		<form action="#" method="GET">
    			<div class="row">


    				<div class="col-md-3">
    					<input class="form-control keyword" type="text" placeholder="e.g. Mobile Sale">
    				</div>
    				<div class="col-md-3">
    					<select class="form-control selecter" name="category" id="search-category">
    						<option selected="selected" value="">All Categories</option>
    						<option value="Vehicles" style="background-color:#E9E9E9;font-weight:bold;"
    								disabled="disabled">- Vehicles -</option>
    						<option value="Cars">Cars</option>
    						<option value="Commercial vehicles">Commercial vehicles</option>
    						<option value="Motorcycles">Motorcycles</option>
    						<option value="Motorcycle Equipment">Car &amp; Motorcycle Equipment</option>
    						<option value="Boats">Boats</option>
    						<option value="Vehicles">Other Vehicles</option>
    						<option value="House" style="background-color:#E9E9E9;font-weight:bold;"
    								disabled="disabled">- House and Children -</option>
    						<option value="Appliances">Appliances</option>
    						<option value="Inside">Inside</option>
    						<option value="Games">Games and Clothing</option>
    						<option value="Garden">Garden</option>
    						<option value="Multimedia" style="background-color:#E9E9E9;font-weight:bold;"
    								disabled="disabled">- Multimedia -</option>
    						<option value="Telephony">Telephony</option>
    						<option value="Image">Image and sound</option>
    						<option value="Computers">Computers and Accessories</option>
    						<option value="Video">Video games and consoles</option>
    						<option value="Real" style="background-color:#E9E9E9;font-weight:bold;"
    								disabled="disabled">- Real Estate -</option>
    						<option value="Apartment">Apartment</option>
    						<option value="Home">Home</option>
    						<option value="Vacation">Vacation Rentals</option>
    						<option value="Commercial">Commercial offices and local</option>
    						<option value="Grounds">Grounds</option>
    						<option value="Houseshares">Houseshares</option>
    						<option value="Other real estate">Other real estate</option>
    						<option value="Services" style="background-color:#E9E9E9;font-weight:bold;"
    								disabled="disabled">- Services -</option>
    						<option value="Jobs">Jobs</option>
    						<option value="Job application">Job application</option>
    						<option value="Services">Services</option>
    						<option value="Price">Price</option>
    						<option value="Business">Business and goodwill</option>
    						<option value="Professional">Professional equipment</option>
    						<option value="dropoff" style="background-color:#E9E9E9;font-weight:bold;"
    								disabled="disabled">- Extra -</option>
    						<option value="Other">Other</option>
    					</select>
    				</div>
    				<div class="col-md-3">
    					<select class="form-control selecter" name="location" id="id-location">
    						<option selected="selected" value="">All Locations</option>
    						<option value="AL">Alabama</option>
    						<option value="AK">Alaska</option>
    						<option value="AZ">Arizona</option>
    						<option value="AR">Arkansas</option>
    						<option value="CA">California</option>
    						<option value="CO">Colorado</option>
    						<option value="CT">Connecticut</option>
    						<option value="DE">Delaware</option>
    						<option value="DC">District Of Columbia</option>
    						<option value="FL">Florida</option>
    						<option value="GA">Georgia</option>
    						<option value="HI">Hawaii</option>
    						<option value="ID">Idaho</option>
    						<option value="IL">Illinois</option>
    						<option value="IN">Indiana</option>
    						<option value="IA">Iowa</option>
    						<option value="KS">Kansas</option>
    						<option value="KY">Kentucky</option>
    						<option value="LA">Louisiana</option>
    						<option value="ME">Maine</option>
    						<option value="MD">Maryland</option>
    						<option value="MA">Massachusetts</option>
    						<option value="MI">Michigan</option>
    						<option value="MN">Minnesota</option>
    						<option value="MS">Mississippi</option>
    						<option value="MO">Missouri</option>
    						<option value="MT">Montana</option>
    						<option value="NE">Nebraska</option>
    						<option value="NV">Nevada</option>
    						<option value="NH">New Hampshire</option>
    						<option value="NJ">New Jersey</option>
    						<option value="NM">New Mexico</option>
    						<option value="NY">New York</option>
    						<option value="NC">North Carolina</option>
    						<option value="ND">North Dakota</option>
    						<option value="OH">Ohio</option>
    						<option value="OK">Oklahoma</option>
    						<option value="OR">Oregon</option>
    						<option value="PA">Pennsylvania</option>
    						<option value="RI">Rhode Island</option>
    						<option value="SC">South Carolina</option>
    						<option value="SD">South Dakota</option>
    						<option value="TN">Tennessee</option>
    						<option value="TX">Texas</option>
    						<option value="UT">Utah</option>
    						<option value="VT">Vermont</option>
    						<option value="VA">Virginia</option>
    						<option value="WA">Washington</option>
    						<option value="WV">West Virginia</option>
    						<option value="WI">Wisconsin</option>
    						<option value="WY">Wyoming</option>
    						<option value="Other-Locations">Other Locations</option>
    					</select>
    				</div>
    				<div class="col-md-3">
    					<button class="btn btn-block btn-primary btn-gradient"> Search <i class="fa fa-search"></i>
    					</button>
    				</div>
    			</div>
    		</form>
    	</div>
    	</div>
    </div>
    <!-- /.search-row -->
    <div class="main-container">
        <div class="container">
            <div class="row">
                <!-- this (.mobile-filter-sidebar) part will be position fixed in mobile version -->
                <div class="col-md-3 page-sidebar mobile-filter-sidebar">
                    <aside>
                        <div class="sidebar-modern-inner">
                            <div class="block-title has-arrow sidebar-header">
                                <h5><a href="#">All Categories</a></h5>
                            </div>
                            <div class="block-content categories-list  list-filter ">
                                <ul class=" list-unstyled">
                                    <li><a href="sub-category-sub-location.php"><span class="title">Electronics</span><span class="count">&nbsp;8626</span></a>
                                    </li>
                                    <li><a href="sub-category-sub-location.php"><span class="title">Automobiles </span><span class="count">&nbsp;123</span></a></li>
                                    <li><a href="sub-category-sub-location.php"><span class="title">Property </span><span class="count">&nbsp;742</span></a></li>
                                    <li><a href="sub-category-sub-location.php"><span class="title">Services </span><span class="count">&nbsp;8525</span></a></li>
                                    <li><a href="sub-category-sub-location.php"><span class="title">For Sale </span><span class="count">&nbsp;357</span></a></li>
                                    <li><a href="sub-category-sub-location.php"><span class="title">Learning </span><span class="count">&nbsp;3576</span></a></li>
                                    <li><a href="sub-category-sub-location.php"><span class="title">Jobs </span><span class="count">&nbsp;453</span></a></li>
                                    <li><a href="sub-category-sub-location.php"><span class="title">Cars &amp; Vehicles</span><span class="count">&nbsp;801</span></a>
                                    </li>
                                    <li><a href="sub-category-sub-location.php"><span class="title">Other</span><span class="count">&nbsp;9803</span></a></li>
                                </ul>
                            </div>  <!--/.categories-list-->

                            <div class="block-title has-arrow ">
                                <h5><a href="#">Location</a></h5>
                            </div>
                            <div class="block-content locations-list  list-filter ">
                                <ul class="browse-list list-unstyled long-list">
                                    <li><a href="sub-category-sub-location.php"> Atlanta </a></li>
                                    <li><a href="sub-category-sub-location.php"> Wichita </a></li>
                                    <li><a href="sub-category-sub-location.php"> Anchorage </a></li>
                                    <li><a href="sub-category-sub-location.php"> Dallas </a></li>
                                    <li><a href="sub-category-sub-location.php">New York </a></li>
                                    <li><a href="sub-category-sub-location.php"> Santa Ana/Anaheim </a></li>
                                    <li><a href="sub-category-sub-location.php"> Miami </a></li>
                                    <li><a href="sub-category-sub-location.php"> Virginia Beach </a></li>
                                    <li><a href="sub-category-sub-location.php"> San Diego </a></li>
                                    <li><a href="sub-category-sub-location.php"> Boston </a></li>
                                    <li><a href="sub-category-sub-location.php"> Houston </a></li>
                                    <li><a href="sub-category-sub-location.php">Salt Lake City </a></li>
                                    <li><a href="sub-category-sub-location.php"> Other Locations </a></li>
                                </ul>
                            </div>
                            <!--/.locations-list-->

                            <div class="block-title has-arrow">
                                <h5><a href="#">Price range</a></h5>
                            </div>
                            <div class="block-content categories-list  list-filter ">

                                <form role="form" class="form-inline ">
                                    <div class="form-group col-lg-4 col-md-12 no-padding">
                                        <input type="text" placeholder="$ 2000 " id="minPrice" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-1 col-md-12 no-padding text-center hidden-md"> -</div>
                                    <div class="form-group col-lg-4 col-md-12 no-padding">
                                        <input type="text" placeholder="$ 3000 " id="maxPrice" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-3 col-md-12 no-padding">
                                        <button class="btn btn-default pull-right btn-block-md" type="submit">GO
                                        </button>
                                    </div>
                                </form>
                                <div style="clear:both"></div>
                            </div>
                            <!--/.list-filter-->
                            <div class="block-title has-arrow">
                                <h5><a href="#">Seller </a></h5>
                            </div>
                            <div class="block-content categories-list  list-filter ">
                                <ul class="browse-list list-unstyled ">
                                    <li><a href="sub-category-sub-location.php"><strong>All Ads</strong> <span class="count">228,705</span></a></li>
                                    <li><a href="sub-category-sub-location.php">Business <span class="count">28,705</span></a></li>
                                    <li><a href="sub-category-sub-location.php">Private <span class="count">18,705</span></a></li>
                                </ul>
                            </div>
                            <!--/.list-filter-->

                            <div class="block-title has-arrow">
                                <h5><a href="#">Condition</a></h5>
                            </div>
                            <div class="block-content categories-list  list-filter ">
                                <ul class="browse-list list-unstyled ">
                                    <li><a href="sub-category-sub-location.php">New <span class="count">228,705</span></a>
                                    </li>
                                    <li><a href="sub-category-sub-location.php">Used <span class="count">28,705</span></a>
                                    </li>
                                    <li><a href="sub-category-sub-location.php">None </a></li>
                                </ul>
                            </div>
                            <!--/.list-filter-->
                            <div style="clear:both"></div>
                        </div>



                        <!--/.categories-list-->
                    </aside>
                </div>
                <!--/.page-side-bar-->
                <div class="col-md-9 page-content col-thin-left">

                    <div class="category-list">
                        <div class="tab-box ">

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs add-tabs tablist" role="tablist">
                                <li class="active nav-item">
                                    <a href="#alladslist" role="tab" data-toggle="tab" class="nav-link active">All Ads <span class="badge badge-pill badge-secondary">228,705</span></a>
                                </li>
                                <li class=" nav-item">
                                    <a href="#businessads" role="tab" data-toggle="tab" class="nav-link"> Business <span class="badge badge-pill badge-secondary">50,300</span></a>
                                </li>
                                <li class=" nav-item">
                                    <a href="#private" role="tab" data-toggle="tab" class="nav-link">Private <span class="badge badge-pill badge-secondary">102,152</span></a>
                                </li>
                            </ul>
                            <div class="tab-filter">
                                <select title="sort by" class="selectpicker select-sort-by" data-style="btn-select"
                                        data-width="auto">
                                    <option>Sort by</option>
                                    <option>Price: Low to High</option>
                                    <option>Price: High to Low</option>
                                </select>
                            </div>

                        </div>
                        <!--/.tab-box-->

                        <!--/.tab-box-->

                        <div class="listing-filter">
                            <div class="pull-left col-xs-6">
                                <div class="breadcrumb-list"><a href="#" class="current"> <span>All Properties</span></a> in
                                    <!-- cityName will replace with selected location/area from location modal -->
                                    <span class="cityName"> New York </span> <a href="#selectRegion" id="dropdownMenu1"
                                                                                data-toggle="modal"> <span
                                            class="caret"></span> </a></div>
                            </div>
                            <div class="pull-right col-xs-6 text-right listing-view-action"><span
                                    class="list-view active"><i class="  icon-th"></i></span> <span
                                    class="compact-view"><i class=" icon-th-list  "></i></span> <span
                                    class="grid-view "><i class=" icon-th-large "></i></span></div>
                            <div style="clear:both"></div>
                        </div>
                        <!--/.listing-filter-->

                        <!-- Mobile Filter bar-->
                        <div class="mobile-filter-bar col-xl-12  ">
                            <ul class="list-unstyled list-inline no-margin no-padding">
                                <li class="filter-toggle">
                                    <a class="">
                                        <i class="  icon-th-list"></i>
                                        Filters
                                    </a>
                                </li>
                                <li>


                                    <div class="dropdown">
                                        <a data-toggle="dropdown" class="dropdown-toggle">Short
                                            by </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#" rel="nofollow">Relevance</a></li>
                                            <li><a href="#" rel="nofollow">Date</a></li>
                                            <li><a href="#" rel="nofollow">Company</a></li>
                                        </ul>
                                    </div>

                                </li>
                            </ul>
                        </div>
                        <div class="menu-overly-mask"></div>
                        <!-- Mobile Filter bar End-->
                        <div class="tab-content">
                            <div class="tab-pane  active " id="alladslist">
                                <div class="adds-wrapper row no-margin property-list">
                                    <div class="item-list">

                                        <div class="row">


                                            <div class="col-md-3 no-padding photobox">
                                                <div class="add-image"><span class="photo-count"><i
                                                        class="fa fa-camera"></i> 2 </span> <a href="property-details.php"><img
                                                        class="thumbnail no-margin" src="images/house/thumb/2.jpg"
                                                        alt="img"></a></div>
                                            </div>
                                            <!--/.photobox-->
                                            <div class="col-md-6 add-desc-box">
                                                <div class="ads-details">
                                                    <h5 class="add-title"><a href="property-details.php">
                                                        Exclusive and modern luxury apartment  Union Avenue </a></h5>
                                                    <span class="info-row"> <span class="item-location">544 Union Avenue, Brooklyn, NY 11211 |  <a><i
                                                            class="fa fa-map-marker-alt"></i> Map</a>  </span> </span>
                                                    <div class="prop-info-box">

                                                        <div class="prop-info">
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title ">4+2</span>
                                                                <span class="text">Adults | Children</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block middle">
                                                                <span class="title prop-area">171 m²</span>
                                                                <span class="text">Area (ca.)</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title prop-room">4</span>
                                                                <span class="text">room </span>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                            <!--/.add-desc-box-->
                                            <div class="col-md-3 text-right  price-box">


                                                <a class="btn btn-border-thin  btn-save"   title="save ads"  data-toggle="tooltip" data-placement="left">
                                                    <i class="icon icon-heart"></i>
                                                </a>
                                                <a class="btn btn-border-thin  btn-share ">
                                                    <i class="icon icon-export" data-toggle="tooltip" data-placement="left"  title="share"></i>
                                                </a>

                                                <h3 class="item-price "> <strong>$2400 - $4260 </strong></h3>
                                                <div style="clear: both"></div>

                                                <a class="btn btn-success btn-sm bold" href="property-details.php">
                                                    Check Availabilty
                                                </a>


                                            </div>
                                            <!--/.add-desc-box-->
                                        </div>
                                    </div>
                                    <!--/.item-list-->




                                    <div class="item-list">

                                        <div class="row">
                                            <div class="col-md-3 no-padding photobox">
                                                <div class="add-image">
                                                    <div id="properites-image-slide" class="carousel slide" data-ride="carousel"
                                                         data-interval="false">
                                                        <!-- Wrapper for slides -->
                                                        <div class="carousel-inner" role="listbox">
                                                            <div class="item active carousel-item">
                                                                <img src="images/house/thumb/4.jpg" alt="...">
                                                            </div>
                                                            <div class="item carousel-item">
                                                                <img src="images/house/thumb/5.jpg" alt="...">
                                                            </div>
                                                            <div class="item carousel-item">
                                                                <img src="images/house/thumb/6.jpg" alt="...">
                                                            </div>
                                                        </div>
                                                        <!-- Controls -->

                                                        <a class="left carousel-control" href="#properites-image-slide" role="button"
                                                           data-slide="prev">

                                                            <span class="icon icon-left-open-big icon-prev" aria-hidden="true"></span>

                                                            <span class="sr-only">Previous</span>

                                                        </a>
                                                        <a class="right carousel-control"
                                                           href="#properites-image-slide" role="button" data-slide="next">

                                                            <span class="icon icon-right-open-big icon-next" aria-hidden="true"></span>

                                                            <span class="sr-only">Next</span>

                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/.photobox-->
                                            <div class="col-md-6 add-desc-box">
                                                <div class="ads-details">
                                                    <h5 class="add-title"><a href="property-details.php">
                                                        Wow ! This item has a image slider ! </a></h5>
                                                    <span class="info-row"> <span class="item-location">544 Union Avenue, Brooklyn, NY 11211 |  <a><i
                                                            class="fa fa-map-marker-alt"></i> Map</a>  </span> </span>
                                                    <div class="prop-info-box">

                                                        <div class="prop-info">
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title ">4+2</span>
                                                                <span class="text">Adults | Children</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block middle">
                                                                <span class="title prop-area">171 m²</span>
                                                                <span class="text">Area (ca.)</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title prop-room">4</span>
                                                                <span class="text">room </span>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!--/.add-desc-box-->
                                            <div class="col-md-3 text-right  price-box">


                                                <a class="btn btn-border-thin  btn-save"   title="save ads"  data-toggle="tooltip" data-placement="left">
                                                    <i class="icon icon-heart"></i>
                                                </a>
                                                <a class="btn btn-border-thin  btn-share ">
                                                    <i class="icon icon-export" data-toggle="tooltip" data-placement="left"  title="share"></i>
                                                </a>

                                                <h3 class="item-price "> <strong>$2400 - $4260 </strong></h3>
                                                <div style="clear: both"></div>

                                                <a class="btn btn-success btn-sm bold" href="property-details.php">
                                                    Check Availabilty
                                                </a>


                                            </div>
                                            <!--/.add-desc-box-->
                                        </div>
                                    </div>
                                    <!--/.item-list-->


                                    <div class="item-list">
                                        <div class="row">

                                            <div class="col-md-3 no-padding photobox">
                                                <div class="add-image"><span class="photo-count"><i
                                                        class="fa fa-camera"></i> 4 </span> <a href="property-details.php"><img
                                                        class="thumbnail no-margin" src="images/house/thumb/9.jpg"
                                                        alt="img"></a></div>
                                            </div>
                                            <!--/.photobox-->
                                            <div class="col-md-6 add-desc-box">
                                                <div class="ads-details">
                                                    <h5 class="add-title"><a href="property-details.php">
                                                        Exclusive and modern luxury apartment  Union Avenue </a></h5>
                                                    <span class="info-row"> <span class="item-location">544 Union Avenue, Brooklyn, NY 11211 |  <a><i
                                                            class="fa fa-map-marker-alt"></i> Map</a>  </span> </span>
                                                    <div class="prop-info-box">

                                                        <div class="prop-info">
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title ">4+2</span>
                                                                <span class="text">Adults | Children</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block middle">
                                                                <span class="title prop-area">171 m²</span>
                                                                <span class="text">Area (ca.)</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title prop-room">4</span>
                                                                <span class="text">room </span>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!--/.add-desc-box-->
                                            <div class="col-md-3 text-right  price-box">


                                                <a class="btn btn-border-thin  btn-save"   title="save ads"  data-toggle="tooltip" data-placement="left">
                                                    <i class="icon icon-heart"></i>
                                                </a>
                                                <a class="btn btn-border-thin  btn-share ">
                                                    <i class="icon icon-export" data-toggle="tooltip" data-placement="left"  title="share"></i>
                                                </a>

                                                <h3 class="item-price "> <strong>$2400 - $4260 </strong></h3>
                                                <div style="clear: both"></div>

                                                <a class="btn btn-success btn-sm bold" href="property-details.php">
                                                    Check Availabilty
                                                </a>


                                            </div>
                                            <!--/.add-desc-box-->
                                        </div>
                                    </div>
                                    <!--/.item-list-->


                                    <div class="item-list">

                                        <div class="row">
                                            <div class="col-md-3 no-padding photobox">
                                                <div class="add-image"><span class="photo-count"><i
                                                        class="fa fa-camera"></i> 3 </span> <a href="property-details.php"><img
                                                        class="thumbnail no-margin" src="images/house/thumb/13.jpg"
                                                        alt="img"></a></div>
                                            </div>
                                            <!--/.photobox-->
                                            <div class="col-md-6 add-desc-box">
                                                <div class="ads-details">
                                                    <h5 class="add-title"><a href="property-details.php">
                                                        Exclusive and modern luxury apartment  Union Avenue </a></h5>
                                                    <span class="info-row"> <span class="item-location">544 Union Avenue, Brooklyn, NY 11211 |  <a><i
                                                            class="fa fa-map-marker-alt"></i> Map</a>  </span> </span>
                                                    <div class="prop-info-box">

                                                        <div class="prop-info">
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title ">4+2</span>
                                                                <span class="text">Adults | Children</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block middle">
                                                                <span class="title prop-area">171 m²</span>
                                                                <span class="text">Area (ca.)</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title prop-room">4</span>
                                                                <span class="text">room </span>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!--/.add-desc-box-->
                                            <div class="col-md-3 text-right  price-box">


                                                <a class="btn btn-border-thin  btn-save"   title="save ads"  data-toggle="tooltip" data-placement="left">
                                                    <i class="icon icon-heart"></i>
                                                </a>
                                                <a class="btn btn-border-thin  btn-share ">
                                                    <i class="icon icon-export" data-toggle="tooltip" data-placement="left"  title="share"></i>
                                                </a>

                                                <h3 class="item-price "> <strong>$2400 - $4260 </strong></h3>
                                                <div style="clear: both"></div>

                                                <a class="btn btn-success btn-sm bold" href="property-details.php">
                                                    Check Availabilty
                                                </a>


                                            </div>
                                            <!--/.add-desc-box-->
                                        </div>
                                    </div>
                                    <!--/.item-list-->


                                    <div class="item-list">
                                        <div class="row">

                                            <div class="col-md-3 no-padding photobox">
                                                <div class="add-image"><span class="photo-count"><i
                                                        class="fa fa-camera"></i> 4 </span> <a href="property-details.php"><img
                                                        class="thumbnail no-margin" src="images/house/thumb/18.jpg"
                                                        alt="img"></a></div>
                                            </div>
                                            <!--/.photobox-->
                                            <div class="col-md-6 add-desc-box">
                                                <div class="ads-details">
                                                    <h5 class="add-title"><a href="property-details.php">
                                                        Fully Furnished 2 Bedroom in Residence luxury apartment   </a></h5>
                                                    <span class="info-row"> <span class="item-location">Sports City , NY 25411 |  <a><i
                                                            class="fa fa-map-marker-alt"></i> Map</a>  </span> </span>
                                                    <div class="prop-info-box">

                                                        <div class="prop-info">
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title ">2+2</span>
                                                                <span class="text">Adults | Children</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block middle">
                                                                <span class="title prop-area">271 m²</span>
                                                                <span class="text">Area (ca.)</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title prop-room">2</span>
                                                                <span class="text">room </span>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!--/.add-desc-box-->
                                            <div class="col-md-3 text-right  price-box">


                                                <a class="btn btn-border-thin  btn-save"   title="save ads"  data-toggle="tooltip" data-placement="left">
                                                    <i class="icon icon-heart"></i>
                                                </a>
                                                <a class="btn btn-border-thin  btn-share ">
                                                    <i class="icon icon-export" data-toggle="tooltip" data-placement="left"  title="share"></i>
                                                </a>

                                                <h3 class="item-price "> <strong>$5400 - $7260 </strong></h3>
                                                <div style="clear: both"></div>

                                                <a class="btn btn-success btn-sm bold" href="property-details.php">
                                                    Check Availabilty
                                                </a>


                                            </div>
                                            <!--/.add-desc-box-->
                                        </div>
                                    </div>
                                    <!--/.item-list-->


                                    <div class="item-list">

                                        <div class="row">
                                            <div class="col-md-3 no-padding photobox">
                                                <div class="add-image"><span class="photo-count"><i
                                                        class="fa fa-camera"></i> 4 </span> <a href="property-details.php"><img
                                                        class="thumbnail no-margin" src="images/house/thumb/b12.jpg"
                                                        alt="img"></a></div>
                                            </div>
                                            <!--/.photobox-->
                                            <div class="col-md-6 add-desc-box">
                                                <div class="ads-details">
                                                    <h5 class="add-title"><a href="property-details.php">
                                                        Exclusive Furnished and modern luxury apartment   </a></h5>
                                                    <span class="info-row"> <span class="item-location">Oceana Avenue, Brooklyn, NY 50154 |  <a><i
                                                            class="fa fa-map-marker-alt"></i> Map</a>  </span> </span>
                                                    <div class="prop-info-box">

                                                        <div class="prop-info">
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title ">4+2</span>
                                                                <span class="text">Adults | Children</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block middle">
                                                                <span class="title prop-area">321 m²</span>
                                                                <span class="text">Area (ca.)</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title prop-room">4</span>
                                                                <span class="text">room </span>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!--/.add-desc-box-->
                                            <div class="col-md-3 text-right  price-box">


                                                <a class="btn btn-border-thin  btn-save"   title="save ads"  data-toggle="tooltip" data-placement="left">
                                                    <i class="icon icon-heart"></i>
                                                </a>
                                                <a class="btn btn-border-thin  btn-share ">
                                                    <i class="icon icon-export" data-toggle="tooltip" data-placement="left"  title="share"></i>
                                                </a>

                                                <h3 class="item-price "> <strong>$2400 - $4260 </strong></h3>
                                                <div style="clear: both"></div>

                                                <a class="btn btn-success btn-sm bold" href="property-details.php">
                                                    Check Availabilty
                                                </a>


                                            </div>
                                            <!--/.add-desc-box-->
                                        </div>
                                    </div>
                                    <!--/.item-list-->


                                    <div class="item-list">
                                        <div class="row">

                                            <div class="col-md-3 no-padding photobox">
                                                <div class="add-image"><span class="photo-count"><i
                                                        class="fa fa-camera"></i> 6 </span> <a href="property-details.php"><img
                                                        class="thumbnail no-margin" src="images/house/thumb/14.jpg"
                                                        alt="img"></a></div>
                                            </div>
                                            <!--/.photobox-->
                                            <div class="col-md-6 add-desc-box">
                                                <div class="ads-details">
                                                    <h5 class="add-title"><a href="property-details.php">
                                                        Majestic Atlantis View from a High Floor luxury apartment   </a></h5>
                                                    <span class="info-row"> <span class="item-location">544 Union Avenue, Brooklyn, NY 11211 |  <a><i
                                                            class="fa fa-map-marker-alt"></i> Map</a>  </span> </span>
                                                    <div class="prop-info-box">

                                                        <div class="prop-info">
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title ">4+2</span>
                                                                <span class="text">Adults | Children</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block middle">
                                                                <span class="title prop-area">171 m²</span>
                                                                <span class="text">Area (ca.)</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title prop-room">4</span>
                                                                <span class="text">room </span>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!--/.add-desc-box-->
                                            <div class="col-md-3 text-right  price-box">


                                                <a class="btn btn-border-thin  btn-save"   title="save ads"  data-toggle="tooltip" data-placement="left">
                                                    <i class="icon icon-heart"></i>
                                                </a>
                                                <a class="btn btn-border-thin  btn-share ">
                                                    <i class="icon icon-export" data-toggle="tooltip" data-placement="left"  title="share"></i>
                                                </a>

                                                <h3 class="item-price "> <strong>$2400 - $4260 </strong></h3>
                                                <div style="clear: both"></div>

                                                <a class="btn btn-success btn-sm bold" href="property-details.php">
                                                    Check Availabilty
                                                </a>


                                            </div>
                                            <!--/.add-desc-box-->
                                        </div>
                                    </div>
                                    <!--/.item-list-->


                                    <div class="item-list">

                                        <div class="row">
                                            <div class="col-md-3 no-padding photobox">
                                                <div class="add-image"><span class="photo-count"><i
                                                        class="fa fa-camera"></i> 4 </span> <a href="property-details.php"><img
                                                        class="thumbnail no-margin" src="images/house/thumb/11.jpg"
                                                        alt="img"></a></div>
                                            </div>
                                            <!--/.photobox-->
                                            <div class="col-md-6 add-desc-box">
                                                <div class="ads-details">
                                                    <h5 class="add-title"><a href="property-details.php">
                                                        Exclusive and modern  Atlantis View - Low Floor </a></h5>
                                                    <span class="info-row"> <span class="item-location">544 Union Avenue, Brooklyn, NY 11211 |  <a><i
                                                            class="fa fa-map-marker-alt"></i> Map</a>  </span> </span>
                                                    <div class="prop-info-box">

                                                        <div class="prop-info">
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title ">4+2</span>
                                                                <span class="text">Adults | Children</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block middle">
                                                                <span class="title prop-area">171 m²</span>
                                                                <span class="text">Area (ca.)</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title prop-room">4</span>
                                                                <span class="text">room </span>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!--/.add-desc-box-->
                                            <div class="col-md-3 text-right  price-box">


                                                <a class="btn btn-border-thin  btn-save"   title="save ads"  data-toggle="tooltip" data-placement="left">
                                                    <i class="icon icon-heart"></i>
                                                </a>
                                                <a class="btn btn-border-thin  btn-share ">
                                                    <i class="icon icon-export" data-toggle="tooltip" data-placement="left"  title="share"></i>
                                                </a>

                                                <h3 class="item-price "> <strong>$2400 - $4260 </strong></h3>
                                                <div style="clear: both"></div>

                                                <a class="btn btn-success btn-sm bold" href="property-details.php">
                                                    Check Availabilty
                                                </a>


                                            </div>
                                            <!--/.add-desc-box-->
                                        </div>
                                    </div>
                                    <!--/.item-list-->


                                    <div class="item-list">
                                        <div class="row">

                                            <div class="col-md-3 no-padding photobox">
                                                <div class="add-image"><span class="photo-count"><i
                                                        class="fa fa-camera"></i> 4 </span> <a href="property-details.php"><img
                                                        class="thumbnail no-margin" src="images/house/thumb/16.jpg"
                                                        alt="img"></a></div>
                                            </div>
                                            <!--/.photobox-->
                                            <div class="col-md-6 add-desc-box">
                                                <div class="ads-details">
                                                    <h5 class="add-title"><a href="property-details.php">
                                                        Exclusive and modern luxury apartment  Union Avenue </a></h5>
                                                    <span class="info-row"> <span class="item-location">544 Union Avenue, Brooklyn, NY 11211 |  <a><i
                                                            class="fa fa-map-marker-alt"></i> Map</a>  </span> </span>
                                                    <div class="prop-info-box">

                                                        <div class="prop-info">
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title ">4+2</span>
                                                                <span class="text">Adults | Children</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block middle">
                                                                <span class="title prop-area">171 m²</span>
                                                                <span class="text">Area (ca.)</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title prop-room">4</span>
                                                                <span class="text">room </span>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!--/.add-desc-box-->
                                            <div class="col-md-3 text-right  price-box">


                                                <a class="btn btn-border-thin  btn-save"   title="save ads"  data-toggle="tooltip" data-placement="left">
                                                    <i class="icon icon-heart"></i>
                                                </a>
                                                <a class="btn btn-border-thin  btn-share ">
                                                    <i class="icon icon-export" data-toggle="tooltip" data-placement="left"  title="share"></i>
                                                </a>

                                                <h3 class="item-price "> <strong>$2400 - $4260 </strong></h3>
                                                <div style="clear: both"></div>

                                                <a class="btn btn-success btn-sm bold" href="property-details.php">
                                                    Check Availabilty
                                                </a>


                                            </div>
                                            <!--/.add-desc-box-->
                                        </div>
                                    </div>
                                    <!--/.item-list-->


                                    <div class="item-list">

                                        <div class="row">
                                            <div class="col-md-3 no-padding photobox">
                                                <div class="add-image"><span class="photo-count"><i
                                                        class="fa fa-camera"></i> 8 </span> <a href="property-details.php"><img
                                                        class="thumbnail no-margin" src="images/house/thumb/building.jpg"
                                                        alt="img"></a></div>
                                            </div>
                                            <!--/.photobox-->
                                            <div class="col-md-6 add-desc-box">
                                                <div class="ads-details">
                                                    <h5 class="add-title"><a href="property-details.php">
                                                        Exclusive and modern luxury apartment  Union Avenue </a></h5>
                                                    <span class="info-row"> <span class="item-location">544 Union Avenue, Brooklyn, NY 11211 |  <a><i
                                                            class="fa fa-map-marker-alt"></i> Map</a>  </span> </span>
                                                    <div class="prop-info-box">

                                                        <div class="prop-info">
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title ">4+2</span>
                                                                <span class="text">Adults | Children</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block middle">
                                                                <span class="title prop-area">171 m²</span>
                                                                <span class="text">Area (ca.)</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title prop-room">4</span>
                                                                <span class="text">room </span>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!--/.add-desc-box-->
                                            <div class="col-md-3 text-right  price-box">


                                                <a class="btn btn-border-thin  btn-save"   title="save ads"  data-toggle="tooltip" data-placement="left">
                                                    <i class="icon icon-heart"></i>
                                                </a>
                                                <a class="btn btn-border-thin  btn-share ">
                                                    <i class="icon icon-export" data-toggle="tooltip" data-placement="left"  title="share"></i>
                                                </a>

                                                <h3 class="item-price "> <strong>$2400 - $4260 </strong></h3>
                                                <div style="clear: both"></div>

                                                <a class="btn btn-success btn-sm bold" href="property-details.php">
                                                    Check Availabilty
                                                </a>


                                            </div>
                                            <!--/.add-desc-box-->
                                        </div>
                                    </div>
                                    <!--/.item-list-->


                                    <div class="item-list">
                                        <div class="row">

                                            <div class="col-md-3 no-padding photobox">
                                                <div class="add-image"><span class="photo-count"><i
                                                        class="fa fa-camera"></i> 4 </span> <a href="property-details.php"><img
                                                        class="thumbnail no-margin" src="images/house/thumb/18.jpg"
                                                        alt="img"></a></div>
                                            </div>
                                            <!--/.photobox-->
                                            <div class="col-md-6 add-desc-box">
                                                <div class="ads-details">
                                                    <h5 class="add-title"><a href="property-details.php">
                                                        Exclusive and modern luxury apartment  Union Avenue </a></h5>
                                                    <span class="info-row"> <span class="item-location">544 Union Avenue, Brooklyn, NY 11211 |  <a><i
                                                            class="fa fa-map-marker-alt"></i> Map</a>  </span> </span>
                                                    <div class="prop-info-box">

                                                        <div class="prop-info">
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title ">4+2</span>
                                                                <span class="text">Adults | Children</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block middle">
                                                                <span class="title prop-area">171 m²</span>
                                                                <span class="text">Area (ca.)</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title prop-room">4</span>
                                                                <span class="text">room </span>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!--/.add-desc-box-->
                                            <div class="col-md-3 text-right  price-box">


                                                <a class="btn btn-border-thin  btn-save"   title="save ads"  data-toggle="tooltip" data-placement="left">
                                                    <i class="icon icon-heart"></i>
                                                </a>
                                                <a class="btn btn-border-thin  btn-share ">
                                                    <i class="icon icon-export" data-toggle="tooltip" data-placement="left"  title="share"></i>
                                                </a>

                                                <h3 class="item-price "> <strong>$2400 - $4260 </strong></h3>
                                                <div style="clear: both"></div>

                                                <a class="btn btn-success btn-sm bold" href="property-details.php">
                                                    Check Availabilty
                                                </a>


                                            </div>
                                            <!--/.add-desc-box-->
                                        </div>
                                    </div>
                                    <!--/.item-list-->


                                </div>
                                <!--/.adds-wrapper-->
                            </div>
                            <div class="tab-pane   " id="businessads">
                                <div class="adds-wrapper row no-margin property-list">

                                    <div class="item-list">
                                        <div class="row">

                                            <div class="col-md-3 no-padding photobox">
                                                <div class="add-image"><span class="photo-count"><i
                                                        class="fa fa-camera"></i> 4 </span> <a href="property-details.php"><img
                                                        class="thumbnail no-margin" src="images/house/thumb/18.jpg"
                                                        alt="img"></a></div>
                                            </div>
                                            <!--/.photobox-->
                                            <div class="col-md-6 add-desc-box">
                                                <div class="ads-details">
                                                    <h5 class="add-title"><a href="property-details.php">
                                                        Fully Furnished 2 Bedroom in Residence luxury apartment   </a></h5>
                                                    <span class="info-row"> <span class="item-location">Sports City , NY 25411 |  <a><i
                                                            class="fa fa-map-marker-alt"></i> Map</a>  </span> </span>
                                                    <div class="prop-info-box">

                                                        <div class="prop-info">
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title ">2+2</span>
                                                                <span class="text">Adults | Children</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block middle">
                                                                <span class="title prop-area">271 m²</span>
                                                                <span class="text">Area (ca.)</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title prop-room">2</span>
                                                                <span class="text">room </span>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!--/.add-desc-box-->
                                            <div class="col-md-3 text-right  price-box">


                                                <a class="btn btn-border-thin  btn-save"   title="save ads"  data-toggle="tooltip" data-placement="left">
                                                    <i class="icon icon-heart"></i>
                                                </a>
                                                <a class="btn btn-border-thin  btn-share ">
                                                    <i class="icon icon-export" data-toggle="tooltip" data-placement="left"  title="share"></i>
                                                </a>

                                                <h3 class="item-price "> <strong>$5400 - $7260 </strong></h3>
                                                <div style="clear: both"></div>

                                                <a class="btn btn-success btn-sm bold" href="property-details.php">
                                                    Check Availabilty
                                                </a>


                                            </div>
                                            <!--/.add-desc-box-->
                                        </div>
                                    </div>
                                    <!--/.item-list-->


                                    <div class="item-list">

                                        <div class="row">
                                            <div class="col-md-3 no-padding photobox">
                                                <div class="add-image"><span class="photo-count"><i
                                                        class="fa fa-camera"></i> 4 </span> <a href="property-details.php"><img
                                                        class="thumbnail no-margin" src="images/house/thumb/b12.jpg"
                                                        alt="img"></a></div>
                                            </div>
                                            <!--/.photobox-->
                                            <div class="col-md-6 add-desc-box">
                                                <div class="ads-details">
                                                    <h5 class="add-title"><a href="property-details.php">
                                                        Exclusive Furnished and modern luxury apartment   </a></h5>
                                                    <span class="info-row"> <span class="item-location">Oceana Avenue, Brooklyn, NY 50154 |  <a><i
                                                            class="fa fa-map-marker-alt"></i> Map</a>  </span> </span>
                                                    <div class="prop-info-box">

                                                        <div class="prop-info">
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title ">4+2</span>
                                                                <span class="text">Adults | Children</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block middle">
                                                                <span class="title prop-area">321 m²</span>
                                                                <span class="text">Area (ca.)</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title prop-room">4</span>
                                                                <span class="text">room </span>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!--/.add-desc-box-->
                                            <div class="col-md-3 text-right  price-box">


                                                <a class="btn btn-border-thin  btn-save"   title="save ads"  data-toggle="tooltip" data-placement="left">
                                                    <i class="icon icon-heart"></i>
                                                </a>
                                                <a class="btn btn-border-thin  btn-share ">
                                                    <i class="icon icon-export" data-toggle="tooltip" data-placement="left"  title="share"></i>
                                                </a>

                                                <h3 class="item-price "> <strong>$2400 - $4260 </strong></h3>
                                                <div style="clear: both"></div>

                                                <a class="btn btn-success btn-sm bold" href="property-details.php">
                                                    Check Availabilty
                                                </a>


                                            </div>
                                            <!--/.add-desc-box-->
                                        </div>
                                    </div>
                                    <!--/.item-list-->


                                    <div class="item-list">
                                        <div class="row">

                                            <div class="col-md-3 no-padding photobox">
                                                <div class="add-image"><span class="photo-count"><i
                                                        class="fa fa-camera"></i> 6 </span> <a href="property-details.php"><img
                                                        class="thumbnail no-margin" src="images/house/thumb/14.jpg"
                                                        alt="img"></a></div>
                                            </div>
                                            <!--/.photobox-->
                                            <div class="col-md-6 add-desc-box">
                                                <div class="ads-details">
                                                    <h5 class="add-title"><a href="property-details.php">
                                                        Majestic Atlantis View from a High Floor luxury apartment   </a></h5>
                                                    <span class="info-row"> <span class="item-location">544 Union Avenue, Brooklyn, NY 11211 |  <a><i
                                                            class="fa fa-map-marker-alt"></i> Map</a>  </span> </span>
                                                    <div class="prop-info-box">

                                                        <div class="prop-info">
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title ">4+2</span>
                                                                <span class="text">Adults | Children</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block middle">
                                                                <span class="title prop-area">171 m²</span>
                                                                <span class="text">Area (ca.)</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title prop-room">4</span>
                                                                <span class="text">room </span>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!--/.add-desc-box-->
                                            <div class="col-md-3 text-right  price-box">


                                                <a class="btn btn-border-thin  btn-save"   title="save ads"  data-toggle="tooltip" data-placement="left">
                                                    <i class="icon icon-heart"></i>
                                                </a>
                                                <a class="btn btn-border-thin  btn-share ">
                                                    <i class="icon icon-export" data-toggle="tooltip" data-placement="left"  title="share"></i>
                                                </a>

                                                <h3 class="item-price "> <strong>$2400 - $4260 </strong></h3>
                                                <div style="clear: both"></div>

                                                <a class="btn btn-success btn-sm bold" href="property-details.php">
                                                    Check Availabilty
                                                </a>


                                            </div>
                                            <!--/.add-desc-box-->
                                        </div>
                                    </div>
                                    <!--/.item-list-->


                                    <div class="item-list">

                                        <div class="row">
                                            <div class="col-md-3 no-padding photobox">
                                                <div class="add-image"><span class="photo-count"><i
                                                        class="fa fa-camera"></i> 4 </span> <a href="property-details.php"><img
                                                        class="thumbnail no-margin" src="images/house/thumb/11.jpg"
                                                        alt="img"></a></div>
                                            </div>
                                            <!--/.photobox-->
                                            <div class="col-md-6 add-desc-box">
                                                <div class="ads-details">
                                                    <h5 class="add-title"><a href="property-details.php">
                                                        Exclusive and modern  Atlantis View - Low Floor </a></h5>
                                                    <span class="info-row"> <span class="item-location">544 Union Avenue, Brooklyn, NY 11211 |  <a><i
                                                            class="fa fa-map-marker-alt"></i> Map</a>  </span> </span>
                                                    <div class="prop-info-box">

                                                        <div class="prop-info">
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title ">4+2</span>
                                                                <span class="text">Adults | Children</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block middle">
                                                                <span class="title prop-area">171 m²</span>
                                                                <span class="text">Area (ca.)</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title prop-room">4</span>
                                                                <span class="text">room </span>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!--/.add-desc-box-->
                                            <div class="col-md-3 text-right  price-box">


                                                <a class="btn btn-border-thin  btn-save"   title="save ads"  data-toggle="tooltip" data-placement="left">
                                                    <i class="icon icon-heart"></i>
                                                </a>
                                                <a class="btn btn-border-thin  btn-share ">
                                                    <i class="icon icon-export" data-toggle="tooltip" data-placement="left"  title="share"></i>
                                                </a>

                                                <h3 class="item-price "> <strong>$2400 - $4260 </strong></h3>
                                                <div style="clear: both"></div>

                                                <a class="btn btn-success btn-sm bold" href="property-details.php">
                                                    Check Availabilty
                                                </a>


                                            </div>
                                            <!--/.add-desc-box-->
                                        </div>
                                    </div>
                                    <!--/.item-list-->

                                    <div class="item-list">

                                        <div class="row">


                                            <div class="col-md-3 no-padding photobox">
                                                <div class="add-image"><span class="photo-count"><i
                                                        class="fa fa-camera"></i> 2 </span> <a href="property-details.php"><img
                                                        class="thumbnail no-margin" src="images/house/thumb/2.jpg"
                                                        alt="img"></a></div>
                                            </div>
                                            <!--/.photobox-->
                                            <div class="col-md-6 add-desc-box">
                                                <div class="ads-details">
                                                    <h5 class="add-title"><a href="property-details.php">
                                                        Exclusive and modern luxury apartment  Union Avenue </a></h5>
                                                    <span class="info-row"> <span class="item-location">544 Union Avenue, Brooklyn, NY 11211 |  <a><i
                                                            class="fa fa-map-marker-alt"></i> Map</a>  </span> </span>
                                                    <div class="prop-info-box">

                                                        <div class="prop-info">
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title ">4+2</span>
                                                                <span class="text">Adults | Children</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block middle">
                                                                <span class="title prop-area">171 m²</span>
                                                                <span class="text">Area (ca.)</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title prop-room">4</span>
                                                                <span class="text">room </span>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                            <!--/.add-desc-box-->
                                            <div class="col-md-3 text-right  price-box">


                                                <a class="btn btn-border-thin  btn-save"   title="save ads"  data-toggle="tooltip" data-placement="left">
                                                    <i class="icon icon-heart"></i>
                                                </a>
                                                <a class="btn btn-border-thin  btn-share ">
                                                    <i class="icon icon-export" data-toggle="tooltip" data-placement="left"  title="share"></i>
                                                </a>

                                                <h3 class="item-price "> <strong>$2400 - $4260 </strong></h3>
                                                <div style="clear: both"></div>

                                                <a class="btn btn-success btn-sm bold" href="property-details.php">
                                                    Check Availabilty
                                                </a>


                                            </div>
                                            <!--/.add-desc-box-->
                                        </div>
                                    </div>
                                    <!--/.item-list-->




                                    <div class="item-list">

                                        <div class="row">
                                            <div class="col-md-3 no-padding photobox">
                                                <div class="add-image">
                                                    <div id="properites-image-slide" class="carousel slide" data-ride="carousel"
                                                         data-interval="false">
                                                        <!-- Wrapper for slides -->
                                                        <div class="carousel-inner" role="listbox">
                                                            <div class="item active carousel-item">
                                                                <img src="images/house/thumb/4.jpg" alt="...">
                                                            </div>
                                                            <div class="item carousel-item">
                                                                <img src="images/house/thumb/5.jpg" alt="...">
                                                            </div>
                                                            <div class="item carousel-item">
                                                                <img src="images/house/thumb/6.jpg" alt="...">
                                                            </div>
                                                        </div>
                                                        <!-- Controls -->

                                                        <a class="left carousel-control" href="#properites-image-slide" role="button"
                                                           data-slide="prev">

                                                            <span class="icon icon-left-open-big icon-prev" aria-hidden="true"></span>

                                                            <span class="sr-only">Previous</span>

                                                        </a>
                                                        <a class="right carousel-control"
                                                           href="#properites-image-slide" role="button" data-slide="next">

                                                            <span class="icon icon-right-open-big icon-next" aria-hidden="true"></span>

                                                            <span class="sr-only">Next</span>

                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/.photobox-->
                                            <div class="col-md-6 add-desc-box">
                                                <div class="ads-details">
                                                    <h5 class="add-title"><a href="property-details.php">
                                                        Wow ! This item has a image slider ! </a></h5>
                                                    <span class="info-row"> <span class="item-location">544 Union Avenue, Brooklyn, NY 11211 |  <a><i
                                                            class="fa fa-map-marker-alt"></i> Map</a>  </span> </span>
                                                    <div class="prop-info-box">

                                                        <div class="prop-info">
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title ">4+2</span>
                                                                <span class="text">Adults | Children</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block middle">
                                                                <span class="title prop-area">171 m²</span>
                                                                <span class="text">Area (ca.)</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title prop-room">4</span>
                                                                <span class="text">room </span>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!--/.add-desc-box-->
                                            <div class="col-md-3 text-right  price-box">


                                                <a class="btn btn-border-thin  btn-save"   title="save ads"  data-toggle="tooltip" data-placement="left">
                                                    <i class="icon icon-heart"></i>
                                                </a>
                                                <a class="btn btn-border-thin  btn-share ">
                                                    <i class="icon icon-export" data-toggle="tooltip" data-placement="left"  title="share"></i>
                                                </a>

                                                <h3 class="item-price "> <strong>$2400 - $4260 </strong></h3>
                                                <div style="clear: both"></div>

                                                <a class="btn btn-success btn-sm bold" href="property-details.php">
                                                    Check Availabilty
                                                </a>


                                            </div>
                                            <!--/.add-desc-box-->
                                        </div>
                                    </div>
                                    <!--/.item-list-->


                                    <div class="item-list">
                                        <div class="row">

                                            <div class="col-md-3 no-padding photobox">
                                                <div class="add-image"><span class="photo-count"><i
                                                        class="fa fa-camera"></i> 4 </span> <a href="property-details.php"><img
                                                        class="thumbnail no-margin" src="images/house/thumb/9.jpg"
                                                        alt="img"></a></div>
                                            </div>
                                            <!--/.photobox-->
                                            <div class="col-md-6 add-desc-box">
                                                <div class="ads-details">
                                                    <h5 class="add-title"><a href="property-details.php">
                                                        Exclusive and modern luxury apartment  Union Avenue </a></h5>
                                                    <span class="info-row"> <span class="item-location">544 Union Avenue, Brooklyn, NY 11211 |  <a><i
                                                            class="fa fa-map-marker-alt"></i> Map</a>  </span> </span>
                                                    <div class="prop-info-box">

                                                        <div class="prop-info">
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title ">4+2</span>
                                                                <span class="text">Adults | Children</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block middle">
                                                                <span class="title prop-area">171 m²</span>
                                                                <span class="text">Area (ca.)</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title prop-room">4</span>
                                                                <span class="text">room </span>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!--/.add-desc-box-->
                                            <div class="col-md-3 text-right  price-box">


                                                <a class="btn btn-border-thin  btn-save"   title="save ads"  data-toggle="tooltip" data-placement="left">
                                                    <i class="icon icon-heart"></i>
                                                </a>
                                                <a class="btn btn-border-thin  btn-share ">
                                                    <i class="icon icon-export" data-toggle="tooltip" data-placement="left"  title="share"></i>
                                                </a>

                                                <h3 class="item-price "> <strong>$2400 - $4260 </strong></h3>
                                                <div style="clear: both"></div>

                                                <a class="btn btn-success btn-sm bold" href="property-details.php">
                                                    Check Availabilty
                                                </a>


                                            </div>
                                            <!--/.add-desc-box-->
                                        </div>
                                    </div>
                                    <!--/.item-list-->


                                    <div class="item-list">

                                        <div class="row">
                                            <div class="col-md-3 no-padding photobox">
                                                <div class="add-image"><span class="photo-count"><i
                                                        class="fa fa-camera"></i> 3 </span> <a href="property-details.php"><img
                                                        class="thumbnail no-margin" src="images/house/thumb/13.jpg"
                                                        alt="img"></a></div>
                                            </div>
                                            <!--/.photobox-->
                                            <div class="col-md-6 add-desc-box">
                                                <div class="ads-details">
                                                    <h5 class="add-title"><a href="property-details.php">
                                                        Exclusive and modern luxury apartment  Union Avenue </a></h5>
                                                    <span class="info-row"> <span class="item-location">544 Union Avenue, Brooklyn, NY 11211 |  <a><i
                                                            class="fa fa-map-marker-alt"></i> Map</a>  </span> </span>
                                                    <div class="prop-info-box">

                                                        <div class="prop-info">
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title ">4+2</span>
                                                                <span class="text">Adults | Children</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block middle">
                                                                <span class="title prop-area">171 m²</span>
                                                                <span class="text">Area (ca.)</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title prop-room">4</span>
                                                                <span class="text">room </span>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!--/.add-desc-box-->
                                            <div class="col-md-3 text-right  price-box">


                                                <a class="btn btn-border-thin  btn-save"   title="save ads"  data-toggle="tooltip" data-placement="left">
                                                    <i class="icon icon-heart"></i>
                                                </a>
                                                <a class="btn btn-border-thin  btn-share ">
                                                    <i class="icon icon-export" data-toggle="tooltip" data-placement="left"  title="share"></i>
                                                </a>

                                                <h3 class="item-price "> <strong>$2400 - $4260 </strong></h3>
                                                <div style="clear: both"></div>

                                                <a class="btn btn-success btn-sm bold" href="property-details.php">
                                                    Check Availabilty
                                                </a>


                                            </div>
                                            <!--/.add-desc-box-->
                                        </div>
                                    </div>
                                    <!--/.item-list-->



                                    <div class="item-list">
                                        <div class="row">

                                            <div class="col-md-3 no-padding photobox">
                                                <div class="add-image"><span class="photo-count"><i
                                                        class="fa fa-camera"></i> 4 </span> <a href="property-details.php"><img
                                                        class="thumbnail no-margin" src="images/house/thumb/16.jpg"
                                                        alt="img"></a></div>
                                            </div>
                                            <!--/.photobox-->
                                            <div class="col-md-6 add-desc-box">
                                                <div class="ads-details">
                                                    <h5 class="add-title"><a href="property-details.php">
                                                        Exclusive and modern luxury apartment  Union Avenue </a></h5>
                                                    <span class="info-row"> <span class="item-location">544 Union Avenue, Brooklyn, NY 11211 |  <a><i
                                                            class="fa fa-map-marker-alt"></i> Map</a>  </span> </span>
                                                    <div class="prop-info-box">

                                                        <div class="prop-info">
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title ">4+2</span>
                                                                <span class="text">Adults | Children</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block middle">
                                                                <span class="title prop-area">171 m²</span>
                                                                <span class="text">Area (ca.)</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title prop-room">4</span>
                                                                <span class="text">room </span>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!--/.add-desc-box-->
                                            <div class="col-md-3 text-right  price-box">


                                                <a class="btn btn-border-thin  btn-save"   title="save ads"  data-toggle="tooltip" data-placement="left">
                                                    <i class="icon icon-heart"></i>
                                                </a>
                                                <a class="btn btn-border-thin  btn-share ">
                                                    <i class="icon icon-export" data-toggle="tooltip" data-placement="left"  title="share"></i>
                                                </a>

                                                <h3 class="item-price "> <strong>$2400 - $4260 </strong></h3>
                                                <div style="clear: both"></div>

                                                <a class="btn btn-success btn-sm bold" href="property-details.php">
                                                    Check Availabilty
                                                </a>


                                            </div>
                                            <!--/.add-desc-box-->
                                        </div>
                                    </div>
                                    <!--/.item-list-->


                                    <div class="item-list">

                                        <div class="row">
                                            <div class="col-md-3 no-padding photobox">
                                                <div class="add-image"><span class="photo-count"><i
                                                        class="fa fa-camera"></i> 8 </span> <a href="property-details.php"><img
                                                        class="thumbnail no-margin" src="images/house/thumb/building.jpg"
                                                        alt="img"></a></div>
                                            </div>
                                            <!--/.photobox-->
                                            <div class="col-md-6 add-desc-box">
                                                <div class="ads-details">
                                                    <h5 class="add-title"><a href="property-details.php">
                                                        Exclusive and modern luxury apartment  Union Avenue </a></h5>
                                                    <span class="info-row"> <span class="item-location">544 Union Avenue, Brooklyn, NY 11211 |  <a><i
                                                            class="fa fa-map-marker-alt"></i> Map</a>  </span> </span>
                                                    <div class="prop-info-box">

                                                        <div class="prop-info">
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title ">4+2</span>
                                                                <span class="text">Adults | Children</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block middle">
                                                                <span class="title prop-area">171 m²</span>
                                                                <span class="text">Area (ca.)</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title prop-room">4</span>
                                                                <span class="text">room </span>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!--/.add-desc-box-->
                                            <div class="col-md-3 text-right  price-box">


                                                <a class="btn btn-border-thin  btn-save"   title="save ads"  data-toggle="tooltip" data-placement="left">
                                                    <i class="icon icon-heart"></i>
                                                </a>
                                                <a class="btn btn-border-thin  btn-share ">
                                                    <i class="icon icon-export" data-toggle="tooltip" data-placement="left"  title="share"></i>
                                                </a>

                                                <h3 class="item-price "> <strong>$2400 - $4260 </strong></h3>
                                                <div style="clear: both"></div>

                                                <a class="btn btn-success btn-sm bold" href="property-details.php">
                                                    Check Availabilty
                                                </a>


                                            </div>
                                            <!--/.add-desc-box-->
                                        </div>
                                    </div>
                                    <!--/.item-list-->


                                    <div class="item-list">
                                        <div class="row">

                                            <div class="col-md-3 no-padding photobox">
                                                <div class="add-image"><span class="photo-count"><i
                                                        class="fa fa-camera"></i> 4 </span> <a href="property-details.php"><img
                                                        class="thumbnail no-margin" src="images/house/thumb/18.jpg"
                                                        alt="img"></a></div>
                                            </div>
                                            <!--/.photobox-->
                                            <div class="col-md-6 add-desc-box">
                                                <div class="ads-details">
                                                    <h5 class="add-title"><a href="property-details.php">
                                                        Exclusive and modern luxury apartment  Union Avenue </a></h5>
                                                    <span class="info-row"> <span class="item-location">544 Union Avenue, Brooklyn, NY 11211 |  <a><i
                                                            class="fa fa-map-marker-alt"></i> Map</a>  </span> </span>
                                                    <div class="prop-info-box">

                                                        <div class="prop-info">
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title ">4+2</span>
                                                                <span class="text">Adults | Children</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block middle">
                                                                <span class="title prop-area">171 m²</span>
                                                                <span class="text">Area (ca.)</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title prop-room">4</span>
                                                                <span class="text">room </span>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!--/.add-desc-box-->
                                            <div class="col-md-3 text-right  price-box">


                                                <a class="btn btn-border-thin  btn-save"   title="save ads"  data-toggle="tooltip" data-placement="left">
                                                    <i class="icon icon-heart"></i>
                                                </a>
                                                <a class="btn btn-border-thin  btn-share ">
                                                    <i class="icon icon-export" data-toggle="tooltip" data-placement="left"  title="share"></i>
                                                </a>

                                                <h3 class="item-price "> <strong>$2400 - $4260 </strong></h3>
                                                <div style="clear: both"></div>

                                                <a class="btn btn-success btn-sm bold" href="property-details.php">
                                                    Check Availabilty
                                                </a>


                                            </div>
                                            <!--/.add-desc-box-->
                                        </div>
                                    </div>
                                    <!--/.item-list-->


                                </div>
                                <!--/.adds-wrapper-->
                            </div>
                            <div class="tab-pane   " id="private">
                                <div class="adds-wrapper row no-margin property-list">


                                    <div class="item-list">

                                        <div class="row">
                                            <div class="col-md-3 no-padding photobox">
                                                <div class="add-image"><span class="photo-count"><i
                                                        class="fa fa-camera"></i> 3 </span> <a href="property-details.php"><img
                                                        class="thumbnail no-margin" src="images/house/thumb/13.jpg"
                                                        alt="img"></a></div>
                                            </div>
                                            <!--/.photobox-->
                                            <div class="col-md-6 add-desc-box">
                                                <div class="ads-details">
                                                    <h5 class="add-title"><a href="property-details.php">
                                                        Exclusive and modern luxury apartment  Union Avenue </a></h5>
                                                    <span class="info-row"> <span class="item-location">544 Union Avenue, Brooklyn, NY 11211 |  <a><i
                                                            class="fa fa-map-marker-alt"></i> Map</a>  </span> </span>
                                                    <div class="prop-info-box">

                                                        <div class="prop-info">
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title ">4+2</span>
                                                                <span class="text">Adults | Children</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block middle">
                                                                <span class="title prop-area">171 m²</span>
                                                                <span class="text">Area (ca.)</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title prop-room">4</span>
                                                                <span class="text">room </span>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!--/.add-desc-box-->
                                            <div class="col-md-3 text-right  price-box">


                                                <a class="btn btn-border-thin  btn-save"   title="save ads"  data-toggle="tooltip" data-placement="left">
                                                    <i class="icon icon-heart"></i>
                                                </a>
                                                <a class="btn btn-border-thin  btn-share ">
                                                    <i class="icon icon-export" data-toggle="tooltip" data-placement="left"  title="share"></i>
                                                </a>

                                                <h3 class="item-price "> <strong>$2400 - $4260 </strong></h3>
                                                <div style="clear: both"></div>

                                                <a class="btn btn-success btn-sm bold" href="property-details.php">
                                                    Check Availabilty
                                                </a>


                                            </div>
                                            <!--/.add-desc-box-->
                                        </div>
                                    </div>
                                    <!--/.item-list-->
                                    <div class="item-list">

                                        <div class="row">


                                            <div class="col-md-3 no-padding photobox">
                                                <div class="add-image"><span class="photo-count"><i
                                                        class="fa fa-camera"></i> 2 </span> <a href="property-details.php"><img
                                                        class="thumbnail no-margin" src="images/house/thumb/2.jpg"
                                                        alt="img"></a></div>
                                            </div>
                                            <!--/.photobox-->
                                            <div class="col-md-6 add-desc-box">
                                                <div class="ads-details">
                                                    <h5 class="add-title"><a href="property-details.php">
                                                        Exclusive and modern luxury apartment  Union Avenue </a></h5>
                                                    <span class="info-row"> <span class="item-location">544 Union Avenue, Brooklyn, NY 11211 |  <a><i
                                                            class="fa fa-map-marker-alt"></i> Map</a>  </span> </span>
                                                    <div class="prop-info-box">

                                                        <div class="prop-info">
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title ">4+2</span>
                                                                <span class="text">Adults | Children</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block middle">
                                                                <span class="title prop-area">171 m²</span>
                                                                <span class="text">Area (ca.)</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title prop-room">4</span>
                                                                <span class="text">room </span>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                            <!--/.add-desc-box-->
                                            <div class="col-md-3 text-right  price-box">


                                                <a class="btn btn-border-thin  btn-save"   title="save ads"  data-toggle="tooltip" data-placement="left">
                                                    <i class="icon icon-heart"></i>
                                                </a>
                                                <a class="btn btn-border-thin  btn-share ">
                                                    <i class="icon icon-export" data-toggle="tooltip" data-placement="left"  title="share"></i>
                                                </a>

                                                <h3 class="item-price "> <strong>$2400 - $4260 </strong></h3>
                                                <div style="clear: both"></div>

                                                <a class="btn btn-success btn-sm bold" href="property-details.php">
                                                    Check Availabilty
                                                </a>


                                            </div>
                                            <!--/.add-desc-box-->
                                        </div>
                                    </div>
                                    <!--/.item-list-->




                                    <div class="item-list">

                                        <div class="row">
                                            <div class="col-md-3 no-padding photobox">
                                                <div class="add-image">
                                                    <div id="properites-image-slide" class="carousel slide" data-ride="carousel"
                                                         data-interval="false">
                                                        <!-- Wrapper for slides -->
                                                        <div class="carousel-inner" role="listbox">
                                                            <div class="item active carousel-item">
                                                                <img src="images/house/thumb/4.jpg" alt="...">
                                                            </div>
                                                            <div class="item carousel-item">
                                                                <img src="images/house/thumb/5.jpg" alt="...">
                                                            </div>
                                                            <div class="item carousel-item">
                                                                <img src="images/house/thumb/6.jpg" alt="...">
                                                            </div>
                                                        </div>
                                                        <!-- Controls -->

                                                        <a class="left carousel-control" href="#properites-image-slide" role="button"
                                                           data-slide="prev">

                                                            <span class="icon icon-left-open-big icon-prev" aria-hidden="true"></span>

                                                            <span class="sr-only">Previous</span>

                                                        </a>
                                                        <a class="right carousel-control"
                                                           href="#properites-image-slide" role="button" data-slide="next">

                                                            <span class="icon icon-right-open-big icon-next" aria-hidden="true"></span>

                                                            <span class="sr-only">Next</span>

                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/.photobox-->
                                            <div class="col-md-6 add-desc-box">
                                                <div class="ads-details">
                                                    <h5 class="add-title"><a href="property-details.php">
                                                        Wow ! This item has a image slider ! </a></h5>
                                                    <span class="info-row"> <span class="item-location">544 Union Avenue, Brooklyn, NY 11211 |  <a><i
                                                            class="fa fa-map-marker-alt"></i> Map</a>  </span> </span>
                                                    <div class="prop-info-box">

                                                        <div class="prop-info">
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title ">4+2</span>
                                                                <span class="text">Adults | Children</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block middle">
                                                                <span class="title prop-area">171 m²</span>
                                                                <span class="text">Area (ca.)</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title prop-room">4</span>
                                                                <span class="text">room </span>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!--/.add-desc-box-->
                                            <div class="col-md-3 text-right  price-box">


                                                <a class="btn btn-border-thin  btn-save"   title="save ads"  data-toggle="tooltip" data-placement="left">
                                                    <i class="icon icon-heart"></i>
                                                </a>
                                                <a class="btn btn-border-thin  btn-share ">
                                                    <i class="icon icon-export" data-toggle="tooltip" data-placement="left"  title="share"></i>
                                                </a>

                                                <h3 class="item-price "> <strong>$2400 - $4260 </strong></h3>
                                                <div style="clear: both"></div>

                                                <a class="btn btn-success btn-sm bold" href="property-details.php">
                                                    Check Availabilty
                                                </a>


                                            </div>
                                            <!--/.add-desc-box-->
                                        </div>
                                    </div>
                                    <!--/.item-list-->


                                    <div class="item-list">
                                        <div class="row">

                                            <div class="col-md-3 no-padding photobox">
                                                <div class="add-image"><span class="photo-count"><i
                                                        class="fa fa-camera"></i> 4 </span> <a href="property-details.php"><img
                                                        class="thumbnail no-margin" src="images/house/thumb/9.jpg"
                                                        alt="img"></a></div>
                                            </div>
                                            <!--/.photobox-->
                                            <div class="col-md-6 add-desc-box">
                                                <div class="ads-details">
                                                    <h5 class="add-title"><a href="property-details.php">
                                                        Exclusive and modern luxury apartment  Union Avenue </a></h5>
                                                    <span class="info-row"> <span class="item-location">544 Union Avenue, Brooklyn, NY 11211 |  <a><i
                                                            class="fa fa-map-marker-alt"></i> Map</a>  </span> </span>
                                                    <div class="prop-info-box">

                                                        <div class="prop-info">
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title ">4+2</span>
                                                                <span class="text">Adults | Children</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block middle">
                                                                <span class="title prop-area">171 m²</span>
                                                                <span class="text">Area (ca.)</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title prop-room">4</span>
                                                                <span class="text">room </span>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!--/.add-desc-box-->
                                            <div class="col-md-3 text-right  price-box">


                                                <a class="btn btn-border-thin  btn-save"   title="save ads"  data-toggle="tooltip" data-placement="left">
                                                    <i class="icon icon-heart"></i>
                                                </a>
                                                <a class="btn btn-border-thin  btn-share ">
                                                    <i class="icon icon-export" data-toggle="tooltip" data-placement="left"  title="share"></i>
                                                </a>

                                                <h3 class="item-price "> <strong>$2400 - $4260 </strong></h3>
                                                <div style="clear: both"></div>

                                                <a class="btn btn-success btn-sm bold" href="property-details.php">
                                                    Check Availabilty
                                                </a>


                                            </div>
                                            <!--/.add-desc-box-->
                                        </div>
                                    </div>
                                    <!--/.item-list-->


                                    <div class="item-list">
                                        <div class="row">

                                            <div class="col-md-3 no-padding photobox">
                                                <div class="add-image"><span class="photo-count"><i
                                                        class="fa fa-camera"></i> 4 </span> <a href="property-details.php"><img
                                                        class="thumbnail no-margin" src="images/house/thumb/18.jpg"
                                                        alt="img"></a></div>
                                            </div>
                                            <!--/.photobox-->
                                            <div class="col-md-6 add-desc-box">
                                                <div class="ads-details">
                                                    <h5 class="add-title"><a href="property-details.php">
                                                        Fully Furnished 2 Bedroom in Residence luxury apartment   </a></h5>
                                                    <span class="info-row"> <span class="item-location">Sports City , NY 25411 |  <a><i
                                                            class="fa fa-map-marker-alt"></i> Map</a>  </span> </span>
                                                    <div class="prop-info-box">

                                                        <div class="prop-info">
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title ">2+2</span>
                                                                <span class="text">Adults | Children</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block middle">
                                                                <span class="title prop-area">271 m²</span>
                                                                <span class="text">Area (ca.)</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title prop-room">2</span>
                                                                <span class="text">room </span>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!--/.add-desc-box-->
                                            <div class="col-md-3 text-right  price-box">


                                                <a class="btn btn-border-thin  btn-save"   title="save ads"  data-toggle="tooltip" data-placement="left">
                                                    <i class="icon icon-heart"></i>
                                                </a>
                                                <a class="btn btn-border-thin  btn-share ">
                                                    <i class="icon icon-export" data-toggle="tooltip" data-placement="left"  title="share"></i>
                                                </a>

                                                <h3 class="item-price "> <strong>$5400 - $7260 </strong></h3>
                                                <div style="clear: both"></div>

                                                <a class="btn btn-success btn-sm bold" href="property-details.php">
                                                    Check Availabilty
                                                </a>


                                            </div>
                                            <!--/.add-desc-box-->
                                        </div>
                                    </div>
                                    <!--/.item-list-->


                                    <div class="item-list">

                                        <div class="row">
                                            <div class="col-md-3 no-padding photobox">
                                                <div class="add-image"><span class="photo-count"><i
                                                        class="fa fa-camera"></i> 4 </span> <a href="property-details.php"><img
                                                        class="thumbnail no-margin" src="images/house/thumb/b12.jpg"
                                                        alt="img"></a></div>
                                            </div>
                                            <!--/.photobox-->
                                            <div class="col-md-6 add-desc-box">
                                                <div class="ads-details">
                                                    <h5 class="add-title"><a href="property-details.php">
                                                        Exclusive Furnished and modern luxury apartment   </a></h5>
                                                    <span class="info-row"> <span class="item-location">Oceana Avenue, Brooklyn, NY 50154 |  <a><i
                                                            class="fa fa-map-marker-alt"></i> Map</a>  </span> </span>
                                                    <div class="prop-info-box">

                                                        <div class="prop-info">
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title ">4+2</span>
                                                                <span class="text">Adults | Children</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block middle">
                                                                <span class="title prop-area">321 m²</span>
                                                                <span class="text">Area (ca.)</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title prop-room">4</span>
                                                                <span class="text">room </span>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!--/.add-desc-box-->
                                            <div class="col-md-3 text-right  price-box">


                                                <a class="btn btn-border-thin  btn-save"   title="save ads"  data-toggle="tooltip" data-placement="left">
                                                    <i class="icon icon-heart"></i>
                                                </a>
                                                <a class="btn btn-border-thin  btn-share ">
                                                    <i class="icon icon-export" data-toggle="tooltip" data-placement="left"  title="share"></i>
                                                </a>

                                                <h3 class="item-price "> <strong>$2400 - $4260 </strong></h3>
                                                <div style="clear: both"></div>

                                                <a class="btn btn-success btn-sm bold" href="property-details.php">
                                                    Check Availabilty
                                                </a>


                                            </div>
                                            <!--/.add-desc-box-->
                                        </div>
                                    </div>
                                    <!--/.item-list-->


                                    <div class="item-list">
                                        <div class="row">

                                            <div class="col-md-3 no-padding photobox">
                                                <div class="add-image"><span class="photo-count"><i
                                                        class="fa fa-camera"></i> 6 </span> <a href="property-details.php"><img
                                                        class="thumbnail no-margin" src="images/house/thumb/14.jpg"
                                                        alt="img"></a></div>
                                            </div>
                                            <!--/.photobox-->
                                            <div class="col-md-6 add-desc-box">
                                                <div class="ads-details">
                                                    <h5 class="add-title"><a href="property-details.php">
                                                        Majestic Atlantis View from a High Floor luxury apartment   </a></h5>
                                                    <span class="info-row"> <span class="item-location">544 Union Avenue, Brooklyn, NY 11211 |  <a><i
                                                            class="fa fa-map-marker-alt"></i> Map</a>  </span> </span>
                                                    <div class="prop-info-box">

                                                        <div class="prop-info">
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title ">4+2</span>
                                                                <span class="text">Adults | Children</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block middle">
                                                                <span class="title prop-area">171 m²</span>
                                                                <span class="text">Area (ca.)</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title prop-room">4</span>
                                                                <span class="text">room </span>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!--/.add-desc-box-->
                                            <div class="col-md-3 text-right  price-box">


                                                <a class="btn btn-border-thin  btn-save"   title="save ads"  data-toggle="tooltip" data-placement="left">
                                                    <i class="icon icon-heart"></i>
                                                </a>
                                                <a class="btn btn-border-thin  btn-share ">
                                                    <i class="icon icon-export" data-toggle="tooltip" data-placement="left"  title="share"></i>
                                                </a>

                                                <h3 class="item-price "> <strong>$2400 - $4260 </strong></h3>
                                                <div style="clear: both"></div>

                                                <a class="btn btn-success btn-sm bold" href="property-details.php">
                                                    Check Availabilty
                                                </a>


                                            </div>
                                            <!--/.add-desc-box-->
                                        </div>
                                    </div>
                                    <!--/.item-list-->


                                    <div class="item-list">

                                        <div class="row">
                                            <div class="col-md-3 no-padding photobox">
                                                <div class="add-image"><span class="photo-count"><i
                                                        class="fa fa-camera"></i> 4 </span> <a href="property-details.php"><img
                                                        class="thumbnail no-margin" src="images/house/thumb/11.jpg"
                                                        alt="img"></a></div>
                                            </div>
                                            <!--/.photobox-->
                                            <div class="col-md-6 add-desc-box">
                                                <div class="ads-details">
                                                    <h5 class="add-title"><a href="property-details.php">
                                                        Exclusive and modern  Atlantis View - Low Floor </a></h5>
                                                    <span class="info-row"> <span class="item-location">544 Union Avenue, Brooklyn, NY 11211 |  <a><i
                                                            class="fa fa-map-marker-alt"></i> Map</a>  </span> </span>
                                                    <div class="prop-info-box">

                                                        <div class="prop-info">
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title ">4+2</span>
                                                                <span class="text">Adults | Children</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block middle">
                                                                <span class="title prop-area">171 m²</span>
                                                                <span class="text">Area (ca.)</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title prop-room">4</span>
                                                                <span class="text">room </span>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!--/.add-desc-box-->
                                            <div class="col-md-3 text-right  price-box">


                                                <a class="btn btn-border-thin  btn-save"   title="save ads"  data-toggle="tooltip" data-placement="left">
                                                    <i class="icon icon-heart"></i>
                                                </a>
                                                <a class="btn btn-border-thin  btn-share ">
                                                    <i class="icon icon-export" data-toggle="tooltip" data-placement="left"  title="share"></i>
                                                </a>

                                                <h3 class="item-price "> <strong>$2400 - $4260 </strong></h3>
                                                <div style="clear: both"></div>

                                                <a class="btn btn-success btn-sm bold" href="property-details.php">
                                                    Check Availabilty
                                                </a>


                                            </div>
                                            <!--/.add-desc-box-->
                                        </div>
                                    </div>
                                    <!--/.item-list-->


                                    <div class="item-list">
                                        <div class="row">

                                            <div class="col-md-3 no-padding photobox">
                                                <div class="add-image"><span class="photo-count"><i
                                                        class="fa fa-camera"></i> 4 </span> <a href="property-details.php"><img
                                                        class="thumbnail no-margin" src="images/house/thumb/16.jpg"
                                                        alt="img"></a></div>
                                            </div>
                                            <!--/.photobox-->
                                            <div class="col-md-6 add-desc-box">
                                                <div class="ads-details">
                                                    <h5 class="add-title"><a href="property-details.php">
                                                        Exclusive and modern luxury apartment  Union Avenue </a></h5>
                                                    <span class="info-row"> <span class="item-location">544 Union Avenue, Brooklyn, NY 11211 |  <a><i
                                                            class="fa fa-map-marker-alt"></i> Map</a>  </span> </span>
                                                    <div class="prop-info-box">

                                                        <div class="prop-info">
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title ">4+2</span>
                                                                <span class="text">Adults | Children</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block middle">
                                                                <span class="title prop-area">171 m²</span>
                                                                <span class="text">Area (ca.)</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title prop-room">4</span>
                                                                <span class="text">room </span>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!--/.add-desc-box-->
                                            <div class="col-md-3 text-right  price-box">


                                                <a class="btn btn-border-thin  btn-save"   title="save ads"  data-toggle="tooltip" data-placement="left">
                                                    <i class="icon icon-heart"></i>
                                                </a>
                                                <a class="btn btn-border-thin  btn-share ">
                                                    <i class="icon icon-export" data-toggle="tooltip" data-placement="left"  title="share"></i>
                                                </a>

                                                <h3 class="item-price "> <strong>$2400 - $4260 </strong></h3>
                                                <div style="clear: both"></div>

                                                <a class="btn btn-success btn-sm bold" href="property-details.php">
                                                    Check Availabilty
                                                </a>


                                            </div>
                                            <!--/.add-desc-box-->
                                        </div>
                                    </div>
                                    <!--/.item-list-->


                                    <div class="item-list">

                                        <div class="row">
                                            <div class="col-md-3 no-padding photobox">
                                                <div class="add-image"><span class="photo-count"><i
                                                        class="fa fa-camera"></i> 8 </span> <a href="property-details.php"><img
                                                        class="thumbnail no-margin" src="images/house/thumb/building.jpg"
                                                        alt="img"></a></div>
                                            </div>
                                            <!--/.photobox-->
                                            <div class="col-md-6 add-desc-box">
                                                <div class="ads-details">
                                                    <h5 class="add-title"><a href="property-details.php">
                                                        Exclusive and modern luxury apartment  Union Avenue </a></h5>
                                                    <span class="info-row"> <span class="item-location">544 Union Avenue, Brooklyn, NY 11211 |  <a><i
                                                            class="fa fa-map-marker-alt"></i> Map</a>  </span> </span>
                                                    <div class="prop-info-box">

                                                        <div class="prop-info">
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title ">4+2</span>
                                                                <span class="text">Adults | Children</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block middle">
                                                                <span class="title prop-area">171 m²</span>
                                                                <span class="text">Area (ca.)</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title prop-room">4</span>
                                                                <span class="text">room </span>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!--/.add-desc-box-->
                                            <div class="col-md-3 text-right  price-box">


                                                <a class="btn btn-border-thin  btn-save"   title="save ads"  data-toggle="tooltip" data-placement="left">
                                                    <i class="icon icon-heart"></i>
                                                </a>
                                                <a class="btn btn-border-thin  btn-share ">
                                                    <i class="icon icon-export" data-toggle="tooltip" data-placement="left"  title="share"></i>
                                                </a>

                                                <h3 class="item-price "> <strong>$2400 - $4260 </strong></h3>
                                                <div style="clear: both"></div>

                                                <a class="btn btn-success btn-sm bold" href="property-details.php">
                                                    Check Availabilty
                                                </a>


                                            </div>
                                            <!--/.add-desc-box-->
                                        </div>
                                    </div>
                                    <!--/.item-list-->


                                    <div class="item-list">
                                        <div class="row">

                                            <div class="col-md-3 no-padding photobox">
                                                <div class="add-image"><span class="photo-count"><i
                                                        class="fa fa-camera"></i> 4 </span> <a href="property-details.php"><img
                                                        class="thumbnail no-margin" src="images/house/thumb/18.jpg"
                                                        alt="img"></a></div>
                                            </div>
                                            <!--/.photobox-->
                                            <div class="col-md-6 add-desc-box">
                                                <div class="ads-details">
                                                    <h5 class="add-title"><a href="property-details.php">
                                                        Exclusive and modern luxury apartment  Union Avenue </a></h5>
                                                    <span class="info-row"> <span class="item-location">544 Union Avenue, Brooklyn, NY 11211 |  <a><i
                                                            class="fa fa-map-marker-alt"></i> Map</a>  </span> </span>
                                                    <div class="prop-info-box">

                                                        <div class="prop-info">
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title ">4+2</span>
                                                                <span class="text">Adults | Children</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block middle">
                                                                <span class="title prop-area">171 m²</span>
                                                                <span class="text">Area (ca.)</span>
                                                            </div>
                                                            <div class="clearfix prop-info-block">
                                                                <span class="title prop-room">4</span>
                                                                <span class="text">room </span>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!--/.add-desc-box-->
                                            <div class="col-md-3 text-right  price-box">


                                                <a class="btn btn-border-thin  btn-save"   title="save ads"  data-toggle="tooltip" data-placement="left">
                                                    <i class="icon icon-heart"></i>
                                                </a>
                                                <a class="btn btn-border-thin  btn-share ">
                                                    <i class="icon icon-export" data-toggle="tooltip" data-placement="left"  title="share"></i>
                                                </a>

                                                <h3 class="item-price "> <strong>$2400 - $4260 </strong></h3>
                                                <div style="clear: both"></div>

                                                <a class="btn btn-success btn-sm bold" href="property-details.php">
                                                    Check Availabilty
                                                </a>


                                            </div>
                                            <!--/.add-desc-box-->
                                        </div>
                                    </div>
                                    <!--/.item-list-->


                                </div>
                                <!--/.adds-wrapper-->
                            </div>
                        </div>



                        <div class="tab-box  save-search-bar text-center"><a href="#"> <i class=" icon-star-empty"></i>
                            Save Search </a></div>
                    </div>
                    <div class="pagination-bar text-center">
                    	<nav aria-label="Page navigation " class="d-inline-b">
                    		<ul class="pagination">

                    			<li class="page-item active"><a class="page-link" href="#">1</a></li>
                    			<li class="page-item"><a class="page-link" href="#">2</a></li>
                    			<li class="page-item"><a class="page-link" href="#">3</a></li>
                    			<li class="page-item"><a class="page-link" href="#">4</a></li>
                    			<li class="page-item"><a class="page-link" href="#">...</a></li>
                    			<li class="page-item">
                    				<a class="page-link" href="#">Next</a>
                    			</li>
                    		</ul>
                    	</nav>
                    </div>
                    <!--/.pagination-bar -->

                    <div class="post-promo text-center">
                        <h2> Do you get anything for sell ? </h2>
                        <h5>Sell your products online FOR FREE. It's easier than you think !</h5>
                        <a href="post-ads.php" class="btn btn-lg btn-border btn-post btn-danger">Post a Free Ad </a>
                    </div>
                    <!--/.post-promo-->

                </div>
                <!--/.page-content-->

            </div>
        </div>
    </div>
    <!-- /.main-container -->


  <?php include 'footer.php';?>
    <!--/.footer-->

</div>
<!-- /.wrapper -->



<!-- Le javascript
================================================== -->

<!-- Placed at the end of the document so the pages load faster -->

<script src="../../../../cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/jquery/jquery-3.3.1.min.js">\x3C/script>')</script>
<script src="assets/bootstrap/js/bootstrap.bundle.js"></script>
<script src="assets/js/vendors.min.js"></script>

<!-- include custom script for site  -->
<script src="assets/js/main.min.js"></script>

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
<!-- Modal Change City -->

<div class="modal fade modalHasList" id="selectRegion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	 aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="exampleModalLabel"><i class=" icon-map"></i> Select your region </h4>

				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
						class="sr-only">Close</span></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-12">

						<p>Popular cities in <strong>New York</strong>
						</p>

						<div style="clear:both"></div>
						<div class="col-sm-6 no-padding">
							<select class="form-control selecter  " id="region-state" name="region-state">
								<option value="">All States/Provinces</option>
								<option value="Alabama">Alabama</option>
								<option value="Alaska">Alaska</option>
								<option value="Arizona">Arizona</option>
								<option value="Arkansas">Arkansas</option>
								<option value="California">California</option>
								<option value="Colorado">Colorado</option>
								<option value="Connecticut">Connecticut</option>
								<option value="Delaware">Delaware</option>
								<option value="District of Columbia">District of Columbia</option>
								<option value="Florida">Florida</option>
								<option value="Georgia">Georgia</option>
								<option value="Hawaii">Hawaii</option>
								<option value="Idaho">Idaho</option>
								<option value="Illinois">Illinois</option>
								<option value="Indiana">Indiana</option>
								<option value="Iowa">Iowa</option>
								<option value="Kansas">Kansas</option>
								<option value="Kentucky">Kentucky</option>
								<option value="Louisiana">Louisiana</option>
								<option value="Maine">Maine</option>
								<option value="Maryland">Maryland</option>
								<option value="Massachusetts">Massachusetts</option>
								<option value="Michigan">Michigan</option>
								<option value="Minnesota">Minnesota</option>
								<option value="Mississippi">Mississippi</option>
								<option value="Missouri">Missouri</option>
								<option value="Montana">Montana</option>
								<option value="Nebraska">Nebraska</option>
								<option value="Nevada">Nevada</option>
								<option value="New Hampshire">New Hampshire</option>
								<option value="New Jersey">New Jersey</option>
								<option value="New Mexico">New Mexico</option>
								<option selected value="New York">New York</option>
								<option value="North Carolina">North Carolina</option>
								<option value="North Dakota">North Dakota</option>
								<option value="Ohio">Ohio</option>
								<option value="Oklahoma">Oklahoma</option>
								<option value="Oregon">Oregon</option>
								<option value="Pennsylvania">Pennsylvania</option>
								<option value="Rhode Island">Rhode Island</option>
								<option value="South Carolina">South Carolina</option>
								<option value="South Dakota">South Dakota</option>
								<option value="Tennessee">Tennessee</option>
								<option value="Texas">Texas</option>
								<option value="Utah">Utah</option>
								<option value="Vermont">Vermont</option>
								<option value="Virgin Islands">Virgin Islands</option>
								<option value="Virginia">Virginia</option>
								<option value="Washington">Washington</option>
								<option value="West Virginia">West Virginia</option>
								<option value="Wisconsin">Wisconsin</option>
								<option value="Wyoming">Wyoming</option>
							</select>
						</div>
						<div style="clear:both"></div>

						<hr class="hr-thin">
					</div>
					<div class="col-md-4">
						<ul class="list-link list-unstyled">
							<li><a href="#" title="">All Cities</a></li>
							<li><a href="#" title="Albany">Albany</a></li>
							<li><a href="#" title="Altamont">Altamont</a></li>
							<li><a href="#" title="Amagansett">Amagansett</a></li>
							<li><a href="#" title="Amawalk">Amawalk</a></li>
							<li><a href="#" title="Bellport">Bellport</a></li>
							<li><a href="#" title="Centereach">Centereach</a></li>
							<li><a href="#" title="Chappaqua">Chappaqua</a></li>
							<li><a href="#" title="East Elmhurst">East Elmhurst</a></li>
							<li><a href="#" title="East Greenbush">East Greenbush</a></li>
							<li><a href="#" title="East Meadow">East Meadow</a></li>

						</ul>
					</div>
					<div class="col-md-4">
						<ul class="list-link list-unstyled">
							<li><a href="#" title="Elmont">Elmont</a></li>
							<li><a href="#" title="Elmsford">Elmsford</a></li>
							<li><a href="#" title="Farmingville">Farmingville</a></li>
							<li><a href="#" title="Floral Park">Floral Park</a></li>
							<li><a href="#" title="Flushing">Flushing</a></li>
							<li><a href="#" title="Fonda">Fonda</a></li>
							<li><a href="#" title="Freeport">Freeport</a></li>
							<li><a href="#" title="Fresh Meadows">Fresh Meadows</a></li>
							<li><a href="#" title="Fultonville">Fultonville</a></li>
							<li><a href="#" title="Gansevoort">Gansevoort</a></li>
							<li><a href="#" title="Garden City">Garden City</a></li>


						</ul>
					</div>
					<div class="col-md-4">
						<ul class="list-link list-unstyled">
							<li><a href="#" title="Oceanside">Oceanside</a></li>
							<li><a href="#" title="Orangeburg">Orangeburg</a></li>
							<li><a href="#" title="Orient">Orient</a></li>
							<li><a href="#" title="Ozone Park">Ozone Park</a></li>
							<li><a href="#" title="Palatine Bridge">Palatine Bridge</a></li>
							<li><a href="#" title="Patterson">Patterson</a></li>
							<li><a href="#" title="Pearl River">Pearl River</a></li>
							<li><a href="#" title="Peekskill">Peekskill</a></li>
							<li><a href="#" title="Pelham">Pelham</a></li>
							<li><a href="#" title="Penn Yan">Penn Yan</a></li>
							<li><a href="#" title="Peru">Peru</a></li>

						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</body>

<!-- Mirrored from templatecycle.com/demo/bootclassified-5.1/dist/property-list.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Mar 2021 09:13:51 GMT -->
</html>
