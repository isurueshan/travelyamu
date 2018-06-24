<?php 
include_once "_main.php";
$actual_link=$_SESSION['actual_link'];
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
<link href="cart/style.css" type="text/css" rel="stylesheet" />
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
//<?php
//echo "<pre>";
//print_r($_SESSION);
//echo "</pre>";
//?>
</div>

<div class="container margin_60">
<div class="row">

<div class="col-md-8">


<div class="bs-wizard" style="width:100%">

<div class="col-xs-4 bs-wizard-step active">
<div class="text-center bs-wizard-stepnum">Cart</div>
<div class="progress">
<div class="progress-bar"></div>
</div>
<a href="#" class="bs-wizard-dot"></a>
</div>

<div class="col-xs-4 bs-wizard-step disabled">
<div class="text-center bs-wizard-stepnum">Payment</div>
<div class="progress">
<div class="progress-bar"></div>
</div>
<a href="#" class="bs-wizard-dot"></a>
</div>

<div class="col-xs-4 bs-wizard-step disabled">
<div class="text-center bs-wizard-stepnum">Voucher!</div>
<div class="progress">
<div class="progress-bar"></div>
</div>
<a href="#" class="bs-wizard-dot"></a>
</div>

</div>

</div>

</div>

<div class="row">
<div class="col-md-9">

<?php

$product_code=encrypt_decrypt('decrypt', $_GET['c']);

//echo "<pre>";



$get_sp_availability_tbl=get_sp_availability_tbl($product_code);

//print_r($get_sp_availability_tbl);
//echo "<pre>";

 //print_r($get_sp_availability_tbl);

$r=1;
foreach($get_sp_availability_tbl as $get_sp_availability_tbls){
    
$sp_unq_id=$get_sp_availability_tbls[0];
$available_name=$get_sp_availability_tbls[1];
$days=$get_sp_availability_tbls[2];
$start_date=$get_sp_availability_tbls[3];
$end_date=$get_sp_availability_tbls[4];
$pricing_name=$get_sp_availability_tbls[5];
$pricing_id=$get_sp_availability_tbls[6];
 

$no_of_adt=$_GET['adult'];
$no_of_chd=$_GET['child'];
$no_of_inf=$_GET['inf'];



if($no_of_adt>0)
{
    $adult="adult";
    $adt_rate=get_rate_pax($sp_unq_id,$pricing_id,$adult,$no_of_adt);
    $adt_rate_dsply="<span style='color:red'>*</span> USD ".get_rate_pax($sp_unq_id,$pricing_id,$adult,$no_of_adt);
    $tot_adt_rate=$adt_rate*$no_of_adt;
}
if($no_of_chd>0)
{
    $chd="child";
    $chd_rate=get_rate_pax($sp_unq_id,$pricing_id,$chd,$no_of_chd);
    $chd_rate_dsply="<span style='color:red'>*</span> USD ".get_rate_pax($sp_unq_id,$pricing_id,$chd,$no_of_chd);
    $tot_chd_rate=$chd_rate*$no_of_chd;
}
if($no_of_inf>0)
{
    $inf="infant";
    $inf_rate=get_rate_pax($sp_unq_id,$pricing_id,$inf,$no_of_inf);
    $inf_rate_dsply="<span style='color:red'>*</span> USD ".get_rate_pax($sp_unq_id,$pricing_id,$inf,$no_of_inf);
    $tot_inf_rate=$inf_rate*$no_of_inf;
}

$pax_tot=$tot_adt_rate+$tot_chd_rate+$tot_inf_rate;

//echo "</pre>";
?>

 <form id='myformses_<?php echo $r;?>' class='myformses' name='myformses'>


<table class="table table-striped add_bottom_30">
<thead>
<th colspan="3" style="background: #ff862f2e;font-size: 10px;color: #ff7702;">
This activity is popular! Don't miss out. Book now to gurantee your place.
</th>

</thead>
<tbody>
<tr>
<td>
<div class="thumb_cart" style="width: 93px;height: 71px;">
<img src="http://supplier.travelyamu.com/app_functions/pages_responses/<?php echo get_prdct_img($sp_unq_id);?>" alt="Image" style="width: 100%;height: 100%;">
</div>
<span class="item_cart">
<b><?php echo $available_name;?></b><hr>
<span><i class="icon-calendar-inv"></i> <?php echo $_GET['book_date'];?> &nbsp; <i class="icon-back-in-time"></i> 9:30AM &nbsp; <i class="icon-adult"></i> <?php echo $_GET['adult'];?> ADT <?php echo $adt_rate_dsply;?> &nbsp;<i class="icon-child"></i> <?php echo $_GET['child'];?> CHD <?php echo $chd_rate_dsply?> &nbsp;<i class="icon-user-2"></i> <?php echo $_GET['inf'];?> INF <?php echo $inf_rate_dsply?> &nbsp;</span>
<span></span>
</span>

</td>
<td>
    <input type="hidden" value="<?php echo $_GET['id'];?>" name="id"/>
    <input type="hidden" value="<?php echo $_GET['adult'];?>" name="adt"/>
    <input type="hidden" value="<?php echo $_GET['child'];?>" name="chd"/>
    <input type="hidden" value="<?php echo $_GET['inf'];?>" name="inf"/>
    <input type="hidden" value="<?php echo $_GET['book_date'];?>" name="book_date"/>
    <input type="hidden" name="item_code" value="<?php echo "$sp_unq_id";?>"/> 
    <input type="hidden" name="avb_name" value="<?php echo "$available_name";?>"/> 
    <input type="hidden" name="amt" value="<?php echo "$pax_tot";?>"/> 

<strong><?php echo "USD ".$pax_tot?></strong>
<button type="button" data-id='<?php echo $r;?>' id='book_now_btn2' class='btn_1 small book_now_btn2' style="background: #00759a;">Add To Cart</button>
</td>
<td class="options">

<!--<a href="#"><i class=" icon-basket-2"></i></a>-->
</td>

</tr>


</tbody>
<thead>
<th colspan="3" style="background: #e2ffe5;font-size: 10px;color: #0e712d;">
book without regrets cancel your activity for free anytime up <b style="color:#ff3f3fe6;font-size: 12px;"> - <?php 
echo get_cancel_date($_GET['book_date']);
?>
</b>
</th>

</thead>
</table>
<hr>
</form>

<?php

$r++;
}


   

