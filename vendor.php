
<?php
session_start();
if($_SESSION['exp']=='invalid'){
header("location:login.php");
unset($_SESSION['user']);
unset($_SESSION['company']);
unset($_SESSION['Id']);
unset($_SESSION['fulname']);

}

?>

<div class="row-fluid">                      
    <div class="widget-body">
        <form id="login2form" class="form-horizontal"  method="POST">
                  <div class="span4" <?php echo $_SESSION['rtl'];?>>          
                      <div class="control-group">
                          <label class="control-label" >Company Name</label>
                          <div class="controls">
                            <input name="cname"id="cname" pattern="[a-zA-Z\s]+" type="text" placeholder="Abc" required/>
                          </div>
                      </div>
                    <div class="control-group">
                      <label class="control-label"  >Notes</label>
                      <div class="controls">
                              <textarea rows="4" cols="50" id="notes"></textarea>
                      </div>
                    </div>
                  </div>
           
                      <div class="span6" <?php echo $_SESSION['rtl'];?>>
                      <div class="control-group">
                          <label class="control-label"  >Comapny Activity</label>
                          <div class="controls">
                             <input name="cactivity"id="cactivity" type="text" pattern="[a-zA-Z\s]+" placeholder="452xxxxx" required/>
                          </div>
                      </div>
                     </div>
       </form>
    </div>
</div> 
              