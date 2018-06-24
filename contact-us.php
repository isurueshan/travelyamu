<?php 
$DOCUMENT_ROOT=$_SERVER['DOCUMENT_ROOT'];
include_once "$DOCUMENT_ROOT/app_functions/travelyamu_function.php";
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
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js?ver=1.12.3'></script>
<link href="flex_search/jquery.flexdatalist.min.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="img/travelyamu/t_fevi.png" type="image/x-icon"><link rel="apple-touch-icon" type="image/x-icon" href="img/travelyamu/t_fevi.png"><link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/travelyamu/t_fevi.png"><link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/travelyamu/t_fevi.png"><link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/travelyamu/t_fevi.png">
<link href="https://fonts.googleapis.com/css?family=Gochi+Hand|Lato:300,400|Montserrat:400,400i,700,700i" rel="stylesheet">
<link href="css/base.css" rel="stylesheet">
<link href="css/skins/square/grey.css" rel="stylesheet">
<link href="css/ion.rangeSlider.css" rel="stylesheet">
<link href="css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
<style>
/*            #load{
width:100%;
height:100%;
position:fixed;
z-index:9999;
background:url("http://travelagents.travelyamu.com/img/ie_loader.gif") no-repeat center center rgba(0,0,0,0.70)
}*/
.twotabsearchtextboxes {background: #FFF;width: 100%;border: none;box-shadow: none;color: #333;font-size: 14px;height: 35px;padding: 1px 0 0 28px;outline: none;font-weight: bold;}
</style>
<?php include_once "_head.php"; ?>

</head>
<body>
<!--        <div id="load"></div>-->

<div class="layer"></div>

<header style="">
<?php include_once "$DOCUMENT_ROOT/headers/menu/top-menu.php"; ?>
</header>



<div id="position">
<br>

</div>

<main>

<div class="container margin_60">
<div class="main_title">
<h2><b>Contact Form</b></h2><br>

</div>


<div class="row">
<div class="col-md-12 col-sm-12">
<div class="form_title" style="padding-left: 0px;">
                    <h5><strong></strong><b>Please contact us by completing this form and we will ensure that your enquiry is responded as soon as possible. </b></h5>
                    <br>
                    <p>

                        </p>
                </div>
                <div class="">
                    <div id="message-contact">
                        <?php 
                      $name_contact=$_POST['name_contact'];
                        $lastname_contact=$_POST['lastname_contact'];
                        $email_contact=$_POST['email_contact'];
                        $phone_contact=$_POST['phone_contact'];
                        $message_contact=$_POST['message_contact'];
                      $websitename="travelyamu.com";
                        if(empty($_POST['name_contact'])){ }
                        elseif(empty($_POST['lastname_contact'])){ }
                        elseif(empty($_POST['email_contact'])){ }
                         elseif(empty($_POST['phone_contact'])){ }
                         elseif(empty($_POST['message_contact'])){ }
                        else {
contact_us_email_send($name_contact,$lastname_contact,$email_contact,$phone_contact,$message_contact,$websitename);
echo "<h2 style='font-weight: 700;color: #de0c0c;'>Enquiry Has Been Submitted!</h2><br>";
echo '<script type="text/javascript">
        window.location.href="http://www.travelyamu.com/home";
  </script>';
exit();

                            }


                        ?>
                    </div>
<form enctype="multipart/form-data" action="<?php print $_SERVER['PHP_SELF']?>" method="post">
<div class="row">
<div class="col-md-6 col-sm-6">
<div class="form-group">
<label>First Name</label>
<input type="text" class="form-control" id="name_contact" name="name_contact" placeholder="Enter Name" required="">
</div>
</div>
<div class="col-md-6 col-sm-6">
<div class="form-group">
<label>Last Name</label>
<input type="text" class="form-control" id="lastname_contact" name="lastname_contact" placeholder="Enter Last Name" required="">
</div>
</div>
</div>
<!-- End row -->
<div class="row">
<div class="col-md-6 col-sm-6">
<div class="form-group">
<label>Email</label>
<input type="email" id="email_contact" name="email_contact" class="form-control" placeholder="Enter Email" required="">
</div>
</div>
<div class="col-md-6 col-sm-6">
<div class="form-group">
<label>Phone</label>
<input type="text" id="phone_contact" name="phone_contact" class="form-control" placeholder="+60 143429539" required="">
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label>Message</label>
<textarea rows="5" id="message_contact" name="message_contact" class="form-control" placeholder="Write your message" style="height:200px;" required=""></textarea>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">

<input type="submit" value="Submit" class="btn_1" id="submit-contact">
</div>
</div>

</form>
</div>
</div>
</div>
<div class="row">
<br>
<h2><b>Travel Yamu  Contact Details</b> </h2><Br>
<div class="col-md-6 col-sm-4">
<h4 style="color: #ff7702;"><b >Malaysia: </b></h4>
                <p>Block B3-1-27,Jalan 1/152, Taman OUG Parklane, 58200, 
                    Kuala Lumpur,Malaysia.
                    <Br><b>Aslam :</b><a href="https://api.whatsapp.com/send?phone=60196969325" target="_blank"><img src="img/travelyamu/whatsapp.png" style="    width: 66px;"/></a>
<b>Niza  :</b><a href="https://api.whatsapp.com/send?phone=60107773860"  target="_blank"><img src="img/travelyamu/whatsapp.png" style="    width: 66px;"/></a>
                    <br>
<b>E-Mail:</b> customercare@travelyamu.com</p>


        </div>
<div class="col-md-6 col-sm-4">
<h4 style="color: #ff7702;"><b>Sri Lanka: </b></h4>
<p>No 30,Deanston Place, Colombo 03, Sri Lanka.<br>
 <b>Deva :</b><a href="https://api.whatsapp.com/send?phone=94774048591" target="_blank"><img src="img/travelyamu/whatsapp.png" style="    width: 66px;"/></a>
                <Br><b>E-Mail:</b> customercare@travelyamu.com</p>


        </div>


<div class="col-md-6 col-sm-4">
<h4 style="color: #ff7702;"><b>Singapore: </b></h4>
                <p>471 B,Upper Serangoon Cresent #02-368, Singapore
                    <Br><b>Aslam :</b><a href="https://api.whatsapp.com/send?phone=60196969325" target="_blank"><img src="img/travelyamu/whatsapp.png" style="    width: 66px;"/></a>
                <Br><b>E-Mail:</b> customercare@travelyamu.com</p>


        </div>
</div>
<div class="row">
<br><br>
<h4><p>Thank you for your interest, Travel Yamu Customer Care Team. </p></h4>
</div>

<div class="row">
<p><strong><h4>Our Partners:</h4></strong></p>
<div class="col-md-3">
<a href="http://www.travelyamu.com">
<img src="img/careers_travelyamu.png" style="min-width: 72%; max-width: 72%;"/>
</a>
<br>
</div>


<div class="col-md-3">
<a href="http://www.asiaadvisor.net">
<img src="img/careers_asiaadvisor.png" style="min-width: 72%; max-width: 72%;padding-top: 16px;"/><Br>
</a>
</div>


<div class="col-md-3">
<a href="http://www.itours.com.my">
<img src="img/careers_itours.png" style="min-width: 72%; max-width: 72%;"/><Br>
</a>
</div>
<div class="col-md-3">
<a href="http://www.asnitours.com">
<img src="img/careers_asni.png" style="min-width: 72%; max-width: 72%;"/><bR>
</a>
</div>
</div>
<div class="row">
<div class="col-md-3">
<a href="http://www.otnworld.com">
<img src="img/careers_otn.png" style="min-width: 72%; max-width: 72%;    margin-top: 14px;"/>
</a>
</div>
</div>
<hr>
</div>

</main>
<!-- End main -->

<?php include_once "$DOCUMENT_ROOT/headers/menu/footer.php"; ?>

<div id="toTop"></div><!-- Back to top button -->
<!-- Common scripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>

<!--        <script src="flex_search/jquery.flexdatalist.min.js"></script>-->
<!-- Specific scripts -->
<script src="js/icheck.js"></script>
<script>
$('input').iCheck({
checkboxClass: 'icheckbox_square-grey',
radioClass: 'iradio_square-grey'
});
</script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/bootstrap-timepicker.js"></script>
<script>
$('input.date-pick').datepicker('setDate', '');
$('input.time-pick').timepicker({
minuteStep: 15,
showInpunts: false
});
</script>
<!-- Specific scripts -->
<script src="js/morphext.min.js"></script>

<script type="text/javascript">
(function () {
var options = {
facebook: "154353251916431", // Facebook page ID
call_to_action: "Message us", // Call to action
position: "right", // Position may be 'right' or 'left'
};
var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
})();
</script>
</body>
</html>