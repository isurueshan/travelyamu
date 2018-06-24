<?php include_once "_main.php";
$actual_link=$_SESSION['actual_link'];

//echo "<pre>";
//
//echo "<br><br><bR><br><br>";
//print_r($_GET);
//echo "</pre>";

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

<main>
<div id="position">
<br>

</div>


<div class="container margin_60">
<?php
$product_code=encrypt_decrypt('decrypt', $_GET['c']);
$title=encrypt_decrypt('decrypt', $_GET['tn']);
$location=encrypt_decrypt('decrypt', $_GET['lc']);
$hours=encrypt_decrypt('decrypt', $_GET['dr']);
$id=$_GET['id'];

$get_2_image=get_2_image($product_code);

$img1=$get_2_image[0];
$img2=$get_2_image[1];
$img1_name=$get_2_image[2];
$img2_name=$get_2_image[3];

$get_activity_sum_n_deyails=get_activity_sum_n_deyails($product_code);


?>
<div class="row">
<div class="col-md-8 col-sm-8">
<h3 style="font-weight:700"><?php echo $title;?></h3>
<div class="row">
<div class="col-md-8 col-sm-8">
<span><i class="icon-location-outline"></i> <strong>Location:</strong> <?php echo "$location";?></span>
</div>
</div>
<div class="row">
<div class="col-md-8 col-sm-8">
<span class="rating" style=""><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small></small></span>
<span style=""><strong>TOUR CODE : <?php echo $product_code;?></strong></span>
<span style=""><i class=" icon-back-in-time"></i><strong> Duration:</strong> <?php echo "$hours";?></span>
</div>
</div>



<hr>
</div>

<div class="col-md-8" id="single_tour_desc">
<?php include_once "$DOCUMENT_ROOT/page_includes/confirm-image-slider.php";?>
<hr>
<div class="row">
<?php include_once "$DOCUMENT_ROOT/page_includes/confirm-overview.php";?>

</div>



<!--<hr>-->
<div class="row">
<div class="col-md-3">
<!--<h3>Reviews </h3>
<a href="#" class="btn_1 add_bottom_30" data-toggle="modal" data-target="#myReview">Leave a review</a>-->
</div>
<div class="col-md-9">
<?php //include_once "$DOCUMENT_ROOT/page_includes/confirm-reviews.php";?>
</div>
</div>
</div>
<!--End  single_tour_desc-->

<aside class="col-md-4" id="sidebar">

<?php include_once "$DOCUMENT_ROOT/page_includes/confirm-booking-form.php";?>
</aside>
</div>
<?php include_once "$DOCUMENT_ROOT/page_includes/top-tour-bottom.php";?>



</div>


<div id="overlay"></div>


</main>

<?php include_once "$DOCUMENT_ROOT/headers/menu/footer.php";?>
<!-- Modal Review -->
<?php include_once "$DOCUMENT_ROOT/page_includes/confirm-page-review-model.php";?>
<!-- End modal review -->

<div id="toTop"></div><!-- Back to top button -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>

<!-- Specific scripts -->
<script src="js/icheck.js"></script>
<script>
$('input').iCheck({
checkboxClass: 'icheckbox_square-grey',
radioClass: 'iradio_square-grey'
});
</script>
<!-- Date and time pickers -->
<script src="js/jquery.sliderPro.min.js"></script>
<script type="text/javascript">
$(document).ready(function ($) {
$('#Img_carousel').sliderPro({
width: 960,
height: 500,
fade: true,
arrows: true,
buttons: false,
fullScreen: false,
smallSize: 500,
startSlide: 0,
mediumSize: 1000,
largeSize: 3000,
thumbnailArrows: true,
autoplay: false
});
});
</script>

<!-- Date and time pickers -->
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/bootstrap-timepicker.js"></script>
<script>
//$('input.date-pick').datepicker('setDate', 'today');

$('input.date-pick').datepicker({
    format: 'mm-dd-yyyy',
    startDate: '+2d'
});

$('input.time-pick').timepicker({
minuteStep: 15,
showInpunts: false
})
</script>

<!--Review modal validation -->
<script src="assets/validate.js"></script>

<!-- Map -->
<script src="http://maps.googleapis.com/maps/api/js"></script>


<script src="js/map.js"></script>
<script src="js/infobox.js"></script>

<!-- Fixed sidebar -->
<script src="js/theia-sticky-sidebar.js"></script>
<script>
jQuery('#sidebar').theiaStickySidebar({
additionalMarginTop: 80
});
</script>
</body>
</html>