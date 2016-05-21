 <!DOCTYPE html>

<?php
session_start();
include 'session.php';

if($_SESSION['exp']=='invalid'){
	
	
	
	header("location:login.php");
	
	
	unset($_SESSION['user']);
	
	
	unset($_SESSION['company']);
	
	
	unset($_SESSION['Id']);
	
	
	unset($_SESSION['fulname']);
	
	
	
}



?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title><?php echo $var?></title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
   <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="css/style.css" rel="stylesheet" />
   <link href="css/style_responsive.css" rel="stylesheet" />
   <link href="css/style_default.css" rel="stylesheet" id="style_color" />
<link href="assets/main/resources/css/jquery.toastmessage.css" rel="stylesheet" />
   <link href="assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
   <link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
 <!--  <link rel="stylesheet" href="dist/magnific-popup.css"> -->

   <link rel="stylesheet" href="http://cdn.jsdelivr.net/jquery.magnific-popup/0.9.9/magnific-popup.css">
<link href="assets/main/resources/css/jquery.toastmessage.css" rel="stylesheet" />
   <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
    <link href="build/toastr.css" rel="stylesheet" type="text/css" />

<style type="text/css">


#modal {
  margin: 0 auto;
  width: 300px;
  height: 600px;
  background: #eee;
  font-size: 8px;}
  #modal3 {
  margin: 0 auto;
  padding: 0.5em;
  width: 300px;
  height: 400px;
  background: #eee;
  font-size: 8px;}
       .loader {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url('images/ajax-loader.gif') 50% 50% no-repeat rgb(249,249,249);
}
</style>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
   <!-- BEGIN HEADER -->

   <?php 
include 'header.php';
?>
       <!-- BEGIN TOP NAVIGATION BAR -->
 
       <!-- END TOP NAVIGATION BAR -->
   </div>  
   <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->
   <div id="container" class="row-fluid" <?php echo $_SESSION['rtl'];

?>>
      <!-- BEGIN SIDEBAR -->
        <div id="sidebar" class="nav-collapse collapse">
      <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
      <div class="sidebar-toggler hidden-phone"></div>
      <!-- BEGIN SIDEBAR TOGGLER BUTTON -->


      <!-- END RESPONSIVE QUICK SEARCH FORM -->
      <!-- BEGIN SIDEBAR MENU -->
<?php 
include 'header_menu.php';



?>
      <!-- END SIDEBAR MENU -->
    </div>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->  
      <div id="main-content" <?php echo $_SESSION['rtl'];

?>>
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                   <!-- BEGIN THEME CUSTOMIZER-->
 
                   <!-- END THEME CUSTOMIZER-->
                  <h3 class="page-title">
                   <?php GetProperty('addclienttitle',$_SESSION['rtl']);?>
                   
                  </h3>

               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
           <div class="row-fluid">
      <div class="widget">
 
          <div class="widget-body">
           <form id="loginform" class="form-horizontal"  method="POST" <?php echo $_SESSION['rtl'];

?>>
    
              <div class="span4" <?php echo $_SESSION['rtl'];

?>>
                 <strong><?php GetProperty('basicinfo',$_SESSION['rtl']);?></strong><br />

                  <div class="control-group">
                      <label class="control-label"><?php GetProperty('realname',$_SESSION['rtl']);?></label>
                      <div class="controls">
                        <input name="realname"id="realname" pattern="[a-zA-Z\s]+" type="text" placeholder="Jhon" required/>
                      </div>
                  </div>
                  
                  <div class="control-group">
                      <label class="control-label"><?php GetProperty('mobileno',$_SESSION['rtl']);?></label>
                      <div class="controls">
            		 <input name="mobile"id="mobile" type="tel" pattern="^\d{3}\d{6}\d{3}$" placeholder="971xxxxx" required/>
                      </div>
                  </div>


              </div>
           
              <br>
              <div class="span6">
                  <div class="control-group">
                       <label class="control-label"><?php GetProperty('em_id',$_SESSION['rtl']);?></label>
                      <div class="controls">
                         <input name="idnum"id="idnum" type="num" pattern="[0-9]+" placeholder="452xxxxx" required/>
                      </div>
                  </div>
                  <div class="control-group">
                      <label class="control-label"><?php GetProperty('vendor',$_SESSION['rtl']);?></label>
                      <div class="controls">
                      <input type="checkbox" name="vender" id="vendor" onChange="venderservice(this)"> Is Vender </br>
                     </div>
                  </div>
 
                  </div>
                  <br>
                  <br>
              </div> 
                <div id="result">
              </div>
              
              
                        <div class="widget-body">
   
              <div class="span4" <?php echo $_SESSION['rtl'];

