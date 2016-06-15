    
         <?php include'raw_detail.php';?>
      <ul class="sidebar-menu">
        <li class="has-sub active">
          <a href="javascript:;" class="">
              <span class="icon-box"> <i class="icon-dashboard"></i></span>  <?php GetProperty('realstatesection',$_SESSION['rtl']); ?>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                   <li class=""><a class="" href="owner_admin_main.php"><?php GetProperty('properties',$_SESSION['rtl']); ?></a></li>
                   <li><a class="" href="view_unit_info_admin.php"><?php GetProperty('unitinfo',$_SESSION['rtl']); ?></a></li>
                   <li class=""><a class="" href="view_lease_info_admin.php"><?php GetProperty('leaser',$_SESSION['rtl']); ?></a></li>
                <!--   <li class=""><a class="" href="view_payment_info.php">View Payment</a></li>-->
                   <li class=""><a class="" href="view_income_info_admin.php"><?php GetProperty('addclient2',$_SESSION['rtl']); ?></a></li>
                   <li class=""><a class="" href="view_outcome_info_admin.php"><?php GetProperty('upgrade',$_SESSION['rtl']); ?></a></li>
                  </ul>
        </li> 
 
 
        <li><a class="" href="logout.php"><span class="icon-box"><i class="icon-user"></i></span><?php GetProperty('logout',$_SESSION['rtl']); ?></a></li>
      </ul>