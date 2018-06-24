<?php include_once "_main.php";

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
    

    
	<section id="hero">
		<div class="intro_title">
                    <h3 class="animated fadeInDown">Affordable <strong id="js-rotating" style="background: #ff862fab;">TRANSFERS,TICKETS,PACKAGES,TOURS</strong></h3>
                    <p class="animated fadeInDown"><strong id="js-rotating" style="">“Take only memories, leave only footprints”</strong></p>

		</div>

<div id="search_bar_container">
<form method="GET" action="products-search">
<div class="container">
<div class="search_bar">

<div class="nav-searchfield-outer" style="border-radius: 11px;">
<!--<input type="text" autocomplete="off" name="chained_relative" placeholder="Type your search terms ...." class="twotabsearchtextboxes flexdatalist">-->
    <!-- Place holder in jquery.flexdatalist.min.js line 190-->
<input type='text'
placeholder='Search for destinations, attractions and tours'
class='twotabsearchtextboxes flexdatalist'
data-relatives='#relative'
data-url='products_json.json'
data-search-in='["near_city","country"]'
data-visible-properties='["near_city","country"]'
data-group-by='prod_type'
data-selection-required='true'
data-focus-first-result='true'
data-min-length='0'
data-value-property='country'
data-text-property='{near_city}, {country}'
data-search-contain='true'
id='chained_relative'
name='chained_relative'>
</div>



<div class="nav-submit-button">

<button class="btn_1 green nav-submit-input" style="background: #ff862f;border-radius: 1px;height: 40px;border-top-right-radius: 11px;border-bottom-right-radius: 11px;"><i class="icon-search"></i>Search</button>
</div>
</div>

</div>
</form>
</div>
		
	</section>

<main>
<div class="container margin_60">

			<div class="main_title">
                            <h2>How It Works</h2>
				<p>
					
				</p>
			</div>

			<div class="row">

				<div class="col-md-4 wow zoomIn" data-wow-delay="0.2s">
					<div class="feature_home">
						<i class="icon_set_1_icon-42"></i>
						<h3><span></span> We Research</h3>
						<p>
						Our experts hundreds of offers each week to identify the once with true value. 	
						</p>
						
					</div>
				</div>

				<div class="col-md-4 wow zoomIn" data-wow-delay="0.4s">
					<div class="feature_home">
						<i class="i icon_set_1_icon-18"></i>
						<h3><span></span> We Recommend</h3>
						<p>
					We only choose the very best deals that can't be beaten on price and quality.
						</p>
						
					</div>
				</div>

				<div class="col-md-4 wow zoomIn" data-wow-delay="0.6s">
					<div class="feature_home">
						<i class=" icon_set_1_icon-20"></i>
						<h3><span> </span> Your Relax</h3>
						<p>
						Knowing you have got the best deal. Hand-picked and negotiated by our experts.	
						</p>
						
					</div>
				</div>

			</div>
    
		
    <hr>
    <?php include_once "$DOCUMENT_ROOT/page_includes/home-top-destination.php";?>
</div>
    
 
    
</main>
<?php include_once "$DOCUMENT_ROOT/headers/menu/footer.php";?>	

	<div id="toTop"></div><!-- Back to top button -->


 <!-- Common scripts -->

<script src="js/jquery-2.2.4.min.js"></script>

<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>
 <!-- Specific scripts -->
<script src="js/icheck.js"></script>

  <script src="flex_search/jquery.flexdatalist.min.js"></script>
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
})
  </script>
 <!-- Specific scripts -->
<script src="js/morphext.min.js"></script>

<script>
$("#js-rotating").Morphext({
    animation: "fadeIn", // Overrides default "bounceIn"
    separator: ",", // Overrides default ","
    speed: 2000, // Overrides default 2000
    complete: function () {
        // Overrides default empty function
    }
});
$('.flexdatalist').flexdatalist({
     searchContain: false,
     textProperty: '{near_city}, {country}',
     valueProperty: 'country',
     minLength: 0,
     focusFirstResult: true,
     selectionRequired: true,
     groupBy: 'prod_type',
     visibleProperties: ["near_city","country"],
     searchIn: ["near_city","country"],
     url: 'products_json.json',
     relatives: '#relative'
    

});

</script>
  </body>
</html>