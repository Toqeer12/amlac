    
         <?php include'raw_detail.php';?>
      <ul class="sidebar-menu">
        <li class="has-sub active">
          <a href="javascript:;" class="">
              <span class="icon-box"> <i class="icon-dashboard"></i></span>  <?php GetProperty('realstatesection',$_SESSION['rtl']); ?>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                   <li class=""><a class="" href="admin_client_property_detail.php"><?php GetProperty('properties',$_SESSION['rtl']); ?></a></li>
                    <li class=""><a class="" href="admin_view_lease_info.php"><?php GetProperty('leaser',$_SESSION['rtl']); ?></a></li>
                    <li class=""><a class="" href="#">View Payment</a></li> 
                   <li class=""><a class="" href="admin_reg_user.php"><?php GetProperty('addclient2',$_SESSION['rtl']); ?></a></li>
                   <li class=""><a class="" href="admin_user_access.php"><?php GetProperty('upgrade',$_SESSION['rtl']); ?><span class="badge badge-important">
                   <?php 
                  echo upgradecount();
                   ?></span></a></li>
                  </ul>
        </li> 
 
 
        <li><a class="" href="logout.php"><span class="icon-box"><i class="icon-user"></i></span><?php GetProperty('logout',$_SESSION['rtl']); ?></a></li>
      </ul>
      <!--view_payment_info.php-->