?>

</div>
<!-- End col-md-8 -->

<aside class="col-md-3" id="sidebar">
<div class="theiaStickySidebar">
<div class="box_style_1">
<h3 class="inner" style="background:none">
<a class="btn_full_outline" href="<?php echo $actual_link;?>" style="color: #ffffff;;border: 1px solid #d4d4d4;background:#00759a;"><i class="icon-right"></i> Continue shopping</a>
</h3>

 
       <div id="loading_air_cell_book2" style="display:none"> 
    <center>
      <img src="img/gif/loading.gif" style="width:100px"/>  
    </center>
</div>
<div id="message-review2">
   
</div>

    <table id="message-review22" class="table table_summary">
<tbody>
    <?php 
    if(!empty($_SESSION["cart_products"])){
        $tot=0;
foreach ($_SESSION["cart_products"] as $cart_itm)
{
    $tot +=$cart_itm['amt'];
    ?>
<!--    <tr>
<td>
<?php echo $cart_itm['avb_name'];?>
</td>
<td class="text-right">
<?php echo $cart_itm['amt'];?>
</td>
</tr>-->
<?php
}?>
<tr class="total" style="font-size: 12px;color: black">
<td>
Total cost
</td>
<td class="text-right">
<?php echo "USD ".$tot;?>
</td>
</tr>
<?php
    }
    ?>
</tbody>
</table>



 
<!--<a class="btn_full" href="booking" style="background: #ffa603;">Check out</a>

<Center>
<a href="#" style="font-weight: 600;color: #007499;">Create an account</a> or <a href="#" style="font-weight: 600;color: #007499;">log in</a> for faster check out
<br>
<a class="" href="#" style="color: #007499;font-weight: 600;"> Frequently Ask Question <i class="icon-help"></i></a>
</center>-->

</div>


</div>


</aside>



</div>
<?php include_once "$DOCUMENT_ROOT/page_includes/top-tour-bottom.php";?>
</div>

</main>


<?php include_once "$DOCUMENT_ROOT/headers/menu/footer.php";?>


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
$('input.date-pick').datepicker('setDate', 'today');
$('input.time-pick').timepicker({
minuteStep: 15,
showInpunts: false
})
</script>

<!--Review modal validation -->
<script>
   $(document).ready(function () {

                $(".book_now_btn2").click(function (e) {

                    var r = $(this).attr("data-id");
                    var dataString = $('#myformses_' + r).serialize();
                    $('#loading_air_cell_book2').show();
                    $('#message-review2').hide();
                  
                    $.ajax({
                        type: 'POST',
                        url: 'cart/ajax_action.php',
                        data: dataString,
                        success: function (data) {
                            
                            $('#message-review2').html(data);
                            $('#loading_air_cell_book2').hide();
                            $('#message-review22').hide();
                            $('#message-review2').show();
                           

                        }
                    });


                });

            }); 
</script>

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