?>>
                 <strong><?php GetProperty('otherdetail',$_SESSION['rtl']);?></strong><br />

                  <div class="control-group">
                      <label class="control-label"  ><?php GetProperty('email',$_SESSION['rtl']);?></label>
                      <div class="controls">
                        <input name="email"id="email" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" type="text" placeholder="example@gmail.com" required/>
                      </div>
                  </div>
                  
                  <div class="control-group">
                      <label class="control-label" ><?php GetProperty('accountno',$_SESSION['rtl']);?></label>
                      <div class="controls">
            		 	<input name="accountno"id="accountno" type="tel" pattern="^\d{3}\d{6}\d{3}$" placeholder="971xxxxx" required/>
                      </div>
                  </div>
                  <div class="control-group">
                      <label class="control-label" ><?php GetProperty('fax',$_SESSION['rtl']);?></label>
                      <div class="controls">
            		 	<input name="fax"id="fax" type="tel" pattern="^\d{3}\d{6}\d{3}$" placeholder="971xxxxx" required/>
                      </div>
                  </div>
                  <div class="control-group">
                      <label class="control-label" ><?php GetProperty('pbox',$_SESSION['rtl']);?></label>
                      <div class="controls">
            		 	<input name="pbox"id="pbox" type="tel" pattern="[0-9]+" required/>
                      </div>
                  </div>
                       <div class="control-group">
                      <label class="control-label"  ><?php GetProperty('passport',$_SESSION['rtl']);?></label>
                      <div class="controls">
                      <input name="passport"id="passport" pattern="[a-zA-Z0-9\s]+" type="text" placeholder="gvxxxxx" required/>

                      </div>
                  </div>
                  <div class="control-group">
                      <label class="control-label"  ><?php GetProperty('jobtitle',$_SESSION['rtl']);?></label>
                      <div class="controls">
                      <input name="jtitle"id="jtitle" type="text" pattern="[a-zA-Z\s]+" placeholder="admin" required/>

                      </div>
                  </div>
              </div>
                       <div class="loader"></div>
         <br>
              <div class="span6" <?php echo $_SESSION['rtl'];

?>>
                  <div class="control-group" style="margin-top: 10px;">
                      <label class="control-label"><?php GetProperty('bankname',$_SESSION['rtl']);?></label>
                  <div class="controls">
                      <select  name="bank" id="bank" >
                       <option value="0">Select Bank</option>
                          <?php             
                    $var=$_SESSION['Id'];
                    $bank_name = Bank_Name($var);
                    for($i=0; $i < count($bank_name); $i++)
                    {           
                    ?>
				<option value="<?php $bank_name[$i]['id'];?>"><?php echo $bank_name[$i]['bank_name'];?></option>
                <?php
                    }
            ?>	
 
  </select>    
  <input name="desig"id="button" type="image" src="img/PLUS.jpg" placeholder="Owner" required/>
                   </div>
                  </div>
                  <div class="control-group" >
                      <label class="control-label" ><?php GetProperty('phoneno',$_SESSION['rtl']);?></label>
                      <div class="controls">
                       <input name="phone"id="phone" type="text" pattern="[0-9]+" placeholder="452xxxxx" required/>
                      </div>
                  </div>
                  <div class="control-group"  >
                      <label class="control-label" ><?php GetProperty('addresscust',$_SESSION['rtl']);?></label>
                      <div class="controls">
                       <input name="address"id="address" type="text" pattern="[a-zA-Z0-9/s]+" placeholder="452xxxxx" required/>
                      </div>
                  </div>
                  <div class="control-group" >
                      <label class="control-label" ><?php GetProperty('nationality',$_SESSION['rtl']);?></label>
                      <div class="controls">
 <select id="nationality" name="nationality">
 <option value="">Country...</option>
