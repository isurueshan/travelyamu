<?php include_once "_main.php"; ?>
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
        <?php include_once "_head.php"; ?>
        <style>
            .hide {
  display: none;
}
        </style>
    </head>
    <body>
<!--        <div id="preloader"><div class="sk-spinner sk-spinner-wave">
                        <div class="sk-rect1"></div><div class="sk-rect2"></div><div class="sk-rect3"></div><div class="sk-rect4"></div><div class="sk-rect5">
                
                </div>

                <img src="img/gif/location.gif" style="width: 50px"/>
            </div>


        </div>-->

        <div class="layer"></div>

        <header style="">
            <?php include_once "$DOCUMENT_ROOT/headers/menu/top-menu.php"; ?>
        </header>




        <main>
            <div id="position">
                <br>

            </div>

            <div class="container margin_60">
                <div class="row">

                    <div class="col-md-8">


                        <div class="bs-wizard" style="width:100%">

                            <div class="col-xs-4 bs-wizard-step complete">
                                <div class="text-center bs-wizard-stepnum">Cart</div>
                                <div class="progress">
                                    <div class="progress-bar"></div>
                                </div>
                                <a href="#" class="bs-wizard-dot"></a>
                            </div>

                            <div class="col-xs-4 bs-wizard-step active">
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
<?php

