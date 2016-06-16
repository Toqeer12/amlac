 
	 
	  <ul class="sidebar-menu">
        <li class="has-sub active">
          <a href="javascript:;" class="">
              <span class="icon-box"> <i class="icon-dashboard"></i></span> <?php GetProperty('realstatesection',$_SESSION['rtl']); ?>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li class=""><a class="" href="add_property.php"><?php GetProperty('addnewproperty',$_SESSION['rtl']); ?></a></li>
                         <li><a class="" href="add_client.php"><?php GetProperty('addclienttitle',$_SESSION['rtl']); ?></a></li>
                   <li class=""><a class="" href="add_real_stat_unit.php"><?php GetProperty('addnewunit',$_SESSION['rtl']); ?></a></li>
                   <li class=""><a class="" href="add_lease.php"><?php GetProperty('addnewlease',$_SESSION['rtl']); ?></a></li>

                    </ul>
        </li>
				<li class="has-sub active">
					<a href="javascript:;" class="">
					    <span class="icon-box"> <i class="icon-book"></i></span> <?php GetProperty('overview',$_SESSION['rtl']); ?>
					    <span class="arrow"></span>
					</a>
					<ul class="sub">
						<li><a class="" href="prop_overview.php"><?php GetProperty('properties',$_SESSION['rtl']); ?></a></li>
						<li><a class="" href="lease_overview.php"><?php GetProperty('lease',$_SESSION['rtl']); ?></a></li>
                        <li><a class="" href="customer.php"><?php GetProperty('addcustomer',$_SESSION['rtl']); ?></a></li>
					</ul>
				</li>
				<li class="has-sub active">
					<a href="javascript:;" class="">
					    <span class="icon-box"> <i class="icon-book"></i></span> <?php GetProperty('finance',$_SESSION['rtl']); ?>
					    <span class="arrow"></span>
					</a>
					<ul class="sub">
						<li><a class="" href="finance.php"><?php GetProperty('leasepayment',$_SESSION['rtl']); ?></a></li>
						<li><a class="" href="voucher.php"><?php GetProperty('voucher',$_SESSION['rtl']); ?></a></li>
                   <!--     <li><a class="" href="#"><?php GetProperty('outcome',$_SESSION['rtl']); ?></a></li>-->
					   	<li><a class="" href="outcome.php"><?php GetProperty('outcome',$_SESSION['rtl']); ?></a></li>
                       <li><a class="" href="income.php"><?php GetProperty('income',$_SESSION['rtl']); ?></a></li>
					</ul>
				</li>
				 <li class="has-sub active">
					<a href="javascript:;" class="">
					    <span class="icon-box"> <i class="icon-book"></i></span> <?php GetProperty('notify',$_SESSION['rtl']); ?>
					    <span class="arrow"></span>
					</a>
					<ul class="sub">
						<li><a class="" href="notification.php"><?php GetProperty('notify',$_SESSION['rtl']); ?></a></li>
 
					</ul>
				</li>
        <li><a class="" href="logout.php"><span class="icon-box"><i class="icon-user"></i></span> <?php GetProperty('logout',$_SESSION['rtl']); ?></a></li>
      </ul>