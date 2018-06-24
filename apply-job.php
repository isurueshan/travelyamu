<?php 
$DOCUMENT_ROOT=$_SERVER['DOCUMENT_ROOT'];
include "$DOCUMENT_ROOT/app_functions/travelyamu_function.php";
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

<div class="row">
<div class="col-lg-8">
      <h4>
    <?php if (isset($_POST)) {
    $time_stamp=get_kul_date();
    $firstName=$_POST['firstName']; 
    $address=$_POST['address']; 
    $city=$_POST['city']; 
    $postalcode=$_POST['postalcode'];
    $selCountry=$_POST['selCountry'];
    $country_code_hide=$_POST['country_code_hide']; 
    $txtPhone=$_POST['txtPhone']; 
    $birthdate_month=$_POST['birthdate_month'];
    $birthdate_date=$_POST['birthdate_date'];
    $year=$_POST['year']; 
    $email=$_POST['email']; 
    $gender=$_POST['gender']; 
    $mrtl_sts=$_POST['mrtl_sts'];
    $nationality=$_POST['nationality']; 
    $applyng_for=$_POST['applyng_for'];
    $typ_cours=$_POST['typ_cours'];
    $week_name=$_POST['week_name']; 
    $wk_name="";
        foreach($week_name as $week_names)
            {
            $wk_name.="$week_names/";
            }
    $frm_mon_sat_time=$_POST['frm_mon_sat_time']; 
    $frm_mon_time=$_POST['frm_mon_time']; 
    $frm_tue_time=$_POST['frm_tue_time']; 
    $frm_wed_time=$_POST['frm_wed_time']; 
    $frm_thur_time=$_POST['frm_thur_time']; 
    $frm_fri_time=$_POST['frm_fri_time']; 
    $frm_sat_time=$_POST['frm_sat_time']; 
    $frm_mon_sun_time=$_POST['frm_sun_time'];
   
    $to_mon_sat_time=$_POST['to_mon_sat_time'];
    $to_mon_time=$_POST['to_mon_time'];
    $to_tue_time=$_POST['to_tue_time'];
    $to_wed_time=$_POST['to_wed_time'];
    $to_thur_time=$_POST['to_thur_time'];
    $to_fri_time=$_POST['to_fri_time'];
    $to_sat_time=$_POST['to_sat_time'];
    $to_sun_time=$_POST['to_sun_time'];
 
    $start_date=$_POST['start_date']; 
    $languge_spk=$_POST['languge_spk'];
    $languge_wrt=$_POST['languge_wrt'];
    $languge_unds_tnd=$_POST['languge_unds_tnd'];
    $skills_qulifications=$_POST['skills_qulifications']; 
    $describe_about_u=$_POST['describe_about_u']; 
    $agree=$_POST['agree'];
    
    
    if(empty($firstName)){}
    elseif (empty ($address)) {}
    elseif (empty ($city)) {}
    elseif (empty ($selCountry)) {}
    elseif(empty ($email)){}
    else
    {
       insert_to_careers($firstName,$address,$city,$postalcode,$selCountry,$country_code_hide,$txtPhone,$birthdate_month,$birthdate_date,$year,$email,$gender,$mrtl_sts,$nationality,$applyng_for,$typ_cours,$wk_name,$frm_mon_sat_time,$to_mon_sat_time,$frm_mon_time,$to_mon_time,$frm_tue_time,$to_tue_time,$frm_wed_time,$to_wed_time,$frm_thur_time,$to_thur_time,$frm_fri_time,$to_fri_time,$frm_sat_time,$to_sat_time,$frm_mon_sun_time,$to_sun_time,$start_date,$languge_spk,$languge_wrt,$languge_unds_tnd,$skills_qulifications,$describe_about_u,$agree,$time_stamp);
       careers_email_send($email,$firstName,$address,$city,$postalcode,$selCountry,$country_code_hide,$txtPhone,$birthdate_date,$birthdate_month,$year,$gender,$mrtl_sts,$nationality,$applyng_for,$typ_cours,$wk_name);
       echo "<h2 style='color:red'>Reques Has Been Submitted! Thank You....</h2><br>";
       
        ?>
       <script>
    window.location.href="http://www.travelyamu.com/careers";
</script>   
          <?php
    }
        
                  }
    
                 
                
                  ?>  
                    
                </h4>