<option value="Afganistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Aruba">Aruba</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bermuda">Bermuda</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bonaire">Bonaire</option>
<option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
<option value="Botswana">Botswana</option>
<option value="Brazil">Brazil</option>
<option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
<option value="Brunei">Brunei</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Canary Islands">Canary Islands</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Channel Islands">Channel Islands</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos Island">Cocos Island</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cote DIvoire">Cote D'Ivoire</option>
<option value="Croatia">Croatia</option>
<option value="Cuba">Cuba</option>
<option value="Curaco">Curacao</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="East Timor">East Timor</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Falkland Islands">Falkland Islands</option>
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="French Guiana">French Guiana</option>
<option value="French Polynesia">French Polynesia</option>
<option value="French Southern Ter">French Southern Ter</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Great Britain">Great Britain</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Hawaii">Hawaii</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran">Iran</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Isle of Man">Isle of Man</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Korea North">Korea North</option>
<option value="Korea Sout">Korea South</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Laos">Laos</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libya">Libya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macau">Macau</option>
<option value="Macedonia">Macedonia</option>
<option value="Madagascar">Madagascar</option>
<option value="Malaysia">Malaysia</option>
<option value="Malawi">Malawi</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Midway Islands">Midway Islands</option>
<option value="Moldova">Moldova</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Nambia">Nambia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherland Antilles">Netherland Antilles</option>
<option value="Netherlands">Netherlands (Holland, Europe)</option>
<option value="Nevis">Nevis</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau Island">Palau Island</option>
<option value="Palestine">Palestine</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Phillipines">Philippines</option>
<option value="Pitcairn Island">Pitcairn Island</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Republic of Montenegro">Republic of Montenegro</option>
<option value="Republic of Serbia">Republic of Serbia</option>
<option value="Reunion">Reunion</option>
<option value="Romania">Romania</option>
<option value="Russia">Russia</option>
<option value="Rwanda">Rwanda</option>
<option value="St Barthelemy">St Barthelemy</option>
<option value="St Eustatius">St Eustatius</option>
<option value="St Helena">St Helena</option>
<option value="St Kitts-Nevis">St Kitts-Nevis</option>
<option value="St Lucia">St Lucia</option>
<option value="St Maarten">St Maarten</option>
<option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
<option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
<option value="Saipan">Saipan</option>
<option value="Samoa">Samoa</option>
<option value="Samoa American">Samoa American</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Serbia">Serbia</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra Leone">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syria">Syria</option>
<option value="Tahiti">Tahiti</option>
<option value="Taiwan">Taiwan</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania">Tanzania</option>
<option value="Thailand">Thailand</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Erimates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States of America">United States of America</option>
<option value="Uraguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Vatican City State">Vatican City State</option>
<option value="Venezuela">Venezuela</option>
<option value="Vietnam">Vietnam</option>
<option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
<option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
<option value="Wake Island">Wake Island</option>
<option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
<option value="Yemen">Yemen</option>
<option value="Zaire">Zaire</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
</select>
                  
                       </div>
                  </div>
                                    <div class="control-group">
                      <label class="control-label" ><?php GetProperty('sponsor',$_SESSION['rtl']);?></label>
                      <div class="controls">
                          <select  name="sponsor" id="sponsor" >
            <option value="0">Select Sponsor</option>
          <?php 
                    $var=$_SESSION['Id'];
                    $sponsor = sponsor2($var);
                    for($i=0; $i < count($sponsor); $i++)
                    {           
                    ?>
				<option value="<?php $sponsor[$i]['id'];?>"><?php echo $sponsor[$i]['sponsor_name'];?></option>
                <?php
                    }
