<?php
include_once "_main.php";
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
include_once "$DOCUMENT_ROOT/app_db/dbconfig.php";
$_SESSION['actual_link'] = $actual_link;

$cntry = $_GET['chained_relative'];
$cntry_like="%$cntry%";

$dest_cntry = $_GET['flexdatalist-chained_relative'];

if(empty($dest_cntry) && !empty($cntry)){
   $split_comma = $cntry;
}
else
{
$split_comma = split_comma($dest_cntry);
}
$desti_like = "%$split_comma%";
$desti_like_cntry = "$split_comma";

$get_prd_typs = $_GET['prod_type'];
$edited_prd_type = str_replace("~", "&", "$get_prd_typs");

$get_prod_type = "%$edited_prd_type%";

if($cntry==""){
    $get_cities_by_country=get_cities_by_country($desti_like); 
    $display_cntry=$desti_like_cntry;
}
else
{
    $display_cntry=$cntry;
$get_cities_by_country=get_cities_by_country($cntry_like);
}

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
                background:url("http://www.travelyamu.com/img/ie_loader.gif") no-repeat center center rgba(0,0,0,0.70)
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
                <p>
                <h3 style="font-size: 18px;"><strong><i>Hooray, You've found <?php if (!empty($get_prd_typs)) {
                echo sizeof(get_all_prdct_by_prd_typ($desti_like, $get_prod_type));
            }
            else {
                echo sizeof(get_all_prodycts($desti_like));
            }
            ?> Tour(s) At <?php echo $dest_cntry . " ";
                    if (!empty($get_prd_typs)) {
                        echo "for product type <span style='color:#e64b3b;font-size: 15px;'>$edited_prd_type</span>";
                    } ?> !</i></strong></h3>
                <h5><a href="home" style="color: #0060ad;font-weight: 700;">Go Back</a></h5>
                </p>
                <div class="row">
<?php include_once "$DOCUMENT_ROOT/page_includes/products-search-left-bar.php"; ?>


                    <div class="col-lg-9 col-md-8">

                        <div id="tools">
                            <form method="GET" action="products-search?chained_relative=&flexdatalist-chained_relative=<?php echo $_GET['sort_country'];?>">
                            <div class="row">
                           <?php 
                           if($display_cntry=="Malaysia"){
                               $selected1="selected";
                           }
                          else if($display_cntry=="Sri Lanka"){
                               $selected2="selected";
                           }
                            else if($display_cntry=="Singapore"){
                               $selected3="selected";
                           }
                            else if($display_cntry=="Indonesia"){
                               $selected4="selected";
                           }
                        else
                        {
                           $selected="selected"; 
                        }
                           ?>
                                
                                <div class="col-md-3 col-sm-3 col-xs-6">
<div class="styled-select-filters">
    <select name="chained_relative" id="sort_price" class="country" required>
                        <option value="" <?php echo $selected;?>>-- Select Country--</option>
                         <option value="Malaysia" <?php echo $selected1;?>>Malaysia</option>
                         <option value="Sri Lanka" <?php echo $selected2;?>>Sri Lanka</option>
                         <option value="Singapore" <?php echo $selected3;?>>Singapore</option>
                         <option value="Indonesia" <?php echo $selected4;?>>Indonesia</option>
                        
                </select>
    
        </div>
                                </div>
    <div class="col-md-4 col-sm-4 col-xs-7">
