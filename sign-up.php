<?php 
include_once "_main.php";
include_once "$DOCUMENT_ROOT/login_info/sign_up_logic.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Asian Tours, Tours to Malaysia, Tour operator Malaysia, Holiday to Malaysia and asia,Holiday in Malaysia,Travel in Malaysia,Holiday to malaysia all inclusive,malaysia holiday,Luxury holiday,Visit in malaysia,Tour malaysia packages,Beach malaysia,Best time to visiy malaysia,Accommodation in malaysia,malaysia travel,travelyamu malaysia,travelyamu,yamu,travel,malaysia travel,Island Holidays,Tourrism malaysia,Best in malaysia,Things to do in malaysia,Package malaysia,malaysia Holidays,Tropical island,Best at malaysia,Best ay malaysia,Things do in malaysia,Malaysia tourism map,Malaysia tour guide, travel yamu in malaysia, travel yamu, malaysia"/>
<meta name="description" content="Travelyamu.com is an Innovative new online platform empowers travel agents to search and discover amazing destinations based on their passions, it has been owned and operated by Malaysian-based , the Asni Tours & Travels Group.">
<meta name="author" content="Isuru Eshan, Aslam">
<title>Travel Yamu - Travelyamu.com</title>
<link rel="shortcut icon" href="img/travelyamu/t_fevi.png" type="image/x-icon"><link rel="apple-touch-icon" type="image/x-icon" href="img/travelyamu/t_fevi.png"><link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/travelyamu/t_fevi.png"><link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/travelyamu/t_fevi.png"><link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/travelyamu/t_fevi.png">
<link href="https://fonts.googleapis.com/css?family=Gochi+Hand|Lato:300,400|Montserrat:400,400i,700,700i" rel="stylesheet">
<link href="css/base.css" rel="stylesheet">
<link href="css/skins/square/grey.css" rel="stylesheet">
<link href="css/ion.rangeSlider.css" rel="stylesheet">
<link href="css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
<link href="css/slider-pro.min.css" rel="stylesheet">
<link href="css/date_time_picker.css" rel="stylesheet">
<?php include_once "_head.php";?>

</head>
<body>
<!--<div id="preloader"><div class="sk-spinner sk-spinner-wave">
        <div class="sk-rect1"></div><div class="sk-rect2"></div><div class="sk-rect3"></div><div class="sk-rect4"></div><div class="sk-rect5">
            
        </div>
    
<img src="img/gif/location.gif" style="width: 50px"/>
</div>
            
    
</div>-->
<div class="layer"></div>

<header style="">
<?php include_once "$DOCUMENT_ROOT/headers/menu/top-menu.php";?>  
</header>

<main style="border-bottom:none">
    
    <section id="hero" class="" style="    background-image: none;background: #ffffff;">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                	<div id="login">
                            <div class="text-center"><img src="img/travelyamu/travel_yamu.png" alt="Image" data-retina="true" style="width:117px"></div>
                            <center><h4>USER SIGN UP</h4></center>
                            <p style="font-size: 10px;margin-top: 24px;"><b>Sign Up With Your E-Mail Id.</b></p>
                            <hr style="margin-top: -12px;">
                            <form action = "" class="login-form" method = "post">
                                <div class="form-group">
                                    <label>E-Mail ID</label>
                                    <input type="text" class=" form-control " name = "username" placeholder="Username" autocomplete="off" required="" >
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name = "password" placeholder="Password" autocomplete="off" required="" >
                                   
                                </div>
                                   <div class="form-group">
                                    <label>Confirm-Password</label>
                                    <input type="password" class="form-control" name = "con-password" placeholder="confirm Password" autocomplete="off" required="" >
                                   
                                </div>
                               <p style="font-size: 8px;margin-top: 24px;font-weight: 600"><input type="checkbox"/>&nbsp;&nbsp;
                                   Subscribes for tours,attractions,deals and discounts.</p>
                                <input type="submit" href="#" class="btn_1" value="Sign Up"/>
                                <div style = "font-size:14px; color:#2b84a7; font-weight: 700;margin-top:10px"><?php echo $error; ?></div>
                                
                                <hr>
                                <p style="font-size: 10px;margin-top: 24px;"><b>Already have an account!</b></p>
                                <a href="http://www.travelyamu.com/login" class="btn_1 outline" style="padding: 7px 20px;">Sign In</a>
                            </form>
                           
                        </div>
                </div>
            </div>
        </div>
    </section>
	</main>






<?php include_once "$DOCUMENT_ROOT/headers/menu/footer.php";?>


<div id="toTop"></div>
<script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/common_scripts_min.js"></script>
	<script src="js/functions.js"></script>
        <!-- Specific scripts -->
	<script src="js/icheck.js"></script>
	<!-- Date and time pickers -->
	<script src="js/jquery.sliderPro.min.js"></script>
	<!-- Date and time pickers -->
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/bootstrap-timepicker.js"></script>

	<script src="js/infobox.js"></script>
        <script src="js/theia-sticky-sidebar.js"></script>
	<script>
		jQuery('#sidebar').theiaStickySidebar({
			additionalMarginTop: 80
		});
	</script>
      
        
</body>
</html>