<form enctype="multipart/form-data" class="form-horizontal" action="<?php print $_SERVER['PHP_SELF'] ?>" method="post" role="form">
              <h2>Application Form</h2>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Full Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="firstName" placeholder="Full Name" class="form-control" autofocus>
                        <span class="help-block">First Name, Last Name eg.: Aslam Mashoor</span>
                    </div>
                </div>
                  <div class="form-group">
                    <label for="CurrenAddress" class="col-sm-3 control-label">Current Address</label>
                    <div class="col-sm-9">
                        <input type="text" name="address" placeholder="Current Address" class="form-control" autofocus>
                        <span class="help-block"></span>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="city" class="col-sm-3 control-label">City</label>
                    <div class="col-sm-6">
                        <input type="text" name="city" placeholder="City" class="form-control" autofocus required="">
                        <span class="help-block"></span>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="postalcode" class="col-sm-3 control-label">Postal Code</label>
                    <div class="col-sm-6">
                        <input type="text" name="postalcode" placeholder="postal code" class="form-control" autofocus>
                        <span class="help-block"></span>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="country" class="col-sm-3 control-label">Country</label>
                    <div class="col-sm-6">
                      <select class="form-control" id="selCountry" name="selCountry" required="">
                                            <option value="" selected="">Select your country</option>
                                         <?php include_once 'country_codes.php';?>
                                        </select>
                    </div>
                </div>
                  <div class="form-group">
                    <label for="phonenumber" class="col-sm-3 control-label">Phone Number</label>
                    <div class="col-sm-6">
               <div class="input-group">
            <span class="input-group-addon" id="country_code">+60</span>
            <input type="hidden" name="country_code_hide" id="country_code_hide" value="+60">
            <input type="text" class="form-control" name="txtPhone" id="txtPhone" aria-describedby="country_code" placeholder="Phone Number" title="Phone Number" onkeyup="cnttextinputonkeyup(this)" onblur="textinputonblur(this)" onfocus="textinputonfocus(this)">
            <div class="tmFormRequiredRight" id="requiredTelephone"></div>
        </div>
                    </div>
                </div>
               
                 <div class="form-group">
                    <label for="birthdate" class="col-sm-3 control-label">Birth Date</label>
                    <div class="col-sm-2">
                        <select class="form-control" name="birthdate_month" required="">
                            <option value="">--select month</option>  
                             <option value="JAN">JAN</option> 
                             <option value="FEB">FEB</option> 
                             <option value="MAR">MAR</option> 
                             <option value="APR">APR</option> 
                             <option value="MAY">MAY</option> 
                             <option value="JUN">JUN</option> 
                             <option value="JUL">JUL</option> 
                             <option value="AUG">AUG</option> 
                             <option value="SEP">SEP</option> 
                             <option value="OCT">OCT</option> 
                             <option value="NOV">NOV</option> 
                             <option value="DEC">DEC</option> 
                        </select>
                    </div>
                     <div class="col-sm-2">
                        <select class="form-control" name="birthdate_date" required="">
                             <option value="">--select date</option>  
                             <?php for($i=1;$i<=31;$i++){?>
                             <option value="<?php echo $i;?>"><?php echo $i;?></option>  
                             <?php }?>
                        </select>
                    </div>
                     <div class="col-sm-2">
                    <input type="number" name="year" placeholder="1991" class="form-control">
                
                    </div>  
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-6">
                        <input type="email" name="email" placeholder="Email" class="form-control" required="">
                    </div>
                </div>
             
                <div class="form-group">
                    <label class="control-label col-sm-3">Gender</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="gender" value="F">Female
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="gender" value="M">Male
                                </label>
                            </div>
                          
                        </div>
                    </div>
                </div> 
  <div class="form-group">
                    <label class="control-label col-sm-3">Martial Status</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="mrtl_sts" value="S">Single
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="mrtl_sts" value="M">Married
                                </label>
                            </div>
                          
                        </div>
                    </div>
                </div>
                  <div class="form-group">
                    <label for="nationality" class="col-sm-3 control-label">Nationality</label>
                    <div class="col-sm-4">
                        <input type="text" name="nationality" placeholder="Nationality" class="form-control">
                    </div>
                </div>
                
              
                  <div class="form-group">
                    <label class="control-label col-sm-3">Applying For</label>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-6">
                                <select class="form-control" name="applyng_for" required="">
                                    <option value="">--Select Applying For</option>
                                    <option value="Start Your Own Business">Start Your Own Business</option>
                                    <option value="Trainee Online Travel Agent">Trainee Online Travel Agent</option>
                                    
                                </select>
                             
                            </div>
                          
                          
                        </div>
                    </div>
                </div>
                
                 <div class="form-group">
                    <label class="control-label col-sm-3">Type Of Course Desired</label>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-3">
                                <label class="radio-inline">
                                    <input type="radio" name="typ_cours" value="full-time">Full-Time
                                </label>
                            </div>
                            <div class="col-sm-3">
                                <label class="radio-inline">
                                    <input type="radio" name="typ_cours" value="part-time">Part-Time
                                </label>
                            </div>
                           <div class="col-sm-3">
                                <label class="radio-inline">
                                    <input type="radio" name="typ_cours" value="temporary">Temporary
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
<div class="form-group">
<label class="control-label col-sm-3">Days/Hours Available</label>
<div class="col-sm-9">
<div class="row">
<div class="col-sm-9">
<table>
    <tr><th>Mon-Saturday</th><td>&nbsp;<input type="checkbox" name="week_name[]" value="mon-sat"/>&nbsp;</td><td> &nbsp;<input type="time" name="frm_mon_sat_time"/> (From)</td><td> &nbsp;<input type="time" name="to_mon_sat_time"/> (To)</td></tr>
    <tr><th>Monday</th><td>&nbsp;<input type="checkbox" name="week_name[]" value="mon"/>&nbsp;</td><td> &nbsp;<input type="time" name="frm_mon_time"/> (From)</td><td> &nbsp;<input type="time" name="to_mon_time"/> (To)</td></tr>
    <tr><th>Tuesday</th><td>&nbsp;<input type="checkbox" name="week_name[]" value="tue"/>&nbsp;</td><td> &nbsp;<input type="time" name="frm_tue_time"/> (From)</td><td> &nbsp;<input type="time" name="to_tue_time"/> (To)</td></tr>
    <tr><th>Wednesday</th><td>&nbsp;<input type="checkbox" name="week_name[]" value="wed"/>&nbsp;</td><td> &nbsp;<input type="time" name="frm_wed_time"/> (From)</td><td> &nbsp;<input type="time" name="to_wed_time"/> (To)</td></tr>
    <tr><th>Thursday</th><td>&nbsp;<input type="checkbox" name="week_name[]" value="thur"/>&nbsp;</td><td> &nbsp;<input type="time" name="frm_thur_time"/> (From)</td><td> &nbsp;<input type="time" name="to_thur_time"/> (To)</td></tr>
    <tr><th>Friday</th><td>&nbsp;<input type="checkbox" name="week_name[]" value="fri"/>&nbsp;</td><td> &nbsp;<input type="time" name="frm_fri_time"/> (From)</td><td> &nbsp;<input type="time" name="to_fri_time"/> (To)</td></tr>
    <tr><th>Saturday</th><td>&nbsp;<input type="checkbox" name="week_name[]" value="sat"/>&nbsp;</td><td> &nbsp;<input type="time" name="frm_sat_time"/> (From)</td><td> &nbsp;<input type="time" name="to_sat_time"/> (To)</td></tr>
    <tr><th>Sunday</th><td>&nbsp;<input type="checkbox" name="week_name[]" value="sun"/>&nbsp;</td><td> &nbsp;<input type="time" name="frm_sun_time"/> (From)</td><td> &nbsp;<input type="time" name="to_sun_time"/> (To)</td></tr>
    