?>

  </select>
                       <input name="desig"id="button3" type="image" src="img/PLUS.jpg" placeholder="Owner" required/>
                      </div>
                  </div>
     		 </div>
              </div> 
              
              
        
              <div class="clearfix"></div>
        <div id="result2">
              </div> 
              <div class="form-actions">
                   <input name="submit" type="button"  class="btn btn-primary" value="Submit" onClick="Submit(this)"/>
              </div>
                  </form>
  </div>

      <div id="modal3" class="white-popup-block mfp-hide">
 <input class="popup-modal-dismiss" action="#" type="image" src="img/cross-sign.jpg" placeholder="Owner" required/>    <h3>Add New Sponsor</h3>
<div class="row-fluid" <?php echo $_SESSION['rtl'];?>> 
      <div class="widget">
           <div class="row-fluid">                      
                        <div class="widget-body">
   
              <div class="span4"  >
  
                  <div class="control-group">
                      <label class="control-label" ><?php GetProperty('sponsorname',$_SESSION['rtl']);?></label>
                      <div class="controls">
                        <input name="sponsname"id="sponsname" pattern="[a-zA-Z\s]+" type="text" placeholder="John" required/>
                      </div>
                  </div>
                    <div class="control-group">
                      <label class="control-label" ><?php GetProperty('mobileno',$_SESSION['rtl']);?></label>
                      <div class="controls">
                        <input name="mobilenum"id="mobilenum" type="tel" pattern="^\d{3}\d{6}\d{3}$" placeholder="971xxx" required/>
                      </div>
                  </div>
				  <div class="control-group">
                      <label class="control-label" ><?php GetProperty('em_id',$_SESSION['rtl']);?></label>
                      <div class="controls">
                         <input name="persnum"id="persnum" type="num" pattern="[0-9]+" placeholder="452xxxxx" required/>
                      </div>
                  </div>
                  <input name="submit" type="button"  class="btn btn-primary" value="submit"onClick="popup(this)" />
              </div>
              </div> 
              
    
      </div>
  </div>
</div>

      </div>
      
     <div id="modal" class="white-popup-block mfp-hide">
 <input class="popup-modal-dismiss" action="#" type="image" src="img/cross-sign.jpg" placeholder="Owner" required/>        <!-- <a class="popup-modal-dismiss" href="#">Dismiss</a> -->
    <h4>Add Bank</h4>
<div class="row-fluid" <?php echo $_SESSION['rtl'];?>>
      <div class="widget">
           <div class="widget-body">
       
              <div class="span4">
  
                  <div class="control-group">
                      <label class="control-label"  ><?php GetProperty('bankname',$_SESSION['rtl']);?></label>
                      <div class="controls">
                        <input name="bankname"id="bankname" pattern="[a-zA-Z\s]+" type="text" placeholder="John" required/>
                      </div>
                  </div>
                    <div class="control-group">
                      <label class="control-label"  ><?php GetProperty('country',$_SESSION['rtl']);?></label>
                      <div class="controls">
                        <select id="country">
                 <option value="">Country...</option>