?>
                </div>

                <div class="row">
                  <form id='myformses_<?php echo 1;?>' class='myformses' name='myformses'>
                    <div class="col-md-8">
                        <?php 
                        $a=0;
                        $b=1;
                        foreach ($_SESSION["cart_products"] as $cart_itm)
{
if(!empty($cart_itm['product_id'])){ 
    $avb_name=$cart_itm['avb_name'];
    $book_date=$cart_itm['book_date'];
    ?>
                            <div class="form_title">
                                <h3 style="font-size: 14px;font-weight: 600;"><strong><i class="icon-tag-1"></i></strong>Activity Info <?php echo "No-$b"; ?></h3>
                                <p style="color: #007499;">
                                <?php echo $book_date;?> | <?php echo $avb_name;?>
                                </p>
                            </div>
                            <div class="step">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3">
                                        <div class="form-group">
                                            <label><b>Title</b></label>
                                              <select class="form-control" name="pasngr_title[]">
                                            <option value="" selected="">--select title--</option>
                                            <option value="mr">Mr</option>
                                            <option value="ms">Ms</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-sm-9">
                                        <div class="form-group">
                                            <label><b>Lead Traveler (Adult) Full Name</b></label>
                                            <input type="text" class="form-control" id="lastname_booking" name="lastname_booking[]">
                                        </div>
                                    </div>
                                </div>
                         
                       

                                <div class="step" style="    border-left: 0px solid #ddd;padding: 20px 0 20px 2px;">
                            <div class="row">
                                <h4><strong style="font-size: 13px;color: #00998b;"><u>Additional Informations</u></strong></h4>
                                     
                                <div class="col-md-06 col-sm-6">
                                        <div class="form-group">
                                            <label><b>Special Requirement</b></label>
       <input type="text" class="form-control" name="special_req[]">
                                        </div>
                                    </div>
                            </div>
                                          <div class="row">
                                <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label><b>Pick Up Location</b><br>
                                                (If Tour or Attraction Related to "Admission Ticket only Product Mean Ignore This Filling Information)</label>
       <input type="text" class="form-control" name="pick_up_location[]">
                                        </div>
                                    </div>
                              
                            
                            
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label><b>Is drop Off location same as the pick up location ?</b></label>
                                        
                                        <select id="drop_loca_<?php echo $a;?>" data-id="<?php echo $a;?>" class="form-control drop_loca" name="drop_loc_select[]" style="min-width: 28%;max-width: 28%;" required>
                                            <option value="" selected>--select--</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                    
                                    </div>
                                </div>
                                
                            </div>
              <div class="row">
                                
                  <div id="div_drop_loc_<?php echo $a;?>" class="col-md-12 col-sm-12" style="display: none;" >
                                        <div class="form-group">
                                            <label><b>Enter Your Drop Off Location</b></label>
                                          
                                            <input type="text" class="form-control" name="drop_up_loc[]">
                                        </div>
                                    </div>
                            
                            
                            </div>
    

                        </div>
       <div class="step" style="    border-left: 0px solid #ddd;padding: 0px 0 20px 2px;">
                            <div class="row">
                                <h4><strong style="font-size: 13px;color: #00998b;"><u><b>Other Information</b></u></strong></h4>
                                     
                                   <div class="row">
                                
                  <div id="div_drop_loc" class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label> 
(Eg Airport Transfer package mean Flight Name,Flight No,Arrival or Departure Time)
(Eg Shore Excursions Mean Cruise Arrival,Departure Port Details,Time)
(Eg Children Available Mean "Child Age)
(No Related Mean Leave it Blank)</label>
                                          
                                            <textarea type="text" class="form-control" name="other_info[]" style="height: 125px;"></textarea>
                                        </div>
                                    </div>
                            
                            
                            </div>
                            </div>
       </div>
                            </div>
                        <?php 
                        
                        
                        $a++;
                        $b++;
                        
}


}?>
 <div class="form_title">
                            <h3><strong style="background-color: #ff7702;"><i class="icon-contacts"></i></strong>Contact Info</h3>
                            <p>

                            </p>
                        </div>
                        <div class="step">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Email Id</label>
                                        <input type="email" id="email_booking" name="email_booking" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Country</label>
                                            <select class="form-control" id="selCountry" name="selCountry" required="">
                                            <option value="" selected="">Select your country</option>
                                         <?php include_once 'country_codes.php';?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                       <div class="input-group">
            <span class="input-group-addon" id="country_code">+60</span>
            <input type="hidden" name="country_code_hide" id="country_code_hide" value="+60">
            <input type="text" class="form-control" name="txtPhone" id="txtPhone" aria-describedby="country_code" placeholder="Phone Number" title="Phone Number" onkeyup="cnttextinputonkeyup(this)" onblur="textinputonblur(this)" onfocus="textinputonfocus(this)">
            <div class="tmFormRequiredRight" id="requiredTelephone"></div>
        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <?php if($_SESSION['display_name']==""){?>
 <div class="form_title">
                            <h3><strong style="background-color: #ff7702;"><i class="icon-user"></i></strong>Travel Yamu Account</h3>
                            <p>

                            </p>
                        </div>
                         <div class="step">
                           <div class="row">
                               <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                   <h4>Do you have a travel yamu account ?</h4>
                                   <input type="radio" id="" name="account_yes_no" value="yes" class="" onclick="show1();">&nbsp; Yes&nbsp;&nbsp;
                                   <input type="radio" id="" name="account_yes_no" value="no" class="" onclick="show2();">&nbsp; No
                               </div>
                                      </div>
                           </div>
                             <div id="div1" class="row" style="display:none;">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>User Name (Email)</label>
                                        <input type="email" id="" name="usr_eml" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="usr_pwd" class="form-control" value="">
                                    </div>
                                </div>
                                  <a href="reset-my-password" target="_blank">Forgot Password?</a>
                            </div>
                                 <div id="div2" class="row" style="display:none;">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Create User Name (Email)</label>
                                        <input type="email" id="" name="crt_usr_eml" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Create Password</label>
                                        <input type="password" name="crt_usr_pwd" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                         </div>
                        <?php }?>
                        
                        <div id="policy">
                            <h4>Cancellation policy</h4>
                            <div class="form-group">
                                <div class="alert alert-info" role="alert" style=" font-size: 10px;">
                                    <strong>When Paying by credit card, </strong>your card us charged the total amount as soon as we receive confirmation on your booking.<br>
                                    <strong>If Confirmation isn't received instantly, </strong>an authorization is held against your card until it arrives.<br>
                                    <strong>If you change or cancel your booking request, </strong> charges may apply <br>

                                </div>
                                <label>

                                    <input type="checkbox" name="policy_terms" id="" style="">
                                    I accept terms and conditions and general policy.
                                </label>

                            </div>

                          
<button type="button" data-toggle="modal" data-target="#exampleModalCenter" data-id='1' id='book_now_btn2' class='btn_1 book_now_btn2' style="background: #ffa603;">Proceed To Payment</button>


                            <br><br>
                            <p>
                                By clicking Book Now and making a reservation, I acknowledge that I have read and agree to be bound by Travel Yamu <a href="http://www.travelyamu.com/privacy-policy" target="_blank">Terms and Conditions</a> and <a href="#">Privacy Statement</a>
                            </p>
                        </div>
                        <br>


                    </div>



                    <aside class="col-md-4" id="sidebar">
                        <div class="theiaStickySidebar">
                            <div class="box_style_1">
                                <h3 class="inner" style="background:#00759a;font-weight: 600;">Summery
<!--                                                        <a class="btn_full_outline" href="products-search" style="color: #ffffff;;border: 1px solid #d4d4d4;background:#00759a;"><i class="icon-right"></i> Continue shopping</a>-->
                                </h3>
                                <table class="table table_summary" style="margin-bottom: 0px;">
                                    <tbody>
                                        <?php
                                        if (!empty($_SESSION["cart_products"])) {
                                            $tot = 0;
                                            foreach ($_SESSION["cart_products"] as $cart_itm) {
                                                $tot +=$cart_itm['amt'];
                                                ?>
           <tr>
        <td>
                                                <?php echo $cart_itm['avb_name']; ?>
        </td>
        <td class="text-right">
                                                USD <?php echo $cart_itm['amt']; ?>
        </td>
        </tr>
                                                <?php }
                                            ?>
                                            <tr class="total" style="font-size: 12px;color: black">
                                                <td>
                                                    Total cost
                                                </td>
                                                <td class="text-right">
                                                    <?php echo "USD " . $tot; ?>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>


                            </div>
                        </div>

                    </aside>

                </form>
                </div>


            </div>

        </main>


        <?php include_once "$DOCUMENT_ROOT/headers/menu/footer.php"; ?>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLongTitle"><b>www.travelyamu.com</b></h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<div id="loading_air_cell_book2"> 
    <center>
      <img src="img/gif/loading.gif" style="width:100px"/>  
    </center>
</div>
<div id="message-review2">

</div>
</div>
<div class="modal-footer">
<!--        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="button" class="btn btn-primary">Save changes</button>-->
</div>
</div>
</div>
</div>

        <div id="toTop"></div><!-- Back to top button -->
        <script src="js/jquery-2.2.4.min.js"></script>
        <script src="js/common_scripts_min.js"></script>
        <script src="js/functions.js"></script>

        <!-- Specific scripts -->
<!--        <script src="js/icheck.js"></script>-->
<!--        <script>
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-grey',
                radioClass: 'iradio_square-grey'
            });
        </script>-->
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
            
            
 $(document).ready(function(){
     $(".drop_loca").change(function (e) {
     var r = $(this).attr("data-id");
//    $('#drop_loca_' + r).on('change', function() {
      if ( this.value == 'no')
      {
        $("#div_drop_loc_" + r).show();
      }
 //});
    });
    });
     $(document).ready(function(){
     $(".drop_loca").change(function (e) {
     var r = $(this).attr("data-id");
//    $('#drop_loca_' + r).on('change', function() {
      if ( this.value == 'yes')
      {
        $("#div_drop_loc_" + r).hide();
      }
 //});
    });
    });

            $(document).ready(function(){
    $('#selCountry').change(function(){
        var d_code = $(this).find(':selected').data('countrycode');
        $('#country_code').html(d_code);
        $('#country_code_hide').val(d_code);
        
    });
}); 

   $(document).ready(function () {

                $(".book_now_btn2").click(function (e) {

                    var r = $(this).attr("data-id");
                    var dataString = $('#myformses_' + r).serialize();
                    
                    $('#loading_air_cell_book2').show();
                    $('#message-review2').hide();
                  
                    $.ajax({
                        type: 'POST',
                        url: 'app_functions/bookings_func/booking_form.php',
                        data: dataString,
                        success: function (data) {

                            $('#message-review2').html(data);
                            $('#loading_air_cell_book2').hide();
                            $('#message-review2').show();
                           

                        }
                    });


                });

            }); 
            
            function show1(){
  document.getElementById('div2').style.display = 'none';
  document.getElementById('div1').style.display ='block';
}
function show2(){
  document.getElementById('div2').style.display = 'block';
  document.getElementById('div1').style.display ='none';
}
        </script>

    </body>
</html>