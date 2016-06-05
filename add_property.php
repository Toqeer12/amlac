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
 <?php 

    include 'css_header.php';
?>
 
<script src="js/scripts.js"></script>
	<style type="text/css">
    
    #modal {
      margin: 0 auto;
      padding: 0.5em;
      width: 1500px;
      height: 500px;
      background: #eee;
      font-size: 8px;}
    #modal4 {
      margin: 0 auto;
      padding-left: 0.5px;
      width: 500px;
      height: 100px;
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
   include 'header.php';?>
       <!-- BEGIN TOP NAVIGATION BAR -->
 
       <!-- END TOP NAVIGATION BAR -->
   </div>
   <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->
   <div id="container" class="row-fluid" <?php echo $_SESSION['rtl'];?>>
      <!-- BEGIN SIDEBAR -->
        <div id="sidebar" class="nav-collapse collapse">
      <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
       <!-- BEGIN SIDEBAR TOGGLER BUTTON -->

      <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
      <div class="navbar-inverse">
        <form class="navbar-search visible-phone">
          <input type="text" class="search-query" placeholder="Search" />
        </form>
      </div>
      <!-- END RESPONSIVE QUICK SEARCH FORM -->
      <!-- BEGIN SIDEBAR MENU -->
   <?php 
include 'header_menu.php';

?>
      <!-- END SIDEBAR MENU -->
    </div>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->   
      <div id="main-content"  <?php echo $_SESSION['rtl'];?>>
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">

                  <h3 class="page-title">
                   <?php GetProperty('propertyinfo',$_SESSION['rtl']); ?>
                   
                  </h3>

               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
           <div class="row-fluid">
      <div class="widget">
 <!-- Get Label Text From XML File Using Fuction  Define in Raw Details-->
          <div class="widget-body">
            <form id="loginform" class="form-horizontal" action="property_validate.php?id=2" method="POST" <?php echo $_SESSION['rtl'];?>>
            
              <div class="span4" <?php echo $_SESSION['rtl'];?>>
                  <strong><?php GetProperty('basicinfo',$_SESSION['rtl']); ?></strong><br />
          
                  <div class="control-group">
                      <label class="control-label"> <?php GetProperty('propertyname',$_SESSION['rtl']); ?></label>
                      <div class="controls">
                    <input name="pname"id="pname" type="text" placeholder="Propery Name"   required/>
                      </div>
                  </div>
                  <div class="control-group">
                      <label class="control-label"><?php GetProperty('propertytype',$_SESSION['rtl']); ?></label>
                      <div class="controls">
			<select  id="propteryname" name="propteryname">
            
            <!-- Fetching Data From Raw Details-->
            <?php
            
                    $property_type = Property_Type();
                    for($i=0; $i < count($property_type); $i++)
                    {           
                    ?>
				<option value="<?php echo $property_type[$i]['id'];?>"><?php echo $property_type[$i]['prop_type'];?></option><?php
                    }
            ?>	
  			</select>
           <input name="desig"id="buttonaddproperty" type="image" src="img/PLUS.jpg" placeholder="Owner" required/>
                      </div>
                  </div>
                  <div id="result">

                  </div>
               <div class="control-group">
                      <label class="control-label">Block No</label>
                      <div class="controls">
                       <input name="blockno"id="blockno" type="text" placeholder="Propery Name"   required/>
                      </div>
                  </div>

           <strong><?php GetProperty('ownerinfo',$_SESSION['rtl']); ?></strong><br />
              <br />              
                  <div class="control-group">
                      <label class="control-label"><?php GetProperty('owner',$_SESSION['rtl']); ?></label>
                      <div class="controls">      
             <select  id="serivce_classes" name="serivce_classes">
                 <option value="0">Please Select Owner</option>
             <?php
                    $var=$_SESSION['Id'];
                    $client_detail = clientDetail($var);
                    for($i=0; $i < count($client_detail); $i++)
                    {           
                    ?>
				<option value="<?php echo $client_detail[$i]['id'];?>"><?php echo $client_detail[$i]['real_name'];?></option><?php
                    }
                    ?>	
            </select>
            <input name="desig"id="button" type="image" src="img/PLUS.jpg" placeholder="Owner" required/>
                      </div>
                  </div>
                  <div class="control-group">
                      <label class="control-label"><?php GetProperty('deedno',$_SESSION['rtl']); ?></label>
                      <div class="controls">
                  <input name="instno"id="instno" type="text"  placeholder="Instrument No" required/>
                      </div>
                  </div>

              </div>
              <div class="span4" <?php echo $_SESSION['rtl'];?>><br>
              <div class="control-group">
                  <label class="control-label"><?php GetProperty('address',$_SESSION['rtl']); ?></label>
                   <div class="controls">
                     <input name="paddress"id="paddress" type="text" placeholder="Address" required/>
                   </div>
             </div>
              <div class="control-group">
                  <label class="control-label"><?php GetProperty('contructdate',$_SESSION['rtl']); ?></label>
                   <div class="controls">
                        <input name="ybuild"id="ybuild" type="date" placeholder="Year Build" required/>
                    </div>
              </div>
             <div class="control-group">
                 <label class="control-label"><?php GetProperty('abouthim',$_SESSION['rtl']); ?></label>
                  <div class="controls">
                      <textarea rows="2" cols="100" id="about" name="about" placeholder="About Him*"></textarea>
                   </div>
            </div>
            <div class="control-group">
              <div class="controls">
              </div>
           </div>
           <div class="control-group">
              <label class="control-label"><?php GetProperty('propertyno',$_SESSION['rtl']); ?></label>
                <div class="controls">
                  <input name="pn"id="pn" type="text" placeholder="Property No" required/>
                </div>
           </div>
           <div class="control-group">
               <label class="control-label"><?php GetProperty('deeddate',$_SESSION['rtl']); ?></label>
                   <div class="controls">
                       <input name="dateinst"id="dateinst" type="date" placeholder="Year" required/>
                  </div>
          </div>