<option value="Afganistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Aruba">Aruba</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bermuda">Bermuda</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bonaire">Bonaire</option>
<option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
<option value="Botswana">Botswana</option>
<option value="Brazil">Brazil</option>
<option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
<option value="Brunei">Brunei</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Canary Islands">Canary Islands</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Channel Islands">Channel Islands</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos Island">Cocos Island</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cote DIvoire">Cote D'Ivoire</option>
<option value="Croatia">Croatia</option>
<option value="Cuba">Cuba</option>
<option value="Curaco">Curacao</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="East Timor">East Timor</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Falkland Islands">Falkland Islands</option>
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="French Guiana">French Guiana</option>
<option value="French Polynesia">French Polynesia</option>
<option value="French Southern Ter">French Southern Ter</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Great Britain">Great Britain</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Hawaii">Hawaii</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran">Iran</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Isle of Man">Isle of Man</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Korea North">Korea North</option>
<option value="Korea Sout">Korea South</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Laos">Laos</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libya">Libya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macau">Macau</option>
<option value="Macedonia">Macedonia</option>
<option value="Madagascar">Madagascar</option>
<option value="Malaysia">Malaysia</option>
<option value="Malawi">Malawi</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Midway Islands">Midway Islands</option>
<option value="Moldova">Moldova</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Nambia">Nambia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherland Antilles">Netherland Antilles</option>
<option value="Netherlands">Netherlands (Holland, Europe)</option>
<option value="Nevis">Nevis</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau Island">Palau Island</option>
<option value="Palestine">Palestine</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Phillipines">Philippines</option>
<option value="Pitcairn Island">Pitcairn Island</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Republic of Montenegro">Republic of Montenegro</option>
<option value="Republic of Serbia">Republic of Serbia</option>
<option value="Reunion">Reunion</option>
<option value="Romania">Romania</option>
<option value="Russia">Russia</option>
<option value="Rwanda">Rwanda</option>
<option value="St Barthelemy">St Barthelemy</option>
<option value="St Eustatius">St Eustatius</option>
<option value="St Helena">St Helena</option>
<option value="St Kitts-Nevis">St Kitts-Nevis</option>
<option value="St Lucia">St Lucia</option>
<option value="St Maarten">St Maarten</option>
<option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
<option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
<option value="Saipan">Saipan</option>
<option value="Samoa">Samoa</option>
<option value="Samoa American">Samoa American</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Serbia">Serbia</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra Leone">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syria">Syria</option>
<option value="Tahiti">Tahiti</option>
<option value="Taiwan">Taiwan</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania">Tanzania</option>
<option value="Thailand">Thailand</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Erimates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States of America">United States of America</option>
<option value="Uraguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Vatican City State">Vatican City State</option>
<option value="Venezuela">Venezuela</option>
<option value="Vietnam">Vietnam</option>
<option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
<option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
<option value="Wake Island">Wake Island</option>
<option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
<option value="Yemen">Yemen</option>
<option value="Zaire">Zaire</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
</select>
                        
                        </select>                      </div>
                  </div>
				  <div class="control-group">
                      <label class="control-label"><?php GetProperty('city',$_SESSION['rtl']);?></label>
                      <div class="controls">
                         <input name="city"id="city" type="text" pattern="[a-zA-Z\s]+" placeholder="Dubai" required/>
                      </div>
                  </div>
              		<div class="control-group">
                      <label class="control-label"><?php GetProperty('detail',$_SESSION['rtl']);?></label>
                      <div class="controls">
                                 <textarea rows="4" cols="50" id="details">

						</textarea>
                      </div>
                  </div>
               </div>

              <div class="clearfix"></div>

              <div class="form-actions">
                  <input name="submit" type="button"  class="btn btn-primary" value="submit"onClick="popupbank(this)" />
              </div>
           </div>
    
      </div>
  </div>
</div>


      
      
    </div>
   <!-- END CONTAINER -->
 
  <script src="js/jquery-1.8.3.min.js"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="js/jquery.blockui.js"></script>
 
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<!-- Magnific Popup core JS file -->
   <script src="http://cdn.jsdelivr.net/jquery.magnific-popup/0.9.9/jquery.magnific-popup.min.js"></script>
   <script src="http://cdn.jsdelivr.net/zepto/1.1.3/zepto.min.js"></script>
   <script type="text/javascript" src="assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
   <script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
    <script src="assets/main/javascript/jquery.toastmessage.js"></script>
   
   <script src="js/scripts.js"></script>
<script src="http://www.datejs.com/build/date.js" type="text/javascript"></script>
   <script src="js/scripts.js"></script>

   <script type="text/javascript">
   
    $(window).load(function() {
	$(".loader").fadeOut("slow");
}) 
$(document).ready(function() {
 
  $('#button3').magnificPopup({
    type: 'inline',
    items: {src: '#modal3'},
    preloader: false,
    modal: true
  });
   
  $('#button').magnificPopup({
    type: 'inline',
    items: {src: '#modal'},
    preloader: false,
    modal: true
  });
});

