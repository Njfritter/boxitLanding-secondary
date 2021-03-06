<?php require_once('./config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!--head.META-->
    	<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<meta name="description" content="">
        <meta name="author" content="">
    <!--head.CSS-->
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="css/grayscale.css" rel="stylesheet" type="text/css">
		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom Fonts for GRAYSCALE themex -->
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">

	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->

        <!-- Icons CSS Import (web) -->
        <link href="css/bootstrap.icon-large.min.css" rel="stylesheet">

        <!-- Stripe JS -->
            <script type="text/javascript" src="https://js.stripe.com/v2/"></script>

        <!-- Loading jQuery.JS -->
            <script src="js/jquery.js"></script>

        <!-- jQuery -->
            <script type="text/javascript">

        // this identifies your website in the createToken call below
        Stripe.setPublishableKey("<?php echo $stripe['publishable_key']; ?>");

        function stripeResponseHandler(status, response) {
            if (response.error) {
                // re-enable the submit button
                $('.submit-button').removeAttr("disabled");
                // show the errors on the form
                $(".payment-errors").html(response.error.message);
            } else {
                var form$ = $("#payment-form");
                // token contains id, last4, and card type
                var token = response['id'];
                // insert the token into the form so it gets submitted to the server
                form$.append("<input type='hidden' name='stripeToken' value='" + token + "' />");
                        // and submit
                form$.get(0).submit();
            }
        }

        $(document).ready(function() {
            $("#payment-form").submit(function(event) {
                // disable the submit button to prevent repeated clicks
                $('.submit-button').attr("disabled", "disabled");
                // createToken returns immediately - the supplied callback submits the form if there are no errors
                Stripe.createToken({
                    number: $('.card-number').val(),
                    cvc: $('.card-cvc').val(),
                    exp_month: $('.card-expiry-month').val(),
                    exp_year: $('.card-expiry-year').val()
                }, stripeResponseHandler);
                return false; // submit from callback
            });
        });

            </script>

            <script type="text/javascript">
                $( document ).ready(function() {
                    console.log( "ready!" );
                });
            </script>

            <script type="text/javascript">
                //this is not working
                $(document).on( 'scroll', '#problem', function(){
                    console.log('Event Fired');
                });
            </script>

    <!--head.TITLE-->
    	<title>
    		BOXIT SERVICES
    	</title>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="navbar-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand page-scroll" href="./header.php">
                        <span class="light">
                            Box
                        </span>
                        <img id="boxlogo" src="assets/images/box.png" alt="box" height="30px" width="auto">
                        IT
                    </a>
                </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    
                    <!-- NAV LINKS -->
                    <ul class="nav navbar-nav">
                        <li class="hidden">
                        </li>
                        <li>
                            <a class="page-scroll" href="tel:[(888)289-6385]"><strong>(888) 289-6385</strong></a>
                        </li>
                        <li>
                            <a class="page-scroll" href=""></a>
                        </li>                   
                        <li>
                            <a class="page-scroll" href="#services">Services</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#pricing">Pricing</a>
                        </li>
                         <li>
                            <a class="page-scroll" href="#team">Team</a>
                        </li>
                         <li>
                            <a class="page-scroll" href="investors.html" target="_blank">Invest</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
		
<!-- INTRO HEADER -->
		    <header class="intro center">
		        <div class="intro-body">
		            <div class="container">
		                <div class="row">
		                    <div class="col-md-8 col-md-offset-2">
                                <h1>
                                    <strong>
                                        The waters are tough out there
                                    </strong>
                                </h1>
                                <br>
                                <h3>
                                    MAKE YOUR BUSINESS <strong>UNSTOPPABLE</strong>
                                </h3>
                                <br/>
                                <br/>
                                <a href="#problem" class="page-scroll">
                                <div>
                                    <h6>
                                        Click here to
                                    </h6>
                                    <h6>
                                        Experience it
                                    </h6>
                                    <img id="boxlogo" src="assets/images/box.png" alt="box" height="50px" width="auto">
                                    <br/>
                                    <span class="glyphicon glyphicon-chevron-down animated"></span>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
		    </header>

<!-- DOWNLOAD GUIDE LINK -->

            <div id="literatureLink" class="center">
            <a href="form.html" target="_blank" class="litText">
                <h6>Download</h6>
                <h4>2015 Definitive Guide to Business Stability &amp; Growth</h4>
            </a>
            </div>

<!-- BoxIT Mission Statement  -->

            <section class="container content-section center">
                <div>
                    <div id="problem">
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                    </div>
                    <h5>
                        Problem
                    </h5>
                    <hr/>
                    <img src="assets/images/confusedOctopus.jpg" alt="confusedOctopus" height="200px" width="auto">
                    <br/>
                    <br/>
                    <p>
                        Your business needs stability and growth...
                    </p>
                    <p>
                        But you are too busy putting out daily fires.
                    </p>
                    <div>
                        <a href="#solution" class="page-scroll">
                            <img id="boxlogo" src="assets/images/box.png" alt="box" height="50px" width="auto">
                            <br/>
                            <span class="glyphicon glyphicon-chevron-down animated"></span>
                        </a>
                    </div>
                </div>
            </section>


<!-- SOLUTION SECTION -->
                
            <section class="container content-section center">
                    <div id="solution">
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                    </div>
                    <h5>
                        Solution
                    </h5>
                    <hr/>
                    <img src="assets/images/focusedOctopus.jpg" alt="focusedOctopus" height="200px" width="auto">
                    <br/>
                    <br/>
                    <p>
                        Automate your business...
                    </p>         
                    <p>
                        And <strong>focus</strong> on the things that you do best.
                    </p>
                    <br/>
                    <div>
                        <a href="#services" class="page-scroll">
                            <img id="boxlogo" src="assets/images/box.png" alt="box" height="50px" width="auto">
                            <br/>
                            <span class="glyphicon glyphicon-chevron-down animated"></span>
                        </a>
                    </div>
            </section>

<!-- HOW WE HELP SECTION -->

            <section class="container content-section center">
                <div id="services">
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                </div>
                <h5>
                    We can help you...
                </h5>
                <hr/>
                <!-- Services ROW -->                    
                <div class="row">
                    <div class="col-sm-4">
                        <h6>
                            <strong>
                                Reach the hearts of your customers
                            </strong>
                        </h6>
                        <a href="reach.html" target="_blank">
                            <div>
                                <img src="assets/images/boxitREACH.jpg" alt="boxitREACH_art" height="120px" width="auto">
                            </div>
                            <div>
                                <p>
                                Increase your customer base<br/>
                                <strong>Make your customers happy</strong><br/>
                                Increase customer retention 
                                </p>
                            </div>
                            <br/>
                            <button class="btn btn-primary">
                                Learn more
                            </button>
                            <hr/>
                            <br/>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <h6>
                        <strong>
                           Make intelligent financial decisions
                        </strong>
                        </h6>
                        <a href="analytics.html" target="_blank">
                            <div>
                                <img src="assets/images/boxitANALYTICS.jpg" alt="boxitANALYTICS_art" height="120px" width="auto">
                            </div>
                            <div>
                                <p>
                                   <strong>Maximize your cashflow</strong><br/>
                                   Achieve stability<br/>
                                   Invest in growth
                                </p>
                            </div>
                            <br/>
                            <button class="btn btn-primary">
                                Learn more
                            </button>
                            <hr/>
                            <br/>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <h6>
                            <strong>
                                Automate &amp; become unstoppable
                            </strong>
                        </h6>
                        <a href="engine.html" target="_blank">
                            <div>
                                <img src="assets/images/boxitENGINE.jpg" alt="boxitENGINE" height="120px" width="auto">
                            </div>
                            <div>
                                <p>
                                   Boost employee productivity<br/>
                                   <strong>Automate payroll</strong><br/>
                                   Secure &amp; organize everything digital
                                </p>
                            </div>
                            <br/>
                            <button class="btn btn-primary">
                                Learn more
                            </button>
                            <hr/>
                            <br/>
                        </a>
                    </div>
                </div>
                <div>
                    <a href="#successStories" class="page-scroll">
                        <img id="boxlogo" src="assets/images/box.png" alt="box" height="50px" width="auto">
                        <br/>
                        <span class="glyphicon glyphicon-chevron-down animated"></span>
                    </a>
                </div>
            </section>

<!-- Successful Customer -->
            <section class="container content-section">
                <div id="successStories">
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                </div>
                <h5 class="center">
                    Success Stories
                </h5>
                <hr/>
                <div class="row">
                    <div class="col-sm-1">
                    </div>
                    <div class="col-sm-6">
                        <a href="http://aehservice.com/" target="_blank">
                            <h4>
                                Helping hard work pay off
                            </h4>
                        </a>
                        <hr/>
                        <p class="smallP">                            
                            Clay Haynes, a father, husband, and war-veteran, owns and operates AEH Inc., an HVAC &amp; electricity company based in the state of Washington. With help from the BoxIT team, <strong>Clay ramped-up revenues to $1.26 million in AEH's first year</strong>. Today, Clay continues to achieve success with stability &amp; growth.
                            <br/><br/>
                            <a href="https://medium.com/@BoxIT_Services/helping-hard-work-payoff-ea9fdf55fe03" target="_blank">
                                <strong>
                                    Read the rest of the story.
                                </strong>
                            </a>
                        </p>
                    </div>
                    <div class="col-sm-1">
                    </div>
                    <div class="col-sm-3">
                        <img src="assets/images/clay_aeh2.jpg" alt="AEH_img" height="200" width="auto">
                    </div>
                    <div class="col-sm-1">
                    </div>
                    
                </div>
                <br/>
                <div class="center">
                    <h6>
                        "The BoxIT team is there when I need them. They listen and believe in me. My dreams are becoming a reality."
                    </h6>
                    <footer><p class="smallP">- Clay Haynes. Owner of AEH, Inc</p></footer>
                </div>
                <hr/>
                <div class="center">
                    <strong>
                        <a target="_blank" href="http://goo.gl/forms/amLZ7gJhlu">
                            <p class="smallP">
                                Apply for a job at AEH, Inc
                            </p>
                        </a>
                    </strong>
                </div>
                <br/>
                <div class="center">
                    <a href="#pricing" class="page-scroll">
                        <img id="boxlogo" src="assets/images/box.png" alt="box" height="50px" width="auto">
                        <br/>
                        <span class="glyphicon glyphicon-chevron-down animated"></span>
                    </a>
                </div>
            </section>

<!-- Pricing Model -->
            <section class="container content-section center">
                <div id="pricing">                    
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                </div>
                <h5>Choose your plan</h5>
                <hr>
                <div class="row">
                    <div class="col-sm-4">
                        <img src="assets/images/start.png" alt="start" height="60px" width="auto">
                        <br/>
                        <img src="assets/images/sun3.png" alt="moonlight" height="80px" width="auto">
                        <br/>
                        <h5>
                            <strong>
                               $19.99
                            </strong>
                        </h5>
                        <h6>(ONE-TIME CHARGE)</h6>
                        <p class="smallP">Identify opportunities for cashflow growth.</p>
                        <p class="smallP">Secure &amp; organize everything digital.</p>
                        <br/>
                    <!-- STRIPE: $19.99 -->
                        <form id="payment-form" method="POST" action="./buyStart.php">
                        <span class="payment-errors"></span>
                          <script
                            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                            data-key="<?php echo $stripe['publishable_key']; ?>"
                            data-amount="1999"
                            data-name="Sign up"
                            data-description="BoxIT Start ($19.99)">
                          </script>
                        </form>
                    </div>

                    <div class="col-sm-4">
                        <img src="assets/images/moonlight.png" alt="moonlight" height="60px" width="auto">
                        <br/>
                        <img src="assets/images/moon3.png" alt="moonlight" height="80px" width="auto">
                        <br/>
                        <h5>
                            <strong>
                               $99.99
                            </strong>
                        </h5>
                        <h6>(PER MONTH)</h6>
                        <p class="smallP">
                            We'll handle your marketing, finance, operations, to let you focus on what you do best.
                        </p>
                        <br/>
                    <!-- STRIPE: $99.99 -->
                        <form id="payment-form" method="POST" action="./buyMoonlight.php">
                        <span class="payment-errors"></span>
                          <script
                            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                            data-key="<?php echo $stripe['publishable_key']; ?>"
                            data-amount="9999"
                            data-name="Sign up"
                            data-description="BoxIT Start ($99.99)">
                          </script>
                        </form>
                    </div>

                    <div class="col-sm-4">
                        <img src="assets/images/rocket.png" alt="rocket" height="60px" width="auto">
                        <br/>
                        <img src="assets/images/rocket3.png" alt="rocket" height="80px" width="auto">
                        <br/>
                        <h5>
                           <strong>
                               CUSTOM
                            </strong>
                        </h5>
                        <h6>
                            (As you'd like it)
                        </h6>
                        <p class="smallP">
                            Convert your business into a growth machine. We help you through the entire transformation.
                        </p>
                    <!-- CONTACT SALES BUTTON -->
                    <br/>
                    <a href="">
                        <button class="btn btn-primary">
                                Contact Sales                                
                        </button>
                    </a>
                    </div>
                </div>
                <br/>
                <div class="center">
                    <a href="#call" class="page-scroll">
                        <img id="boxlogo" src="assets/images/box.png" alt="box" height="50px" width="auto">
                        <br/>
                        <span class="glyphicon glyphicon-chevron-down animated"></span>
                    </a>
                </div>
            </section>
            <section id="call" class="container content-section center">
                <h4>
                    <a class="page-scroll" href="tel:[(888)289-6385]">
                        <strong>
                            (888) 289-6385
                        </strong>
                    </a>
                </h4>
                <br/>
                <br/>
                <div class="center">
                    <a href="#team" class="page-scroll">
                        <img id="boxlogo" src="assets/images/box.png" alt="box" height="50px" width="auto">
                        <br/>
                        <span class="glyphicon glyphicon-chevron-down animated"></span>
                    </a>
                </div>
            </section>
<!-- BoxIT Team -->
            <section class="container content-section center">
                <div id="team">
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                </div>
                <h5>
                    Team
                </h5>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <div>
                            <img src="assets/people/dwight.jpg" alt="dwight" height="90px" width="auto">
                        </div>
                        <br/>
                        <h5>Dwight <strong>DeBacker</strong></h5>
                        <h6>
                            CEO
                        </h6>
                    </div>
                    <div class="col-sm-3">
                        <div>
                            <img src="assets/people/blake.jpg" alt="blake" height="90px" width="auto">
                        </div>
                        <br/>
                        <h5>Blake <strong>Rogers</strong></h5>
                        <h6>
                            CIO
                        </h6>
                    </div>
                    <div class="col-sm-3">
                        <div>
                            <img src="assets/people/william.jpg" alt="william" height="90px" width="auto">
                        </div>
                        <br/>
                        <h5>William <strong>Dembinski</strong></h5>
                        <h6>
                            ENGINEERING
                        </h6>
                    </div>
                    <div class="col-sm-3">
                        <div>
                            <img src="assets/people/david.jpg" alt="rocket" height="90px" width="auto">
                        </div>
                        <br/>
                        <h5>David <strong>Campos</strong></h5>
                        <h6>
                            SPECIAL PROJECTS
                        </h6>
                    </div>
                    <div class="col-sm-3">
                        <div>
                            <img src="assets/people/paul.jpg" alt="paul" height="90px" width="auto">
                        </div>
                        <br/>
                        <h5>Paul <strong>Robinson</strong></h5>
                        <h6>
                            CFO
                        </h6>
                    </div>
                    <div class="col-sm-3">
                        <div>
                            <img src="assets/people/nathan.jpg" alt="rocket" height="90px" width="auto">
                        </div>
                        <br/>
                        <h5>Nathan <strong>Fritter</strong></h5>
                        <h6>
                            Operations
                        </h6>
                    </div>
                    <div class="col-sm-3">
                        <div>
                            <img src="assets/people/mychael.jpg" alt="rocket" height="90px" width="auto">
                        </div>
                        <br/>
                        <h5>Sandra <strong>Williams</strong></h5>
                        <h6>
                            Documentation
                        </h6>
                    </div>
                    <div class="col-sm-3">
                        <div>
                            <img src="assets/people/jordan.jpg" alt="rocket" height="90px" width="auto">
                        </div>
                        <br/>
                        <h5>Jordan <strong>Stitt</strong></h5>
                        <h6>
                            SALES
                        </h6>
                    </div>
                </div>
                    <div class="center">
                        <strong>
                            <a target="_blank" href="https://docs.google.com/forms/d/1YtuqXpqsl60eGj175EGTgvwOYiHKKuhUa_DlTcUail4/viewform?usp=send_form">
                                <h3>
                                    Join our team!
                                </h3>
                            </a>           
                        </strong>
                    </div>
                    <br/>
                    <div class="center">
                        <a href="#footerMain" class="page-scroll">
                            <img id="boxlogo" src="assets/images/box.png" alt="box" height="50px" width="auto">
                            <br/>
                            <span class="glyphicon glyphicon-chevron-down animated"></span>
                        </a>
                    </div>
            </section>


<!-- Back to top section -->
            <section id="bottom" class="container content-section center">
                <a href="#page-top" class="page-scroll animated">Back to top</a>
            </section>

<!-- say hi section -->
    <hr/>
    <br/>
    <br/>
    <section class="center">
        <h6>
            Say hi!
        </h6>
         <a href="" target="_blank">
         <img src="assets/icons/fbIcon.png" alt="Facebook" height="42" width="42">
         </a> 

         <a href="" target="_blank">
         <img src="assets/icons/inIcon.png" alt="LinkedIn" height="42" width="42">
         </a>

          <a href="" target="_blank">
         <img src="assets/icons/twIcon.png" alt="Twitter" height="42" width="42">
         </a> 

          <a href="" target="_blank">
         <img src="assets/icons/mIcon.png" alt="Medium" height="35" width="35">
         </a>  
    </section>
    <br/>

<!-- Footer Section -->
		<footer id="footerMain">
			<div class="row center">
                <div class="col-sm-2">
                    <!--Empty div for nice layout-->
                </div>
                <div class="col-sm-2">
                        <h5>
                            Services
                        </h5>
                        <a href="reach.html" target="_blank">
                            <h6>
                                Reach
                            </h6>
                        </a>
                        <a href="analytics.html" target="_blank">
                            <h6>
                                Analytics
                            </h6>
                        </a>
                        <a href="engine.html" target="_blank">
                            <h6>
                                Engine
                            </h6>
                        </a>
                </div>
                <div class="col-sm-2">
                    <a href="careers.html">
                        <h5>
                            Careers
                        </h5>
                    </a>
                </div>
                <div class="col-sm-2">
                    <a href="company.html">
                        <h5>
                            Company
                        </h5>
                    </a>
                </div>
                <div class="col-sm-2">
                    <a href="investors.html">
                        <h5>
                            Investors
                        </h5>
                    </a>
                </div>
            </div>
            <br/>
            <div class="center">
                <h5>
                    (888) 289-6385
                </h5>
            </div>
            <br/>
            <div>
				<h6 class="center">
					&copy; 2015 <a href="header.php">BOX <img id="boxlogo" src="assets/images/box.png" alt="box" height="30px" width="auto"> IT, LLC</a>. All Rights Reserved.
				</h6>
			</div>
            <br/><br/><br/>
		</footer>
<!-- /.container-->


    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

</body>
</html>
