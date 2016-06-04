
          <?php
    session_start();       
   if($_SESSION['exp']=='invalid'){

 header("location:login.php");
unset($_SESSION['user']);
unset($_SESSION['company']);
unset($_SESSION['Id']);
unset($_SESSION['fulname']);

} ?> 
            <div class="row-fluid">
               <div class="span44" <?php echo $_SESSION['rtl'];?>>
<label class="control-label">Choose Units</label>
                  <div class="widget">
                     <div class="widget-body">
                        <table class="table table-hover">
                           <thead>
                              <tr>
                                 <th>#</th>
                                 <th>Unit Number</th>
                                 <th>Type</th>
                                 <th>Annual Rent Amount</th>
                                 <th>Insurance Amount</th>
                                 <th>Commission</th>
                                 <th>Status</th>
                              </tr>
                           </thead>
                           <tbody>
                                    		<?php 
		
require('connect.php');
echo $_GET['id'];
		$sql = ("SELECT * FROM real_state_unit where property_name='".$_GET['id']."' ")or die(mysql_error());
	$result=mysql_query($sql); 
  if($result){
while($row = mysql_fetch_assoc($result)) {
  echo "<tr>";
  ?>
  <td>
  <input type="checkbox" data-status="<?php echo $row['status'];?>" id="<?php echo 'users'.$row['id'];?>" data-id="<?php echo $row['id']; ?>" data-unit="<?php echo $row['block_no'];?>" data-anual-lease="<?php echo $row['annul_lease']; ?>" name="users<" value="<?php echo $row['id']; ?>" onClick="payment(this)">
  </td>
  <?php
  
  echo "<td id='unit'>" . $row['block_no'] . "</td>";
     $resultdata_comm=mysql_query(" SELECT * FROM  `property_type`  where id='".$row['property_type']."'")or die(mysql_error());
    $data_comm=mysql_fetch_assoc($resultdata_comm);
  echo "<td>" . $data_comm['prop_type'] . "</td>";
  echo "<td id='anullease'>" . $row['annul_lease'] . "</td>";
  echo "<td>" . $row['ins_amount'] . "</td>";
  echo "<td>" . $row['comission'] . "</td>"; 
  echo "<td id='status'> " . $row['status'] . "</td>";   
  echo "</tr>";
}

 ?>
      
                                    </tbody>
                                    </table>

<?php
}?>
                     </div>
                  </div>

               </div>

           
            </div>
           