</div>
              
              <div class="loader"></div>

              <div class="clearfix"></div>
                                              <div class="control-group">
                      <label class="control-label"><?php GetProperty('locationmap',$_SESSION['rtl']); ?></label>
                      <div class="controls">
       <input type="hidden" id="cmnd_status" name="cmnd_status" placeholder="" value="location1">
       <div id="map-canvas" style="width: 90%; height: 320px;left:1px;right:1px;border: 1px solid;border-radius: 5px;box-shadow: -5px 5px 5px 1px #888888;"></div>
       <br>
	   <p><input type="hidden" id="latitude" name="latitude"  value=""/> </p>
      <p><input type="hidden" id="longitude" value=""  name="longitude"/></p> 
                      </div>
                  </div>
              <input type="submit" id="login-btn" class="btn btn-primary" value="<?php  GetProperty('submit',$_SESSION['rtl']);?>" />
              </div>
              <div class="form-actions">
                  
              </div>
              
       
                      
          </div>
      </div>
    </form>
  </div>


<div id="modal4" class="white-popup-block mfp-hide">
        <input class="popup-modal-dismiss" action="#" type="image" src="img/cross-sign.jpg" placeholder="Owner" required/>
        <!-- <a class="popup-modal-dismiss" href="#">Dismiss</a> -->
    <h4>Add New Property Title</h4>
<div class="row-fluid" <?php echo $_SESSION['rtl'];?>>
      <div class="widget">
           <div class="widget-body">
       
               <form id="loginform" class="form-horizontal"   method="POST">
              <div class="span45"  >
                  <div class="control-group">
                      <label class="control-label"><?php GetProperty('propertytype',$_SESSION['rtl']);?></label>
                      <div class="controls">
                        <input name="scripttitle"id="scripttitle" pattern="[a-zA-Z\s]+" type="text" placeholder="Jhon" required/>
                      </div>
                  </div>
              </div>

              <div class="clearfix"></div>

              <div class="form-actions">
                   <input name="submit" type="button"  class="btn btn-primary" value="Submit"  onClick="popuptitle()"/>
              </div>
              </form>
          </div>
    
      </div>
  </div>
</div>

      <div id="modal" class="white-popup-block mfp-hide">
        <input class="popup-modal-dismiss" action="#" type="image" src="img/cross-sign.jpg" placeholder="Owner" required/>
        <!-- <a class="popup-modal-dismiss" href="#">Dismiss</a> -->
    <h3>Add New Tenant</h3>