</table>
</div>

</div>
</div>
</div>
                  <div class="form-group">
                    <label for="traingstartdate" class="col-sm-6 control-label">If selected, on what date can you start for training?</label>
                    <div class="col-sm-3">
                        <input type="date" name="start_date" class="form-control">
                    </div>
                </div>
                    <div class="form-group">
                    <label class="control-label col-sm-3">English languages Qualifications</label>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-3">
                                <label class="radio-inline">
                                    <input type="checkbox" name="languge_spk" value="spk"> Speak
                                </label>
                            </div>
                            <div class="col-sm-3">
                                <label class="radio-inline">
                                    <input type="checkbox" name="languge_wrt" value="wrt"> Write
                                </label>
                            </div>
                           <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="checkbox" name="languge_unds_tnd" value="unds_tnd"> Understand
                                </label>
                            </div>
                        </div>
                    </div>
                </div> 
                 <div class="form-group">
                    <label for="skill_qulification" class="col-sm-3 control-label">Skills and Qualifications</label>
                    <div class="col-sm-8">
                        <textarea name="skills_qulifications" class="form-control" style="height: 100px;"></textarea>
                    </div>
                </div>
                   <div class="form-group">
                    <label for="skill_qulification" class="col-sm-3 control-label">Describe About you</label>
                    <div class="col-sm-8">
                        <textarea name="describe_about_u" class="form-control" style="height: 100px;"></textarea>
                    </div>
                </div>
                  <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="agree" required="">Click the button below to submit this application:						
						I certify that the information contained in this application is true and complete						
if I am hired. I authorize the verification of any and all information listed above.						
                            </label>
                        </div>
                    </div>
                </div> 
                <div class="form-group">
                    <div class="col-sm-3 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                </div>
            </form> <!-- /form -->
        </div> <!-- ./container -->

</div>
<!-- End row -->
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
<!--<script>
$('input').iCheck({
checkboxClass: 'icheckbox_square-grey',
radioClass: 'iradio_square-grey'
});
</script>-->
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/bootstrap-timepicker.js"></script>
<script>
$('input.date-pick').datepicker('setDate', '');
$('input.time-pick').timepicker({
minuteStep: 15,
showInpunts: false
});

         $(document).ready(function(){
    $('#selCountry').change(function(){
        var d_code = $(this).find(':selected').data('countrycode');
        $('#country_code').html(d_code);
        $('#country_code_hide').val(d_code);
        
    });
});

</script>
<!-- Specific scripts -->
<script src="js/morphext.min.js"></script>


</body>
</html>