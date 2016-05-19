<?php
session_start(); 
 $_SESSION['rtl']='rtl';

  if($_SESSION['exp']=='invalid'){

 header("location:login.php");
unset($_SESSION['user']);
unset($_SESSION['company']);
unset($_SESSION['Id']);
unset($_SESSION['fulname']);

}

?>
            
            <div class="row-fluid">
               <div class="span6" <?php $_SESSION['rtl'];?>>
              
                                   
                                                    <div class="widget-body">
                                                          <label class="control-label">Choose Units</label>
                                                                      <select  id="unitid" name="unitid"  onChange="changeunit(this)">
                                                                      <option value="0" >Please Select Unit</option>
                                                                            <?php         
                                                                             require('connect.php');
		                                                                     $sql = ("SELECT * FROM rent_property where renter='".$_GET['id']."' ")or die(mysql_error());
	                                                                          $result=mysql_query($sql); 
                                                                             if($result){
                                                                                   if(mysql_num_rows($result) > 0)
				                                                            {
                                                                                         while($row = mysql_fetch_assoc($result)) {
                                                               
                                                                        
                                                                                                    
                                                                                                        $dataname=$row['unit'];?>
                                                                                                        <option dataprop="<?php echo $row['property_name'];?>" dataowner="<?php echo $row['owner']; ?>" value="<?php echo $dataname;?>"><?php echo $dataname;?></option>
                                                                                  <?php
                                                                                                     }
                                                                             
                                                                             
                                                                                       ?>
                                                                             </select>  
                                                          
                                                                             <?php
                                                                             
                                                                             
                                                                                    }
                                                                              
                                                                             
                                                                             }
                                                                             ?>
                                                                             
                                                                             
                                                                             
                                                                             
                                                                             
                                                                             
                                                                             
                                                         </div>
                                 

               </div>
       
         </div>