<div class="row-fluid"  <?php echo $_SESSION['rtl'];?> >
      <div class="widget">
           <div class="widget-body">
            <form id="loginform" class="form-horizontal"   method="POST">
         
              <div class="span4"  >
                  <div class="control-group">
                      <label class="control-label"><?php GetProperty('realname',$_SESSION['rtl']);?></label>
                      <div class="controls">
                        <input name="realname"id="realname" pattern="[a-zA-Z\s]+" type="text" placeholder="Jhon" required/>
                      </div>
                  </div>
                  <div class="control-group">
                      <label class="control-label"><?php GetProperty('email',$_SESSION['rtl']);?></label>
                      <div class="controls">
                      <input name="email"id="email" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" type="text" placeholder="example@xyz.com" required/>
         
                      </div>
                  </div>
                  <div class="control-group">
                      <label class="control-label"><?php GetProperty('phoneno',$_SESSION['rtl']);?></label>
                      <div class="controls">
                      <input name="phone"id="phone" type="text" placeholder="04xxxxxx"  required/>

                      </div>
                  </div>

                  <div class="control-group">
                      <label class="control-label"><?php GetProperty('passport',$_SESSION['rtl']);?></label>
                      <div class="controls">
                      <input name="passport"id="passport" pattern="[a-zA-Z0-9\s]+" type="text" placeholder="gvxxxxx" required/>

                      </div>
                  </div>
                  <div class="control-group">
                      <label class="control-label"><?php GetProperty('jobtitle',$_SESSION['rtl']);?></label>
                      <div class="controls">
                      <input name="jtitle"id="jtitle" type="text" pattern="[a-zA-Z\s]+" placeholder="admin" required/>

                      </div>
                  </div>

              </div>
              <div class="span6">
                  <div class="control-group">
                      <label class="control-label"><?php GetProperty('em_id',$_SESSION['rtl']);?></label>
                      <div class="controls">
                         <input name="idnum"id="idnum" type="num" pattern="[0-9]+" placeholder="452xxxxx" required/>
                      </div>
                  </div>
                  <div class="control-group">
                      <label class="control-label"><?php GetProperty('mobileno',$_SESSION['rtl']);?></label>
                      <div class="controls">
                		<input name="mobile"id="mobile" type="tel" pattern="^\d{3}\d{6}\d{3}$" placeholder="971xxxxx" required/>
                      </div>
                  </div>
                  <div class="control-group">
                      <label class="control-label"><?php GetProperty('addresscust',$_SESSION['rtl']);?></label>
                      <div class="controls">
                      <input name="address"id="address" pattern="[a-zA-Z0-9\s]+" type="text" placeholder="Xyz" required/>

                      </div>
                  </div>
                  <div class="control-group">
                      <label class="control-label"><?php GetProperty('nationality',$_SESSION['rtl']);?></label>
                      <div class="controls">
                        <select id="pbox" name="pbox">
<!--                         <option value="">Property Type</option>-->
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
                       </select>
                      </div>
                  </div>
                  <div class="control-group">
                      <label class="control-label"><?php GetProperty('fax',$_SESSION['rtl']);?></label>
                      <div class="controls">
                      <input name="fax"id="fax" type="num" pattern="[0-9]+" placeholder="05xxxx" required/>

                      </div>
                  </div>
              </div>
              <div class="clearfix"></div>

                    
              <div class="form-actions">
                   <input name="submit" type="button"  class="btn btn-primary" value="<?php GetProperty('submit',$_SESSION['rtl']);?>"  onClick="popup()"/>
              </div>
                 </form>
          </div>
    
      </div>
  </div>
</div>



      </div>
    </div>
   <!-- END CONTAINER -->
   <!-- BEGIN FOOTER -->
   <div id="footer">
       2013 &copy; Admin Lab Dashboard.
<!--       <div class="span pull-right">
         <span class="go-top"><i class="icon-arrow-up"></i></span>
      </div> -->
   </div>
   <!-- END FOOTER -->
   <!-- BEGIN JAVASCRIPTS -->    
   <!-- Load javascripts at bottom, this will reduce page load time -->




   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]-->
   <!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->


<!-- Magnific Popup core JS file -->
 <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script src="assets/main/javascript/jquery.toastmessage.js"></script>
 <script src="js/jquery.blockUI.js"></script>
 <script src="http://cdn.jsdelivr.net/jquery.magnific-popup/0.9.9/jquery.magnific-popup.min.js"></script>