<div class="styled-select-filters">
                <select name="flexdatalist-chained_relative" id="sort_price" class="state">
                        <option value="" selected="">--All Cities--</option>
                        <?php if(!empty($dest_cntry)){?>
                        <option value="<?php echo $dest_cntry;?>" selected=""><?php echo $dest_cntry;?></option>
                        <?php }?>
                        <?php foreach ($get_cities_by_country as $get_cities_by_countrys){?>
                         <option value="<?php echo $get_cities_by_countrys['0'];?>"><?php echo $get_cities_by_countrys['0'];?></option>
                        <?php }?>
                </select>

        </div>
        <img src="img/loading_gif2.gif" id="loding1" style="width:250px"></img>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-6">

                                    <button type="submit" class="btn_1 green nav-submit-input" style="background: #ff862f;border-radius: 1px;"><i class="icon-search"></i>Search</button>

                                </div>


                            </div>
                            </form>
                        </div>


                        <div class="row">
                            <?php
                            if (!empty($get_prd_typs)) {
                                $get_all_prds_func = get_all_prdct_by_prd_typ($desti_like, $get_prod_type);
                            }
                            else {
                                $get_all_prds_func = get_all_prodycts($desti_like);
                            }

                            foreach ($get_all_prds_func as $get_all_prodycts) {
                                $id = $get_all_prodycts[0];
                                $prod_code = $get_all_prodycts[1];
                                $title = $get_all_prodycts[2];
                                $image = $get_all_prodycts[3];
                                $duration_type = $get_all_prodycts[4];
                                $set_duration = $get_all_prodycts[5];
                                $flex_duration = $get_all_prodycts[6];
                                $near_city = $get_all_prodycts[7]
                                ?>
                                <div class="col-md-4 col-sm-4 wow zoomIn" data-wow-delay="0.1s">
                                    <div class="tour_container">
                                        <div class="ribbon_3 popular"><span>New</span>
                                        </div>
                                        <div class="wishlist" style="    right: 20px;">
									<a class="tooltip_flip" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
								</div>
                                        <div class="img_container">
                                            <a href="confirm?c=<?php echo encrypt_decrypt('encrypt', $prod_code); ?>&tn=<?php echo encrypt_decrypt('encrypt', $title); ?>&lc=<?php echo encrypt_decrypt('encrypt', $near_city); ?>&dr=<?php echo encrypt_decrypt('encrypt', get_tour_hrs($duration_type, $set_duration, $flex_duration)); ?>&id=<?php echo $id; ?>">
                                                <img src="http://supplier.travelyamu.com/app_functions/pages_responses/<?php echo $image ?>" width="800" height="180" class="img-responsive" alt="Image" style="width:800px;height:180px;">
                                                <div class="short_info">
                                                    <i class="icon-back-in-time"></i><?php echo get_tour_hrs($duration_type, $set_duration, $flex_duration); ?> <span class="price"><sup>$</sup><?php echo split_zero_frm_amt(get_product_search_price($prod_code)); ?></span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="tour_title">
                                            <h5 style="font-size: 11px;margin-top: -3px;">
                                                <a href="#" class="tooltip-1" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="<?php echo $title; ?>" style="color:#000">
                                                    <strong style="font-weight:700;color: #0663ad;"><?php echo substr($title, 0, 80); ?></strong>
                                                </a>
                                            </h5>
                                            <div class="rating">
                                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small></small>
                                            </div>
                                            <i class="icon-location-outline"></i><?php echo substr($near_city, 0, 80) . "<span style=color:green> ...</span>"; ?>

                                        </div>
                                    </div>

                                </div>

<?php } ?>

                        </div>
 <hr>

                        <!--                            <div class="text-center">
                                                            <ul class="pagination">
                                                                    <li><a href="#">Prev</a>
                                                                    </li>
                                                                    <li class="active"><a href="#">1</a>
                                                                    </li>
                                                                    <li><a href="#">2</a>
                                                                    </li>
                                                                    <li><a href="#">3</a>
                                                                    </li>
                                                                    <li><a href="#">4</a>
                                                                    </li>
                                                                    <li><a href="#">5</a>
                                                                    </li>
                                                                    <li><a href="#">Next</a>
                                                                    </li>
                                                            </ul>
                                                    </div>-->
                        <!-- end pagination-->

                    </div>
                    <!-- End col lg 9 -->
                </div>
                <!-- End row -->
            </div>
            <!-- End container -->
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
//            document.onreadystatechange = function () {
//                var state = document.readyState
//                if (state == 'complete') {
//                    setTimeout(function () {
//                        document.getElementById('interactive');
//                        document.getElementById('load').style.visibility = "hidden";
//                    }, 1000);
//                }
//            };

//            $('.flexdatalist').flexdatalist({
//                searchContain: false,
//                textProperty: '{near_city}, {country}',
//                valueProperty: 'country',
//                minLength: 0,
//                focusFirstResult: true,
//                selectionRequired: true,
//                groupBy: 'prod_type',
//                visibleProperties: ["near_city", "country"],
//                searchIn: ["near_city", "country"],
//                url: 'products_json.json',
//                relatives: '#relative'
//
//            });
        </script>
        <script type="text/javascript">
$(document).ready(function()
{
	$("#loding1").hide();
	$("#loding2").hide();
	$(".country").change(function()
	{
		$("#loding1").show();
		var id=$(this).val();
		var dataString = 'id='+ id;
		$(".state").find('option').remove();
		$(".city").find('option').remove();
		$.ajax
		({
			type: "POST",
			url: "search/get_city.php",
			data: dataString,
			cache: false,
			success: function(html)
			{
				$("#loding1").hide();
				$(".state").html(html);
			} 
		});
	});
	
	
	$(".state").change(function()
	{
		$("#loding2").show();
		var id=$(this).val();
		var dataString = 'id='+ id;
	
		$.ajax
		({
			type: "POST",
			url: "search/get_city.php",
			data: dataString,
			cache: false,
			success: function(html)
			{
				$("#loding2").hide();
				$(".city").html(html);
			} 
		});
	});
	
});
</script>
    </body>
</html>