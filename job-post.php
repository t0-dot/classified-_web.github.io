<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from templatecycle.com/demo/bootclassified-5.1/dist/job-post.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Mar 2021 09:09:40 GMT -->
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

    <div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-9 page-content">
                    <div class="inner-box category-content">
                        <h2 class="title-2 uppercase"><strong> <i class="icon-briefcase"></i> Post a Job </strong></h2>

                        <div class="row">
                            <div class="col-sm-12">
                                <form class="form-horizontal">
                                    <fieldset>

                                        <!-- Text input-->
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="CompanyName">Company</label>

                                            <div class="col-md-8">
                                                <input id="CompanyName" name="CompanyName" placeholder="Company Name"
                                                       class="form-control input-md" required="" type="text">
                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="jobTitle">Job Title</label>

                                            <div class="col-md-8">
                                                <input id="jobTitle" name="jobTitle" placeholder="job Title"
                                                       class="form-control input-md" required="" type="text">
                                                <span class="form-text text-muted">A great title needs at least 60 characters. </span>
                                            </div>
                                        </div>

                                        <!-- Select Basic -->
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Category</label>

                                            <div class="col-md-8">
                                                <select title="category" name="category-group" id="category-group" class="form-control">
                                                    <option value="0" selected="selected"> Select a category...</option>
                                                    <option value="111">Accounting</option>
                                                    <option value="112">Administration &amp; Office Support</option>
                                                    <option value="113">Agriculture, Animals &amp; Conservation</option>
                                                    <option value="114">Architecture &amp; Design</option>
                                                    <option value="115">Banking &amp; Financial Services</option>
                                                    <option value="116">Communications, Advertising, Arts &amp; Media
                                                    </option>
                                                    <option value="117">Community Services</option>
                                                    <option value="118">Construction</option>
                                                    <option value="119">Customer Service &amp; Call Centre</option>
                                                    <option value="123">Defence &amp; Protective Services</option>
                                                    <option value="120">Education &amp; Training</option>
                                                    <option value="121">Engineering</option>
                                                    <option value="122">Executive &amp; General Management</option>
                                                    <option value="130">Health &amp; Medical</option>
                                                    <option value="124">Hospitality &amp; Tourism</option>
                                                    <option value="125">Human Resources &amp; Recruitment</option>
                                                    <option value="126">Information &amp; Communication Technology
                                                        (ICT)
                                                    </option>
                                                    <option value="127">Insurance &amp; Superannuation</option>
                                                    <option value="128">Legal</option>
                                                    <option value="129">Manufacturing</option>
                                                    <option value="131">Mining &amp; Energy</option>
                                                    <option value="132">Real Estate &amp; Property</option>
                                                    <option value="133">Retail</option>
                                                    <option value="134">Sales</option>
                                                    <option value="135">Science</option>
                                                    <option value="136">Sport &amp; Recreation</option>
                                                    <option value="137">Trades &amp; Services</option>
                                                    <option value="138">Transport &amp; Logistics</option>
                                                    <option value="Other"> Other</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Textarea -->
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="textarea">Job Description

                                            </label>

                                            <div class="col-sm-8">

                                                <textarea style="height: 250px" class="form-control" id="textarea"
                                                          name="textarea">Job Description</textarea>

                                                <span class="form-text text-muted">Describe the responsibilities ,  experience, skills, or education. </span>

                                            </div>
                                        </div>


                                        <!-- Select Basic -->
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="Location">Location </label>

                                            <div class="col-sm-8">
                                                <input id="Location" name="Location" placeholder="City or Postcode"
                                                       class="form-control input-md" required="" type="text">
                                            </div>
                                        </div>


                                        <!-- Multiple Radios (inline) -->
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Add Type</label>

                                            <div class="col-sm-8">

                                                <select class="form-control" name="type" id="type">
                                                    <option selected="" value="FULLTIME" name="FULLTIME">Full-time
                                                    </option>
                                                    <option value="PARTTIME" name="PARTTIME">Part-time</option>
                                                    <option value="TEMPORARY" name="TEMPORARY">Temporary</option>
                                                    <option value="CONTRACT" name="CONTRACT">Contract</option>
                                                    <option value="INTERNSHIP" name="INTERNSHIP">Internship</option>
                                                    <option value="PERMANENT" name="PERMANENT">Permanent</option>
                                                    <option value="Optional" name="Optional">Optional</option>
                                                </select>


                                            </div>
                                        </div>


                                        <!-- Prepended text-->
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="Salary ">Salary </label>

                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <span class="input-group-addon">$</span>
                                                    <input id="Salary " name="Salary " class="form-control"
                                                           placeholder="Salary " required="" type="text">

                                                    <div class="input-group-btn">


                                                        <button type="button" class="btn selected-dropdown-toggle btn-secondary dropdown-toggle"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            Type
                                                        </button>

                                                        <ul class="dropdown-menu selected-dropdown-menu">
                                                            <li><a class="dropdown-item">per hour</a></li>
                                                            <li><a class="dropdown-item">per hour</a></li>
                                                            <li><a class="dropdown-item">per month</a></li>
                                                        </ul>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox"> Negotiable
                                                    </label>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="content-subheading"><i class="icon-user fa"></i> <strong>Company
                                            information</strong></div>

                                        <!-- Text input-->
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="textinput-name">Name</label>

                                            <div class="col-sm-8">
                                                <input id="textinput-name" name="textinput-name"
                                                       placeholder="Seller Name" class="form-control input-md"
                                                       required="" type="text">
                                            </div>
                                        </div>

                                        <!-- Appended checkbox -->
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="seller-email"> Company
                                                Email</label>

                                            <div class="col-sm-8">
                                                <input id="Company-email" name="Company-email" class="form-control"
                                                       placeholder="Email" required="" type="text">

                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox"> <small>Hide the Email  on this jobs</small>
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
                                                       required="" type="text">
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
                                                    <tr>
                                                        <td>

                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="radio" name="exampleRadios" id="optionsRadios0" value="option1" checked>
                                                                    Regular List
                                                                </label>
                                                            </div>

                                                        </td>
                                                        <td><p>$00.00</p></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="radio" name="exampleRadios" id="optionsRadios1" value="option1" >
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
                                                                    <input class="form-check-input" type="radio" name="exampleRadios" id="optionsRadios2" value="option2" >
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
                                                                    <input class="form-check-input" type="radio" name="exampleRadios" id="optionsRadios3" value="option3" >
                                                                    <strong> Top of the Page Ad + Urgent Ad</strong>
                                                                </label>
                                                            </div>


                                                        </td>
                                                        <td><p>$40.00</p></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-group row">
                                                                <div class="col-sm-8">
                                                                    <select class="form-control" name="Method"
                                                                            id="PaymentMethod">
                                                                        <option value="2">Select Payment Method</option>
                                                                        <option value="3">Credit / Debit Card</option>
                                                                        <option value="5">Paypal</option>
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

                                            <div class="col-sm-8"><a href="posting-success.php" id="button1id"
                                                                     class="btn btn-success btn-lg">Submit</a></div>
                                        </div>


</fieldset>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.page-content -->

                <div class="col-md-3 reg-sidebar">
                    <div class="reg-sidebar-inner text-center">
                        <div class="promo-text-box"><i class=" icon-lamp fa fa-4x icon-color-1"></i>

                            <h3><strong>Effective Job Postings </strong></h3>

                            <p> The difference between finding mediocre candidates and extraordinary candidates for your
                                clients is a good job posting. </p>
                        </div>

                        <div class="card sidebar-card">
                            <div class="card-header uppercase">
                                <small><strong> Job Posting Tips</strong></small>
                            </div>
                            <div class="card-content">
                                <div class="card-body text-left">
                                    <ul class="list-check">
                                        <li> Add Keywords</li>
                                        <li> Use Familiar Job Titles</li>
                                        <li> Give Them Details</li>
                                        <li> Expand Your Location</li>
                                        <li> Easy Read Postings</li>
                                        <li> Keep it simple and expected</li>

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


</body>

<!-- Mirrored from templatecycle.com/demo/bootclassified-5.1/dist/job-post.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Mar 2021 09:09:40 GMT -->
</html>