<script src="toastr.js"></script>

   <script type="text/javascript">
    $(window).load(function() {
	$(".loader").fadeOut("slow");
})
$(document).ready(function() {
 
  $('#button').magnificPopup({
    type: 'inline',
    items: {src: '#modal'},
    preloader: false,
    modal: true
  });
  $('#buttonaddproperty').magnificPopup({
    type: 'inline',
    items: {src: '#modal4'},
    preloader: false,
    modal: true
  });
 
  
});
$(document).on('click', '.popup-modal-dismiss', function (e) {
    e.preventDefault();
    $.magnificPopup.close();
        $('form')[0].reset();
  });
</script>


  
                      
<script>
    var map;
    var marker;
    var infowindowPhoto = new google.maps.InfoWindow();
    var latPosition;
    var longPosition;
    
    function initialize() {
    
        var mapOptions = {
            zoom: 19,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
           // center: new google.maps.LatLng(10,10)
        };
    
        map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
        
        initializeMarker();
    }
    
    function initializeMarker() {
    
        if (navigator.geolocation) {
            
            navigator.geolocation.getCurrentPosition(function (position) {
                
                var pos = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
    
                latPosition = position.coords.latitude;
                longPosition = position.coords.longitude;
    
                marker = new google.maps.Marker({
                    position: pos,
                    draggable: true,
                    animation: google.maps.Animation.DROP,
                    map: map
                });
                
                map.setCenter(pos);
                updatePosition();
    
                google.maps.event.addListener(marker, 'click', function (event) {
                    updatePosition();
                });
    
                google.maps.event.addListener(marker, 'dragend', function (event) {
                    updatePosition();
                });
            });
        }
    }
    
    function updatePosition() {
    
        latPosition = marker.getPosition().lat();
        longPosition = marker.getPosition().lng();
    
        contentString = '<div id="iwContent">Lat: <span id="latbox">' + latPosition + '</span><br />Lng: <span id="lngbox">' + longPosition + '</span></div>';
        
        document.getElementById('latitude').value = latPosition;
        document.getElementById('longitude').value = longPosition;
        
        infowindowPhoto.setContent(contentString);
        infowindowPhoto.open(map, marker);
    }
    
    initialize();
	
	function changeTest(obj){
	debugger;
	var ab=obj.options[obj.selectedIndex].value;

//	$( "#result" ).load("grid_lease.php?id="+ab);
	
		var oth =obj.options[obj.selectedIndex].value;
		if(oth==="other")
		{
			$( "#result" ).load("add_new_property.php");
		
		}
		
        
      }
	function popup()
	{ debugger;

 var realname= $("#realname").val();
 var email=$("#email").val();
 var phone=$("#phone").val();
 var passport=$("#passport").val();
 var idnum=$("#idnum").val();
 var jtitle=$("#jtitle").val();
 var address=$("#address").val();
 var mobile=$("#mobile").val();
 var pbox=$("#pbox").val();
 var fax=$("#fax").val();
 var dataString= 'realname='+ realname + '&email='+ email + '&idnum='+idnum + '&mobile='+ mobile + '&phone='+ phone  + '&address='+ address  + '&fax='+ fax + '&jtitle='+jtitle + '&pbox='+pbox + '&passport='+passport;  
$.ajax({
    url : "client_validate.php?id=1",
    type: "POST",
    data : dataString,
	cache: false,
    success: function(result)
    {
        	debugger;

	   result.id;
	   result.text;

	
	  	
	   if(result.id=='0')
       {
                  $().toastmessage('showErrorToast', "Email is Already Exist");
                    document.getElementById("loginform").reset();	
                    $.magnificPopup.close();
       }
       else{
       $select = $('#serivce_classes');
	   $select.append('<option value="' + result.id+ '">' +result.text + '</option>');
       document.getElementById("loginform").reset();	 
	   $.magnificPopup.close();
       $().toastmessage('showSuccessToast', "Owner Added Successfully");
       }
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
         debugger;
         
         
    }
});		
	}
	
	
	function popuptitle()
	{

 var realname= $("#scripttitle").val();

 var dataString= 'proptypenew='+ realname; 
$.ajax({
	
    url : "client_validate.php?id=5",
    type: "POST",
    data : dataString,
	cache: false,
    success: function(result)
    {
	 if (result) {
		 
       result.id;
	   result.text;
	   $select = $('#propteryname');
	
	   $select.append('<option id="' + result.id+ '">' +result.text + '</option>');
	    $.magnificPopup.close();
         $().toastmessage('showSuccessToast', "Property Title is Added Successfully");
    }
	else
	{
		alert("fail");
	    $.magnificPopup.close();	
	}
   
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
 
    }
});		


	}
 
	</script>
   <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html>