function popup(obj)
{
		var sponsname= $("#sponsname").val();
		var mobilenum = $("#mobilenum").val();
		var persnum =$("#persnum").val();
		 var dataString= 'sponsname='+ sponsname + '&mobilenum='+ mobilenum + '&persnum='+persnum;  
	 $.ajax({
		
		url : "client_validate.php?id=10",
		type: "POST",
		data : dataString,
		cache: false,
		success: function(result)
		{
		   result.id;
		   result.text;
		   $select = $('#sponsor');
		   $select.append('<option id="' + result.id+ '">' +result.text + '</option>');
		   $.magnificPopup.close();		   
           $().toastmessage('showSuccessToast', "Sponsor Added Successfully");
		},
		error: function (jqXHR, textStatus, errorThrown)
		{
	 
		}
		});	
		
		
		
}

function popupbank(obj)
{
		debugger;
		var bankname= $("#bankname").val();
		var country = $("#country").val();
		var city =$("#city").val();
		var detail=$("#details").val();
		 var dataString= 'bankname=' + bankname + '&country=' + country + '&city=' + city + '&detail=' + detail;  
	 $.ajax({
		
		url : "client_validate.php?id=9",
		type: "POST",
		data : dataString,
		cache: false,
		success: function(result)
		{
		
		   result.id;
		   result.text;
		   $select = $('#bank');
		   $select.append('<option id="' + result.id+ '">' +result.text + '</option>');
		   $.magnificPopup.close();		   
           $().toastmessage('showSuccessToast', "Bank Detail Added Successfully");
		},
		error: function (jqXHR, textStatus, errorThrown)
		{
	 				debugger;
				}
		});	
		
		
		
}
function Submit(obj){
debugger;
var realname=$("#realname").val();
var emid=$("#idnum").val();
var email=$("#email").val();
var contact=$("#mobile").val();
var phone=$("#phone").val();
var address=$("#address").val();
var passport=$("#passport").val();
var pbox=$("#pbox").val();
var title=$("#jtitle").val();
var fax=$("#fax").val();
var account_no=$("#accountno").val();
var bank=$("#bank").val();
var nation=$("#nationality").val();
var companyname=$("#cname").val();
var notes=$("#notes").val();
var companyact=$("#cactivity").val();
var sponsor=$("#sponsor").val();

var ab =$('#vendor').is(':checked');

 
if(ab){

 var dataString= 'realname=' + realname + '&idnum=' + emid + '&email=' + email + '&mobile=' + contact + '&phone='  +phone  + '&address='  +address 
 + '&passport='  +passport+ '&pbox='  +pbox 
 + '&jtitle='  +title+ '&fax='  +fax
 + '&accountno='  +account_no+ '&bank='  +bank
 + '&nationality='  +nation+ '&cname='  +companyname
 + '&notes='  +notes+ '&cactivity='  +companyact+ '&sponsor='  +sponsor+ '&vender='  +'1';	
}
else{
	 var dataString= 'realname=' + realname + '&idnum=' + emid + '&email=' + email + '&mobile=' + contact + '&phone='  +phone  + '&address='  +address 
 + '&passport='  +passport+ '&pbox='  +pbox 
 + '&jtitle='  +title+ '&fax='  +fax
 + '&accountno='  +account_no+ '&bank='  +bank
 + '&nationality='  +nation+ '&cname='  +companyname
 + '&notes='  +''+ '&cactivity='  +''+ '&sponsor='  +sponsor + '&vender='  +'0';  
	}

	 $.ajax({
		
		url : "client_validate.php?id=11",
		type: "POST",
		data : dataString,
		cache: false,
		success: function(result)
		{
		
		   result.id;
		   result.text;
           if(result.id=='0')
           {
               $().toastmessage('showErrorToast', "Email is Already Registered");
           }
           else {
            document.getElementById("loginform").reset();
			document.getElementById("login2form").reset();	   
			$().toastmessage('showSuccessToast', "Record Added Successfully");
           }

		},
		error: function (jqXHR, textStatus, errorThrown)
		{
	 				debugger;
				}
		});	
}
	function venderservice(obj)
	{		if(obj.checked)
		{
			$( "#result" ).load("vendor.php");
		}
		else
		{
			$("#result").empty();
		}
	}
    </script>

   <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html>