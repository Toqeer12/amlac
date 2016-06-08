     <?php include'raw_detail.php';?>
	 
	  <ul class="sidebar-menu">
        <li class="has-sub active">
          <a href="javascript:;" class="">
              <span class="icon-box"> <i class="icon-dashboard"></i></span> <?php GetProperty('realstatesection',$_SESSION['rtl']); ?>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li class=""><a class="" href="#"><?php GetProperty('addnewproperty',$_SESSION['rtl']); ?></a></li>
                         <li><a class="" href="#"><?php GetProperty('addclienttitle',$_SESSION['rtl']); ?></a></li>
                   <li class=""><a class="" href="#"><?php GetProperty('addnewunit',$_SESSION['rtl']); ?></a></li>
                   <li class=""><a class="" href="#"><?php GetProperty('addnewlease',$_SESSION['rtl']); ?>e</a></li>

                    </ul>
        </li>
				<li class="has-sub active">
					<a href="javascript:;" class="">
					    <span class="icon-box"> <i class="icon-book"></i></span> <?php GetProperty('overview',$_SESSION['rtl']); ?>
					    <span class="arrow"></span>
					</a>
					<ul class="sub">
						<li><a class="" href="#"><?php GetProperty('properties',$_SESSION['rtl']); ?></a></li>
						<li><a class="" href="#"><?php GetProperty('lease',$_SESSION['rtl']); ?></a></li>
                        <li><a class="" href="#"><?php GetProperty('addcustomer',$_SESSION['rtl']); ?></a></li>
					</ul>
				</li>
				<li class="has-sub active">
					<a href="javascript:;" class="">
					    <span class="icon-box"> <i class="icon-book"></i></span> <?php GetProperty('finance',$_SESSION['rtl']); ?>
					    <span class="arrow"></span>
					</a>
					<ul class="sub">
						<li><a class="" href="#"><?php GetProperty('leasepayment',$_SESSION['rtl']); ?></a></li>
						<li><a class="" href="#"><?php GetProperty('voucher',$_SESSION['rtl']); ?></a></li>
                   <!--     <li><a class="" href="#"><?php GetProperty('outcome',$_SESSION['rtl']); ?></a></li>-->
					   	<li><a class="" href="#"><?php GetProperty('outcome',$_SESSION['rtl']); ?></a></li>
                       <li><a class="" href="#"><?php GetProperty('income',$_SESSION['rtl']); ?></a></li>
					</ul>
				</li>
				 <li class="has-sub active">
					<a href="javascript:;" class="">
					    <span class="icon-box"> <i class="icon-book"></i></span> <?php GetProperty('notify',$_SESSION['rtl']); ?>
					    <span class="arrow"></span>
					</a>
					<ul class="sub">
						<li><a class="" href="#"><?php GetProperty('notify',$_SESSION['rtl']); ?></a></li>
 
					</ul>
				</li>
        <li><a class="" href="logout.php"><span class="icon-box"><i class="icon-user"></i></span> <?php GetProperty('logout',$_SESSION['rtl']); ?></a></li>
      </ul>