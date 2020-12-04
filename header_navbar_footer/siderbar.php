<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <!-- <img src="user2-160x160.jpg" class="rounded-circle" alt="User Image"> -->
            <?php if (!empty($user['profile_img'])) {?>
            <img src="<?php echo BASE_URL_LINK ;?>image/users_profile_cover/<?php echo $user['profile_img'] ;?>" class="rounded-circle" alt="User Image">
            <?php  }else{ ?>
              <img src="<?php echo BASE_URL_LINK.NO_PROFILE_IMAGE_URL ;?>" alt="User Image" class="rounded-circle">
            <?php } ?>
          </div>
          <div class="pull-left info">
            <!-- <p>Alexander Pierce</p> -->
            <p><?php echo $user['username'];?></p>
            <a href="#">
              <?php if ($user['chat'] == 'on') { ?>
                      <i class="fa fa-circle text-success"></i>
							<?php }else {?>
                      <i class="fa fa-circle text-danger"></i>
							<?php } ?>
            Online</a>
          </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control formnsider" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat formnsider"><i class="fa fa-search"></i>
              </button>
            </span>
          </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <!-- <li class="header">MAIN NAVIGATION</li> -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="dashboard.php"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="hashtag.php">
              <i class="fa fa-hashtag"></i> <span>Hashtag</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                <!-- <small class="label pull-right bg-green">new</small> -->
              </span>
            </a>
            <ul class="treeview-menu">
            <?php echo $trending->trends_hashtag() ;?>
              <!-- <li><a href="hashtag.php"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Dashboard v2</a></li> -->
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-user"></i> <span>Profile</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                <!-- <small class="label pull-right bg-green">new</small> -->
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="profile.php"><i class="fa fa-circle-o text-yellow"></i>Your Profile</a></li>
              <li><a href="profileEdit.php"><i class="fa fa-circle-o text-yellow"></i> Profile Edit</a></li>
            </ul>
          </li>
          <li>
            <a href="network.php">
              <i class="fa fa-users"></i> <span>Network</span>
              <span class="pull-right-container" style="margin-right: 10px;">
                <small class="label pull-right"><i class="fa fa-search"></i></small>
              </span>
            </a>
          </li>
          <!-- <li class="treeview active"> -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-files-o"></i>
              <span>Options</span>
              <span class="pull-right-container">
                <span class="badge badge-primary pull-right">13</span>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="top-nav.php"><i class="fa fa-circle-o text-yellow"></i> Job</a></li>
              <li><a href="fixed.php"><i class="fa fa-circle-o text-aqua"></i>Professional</a></li>
              <li><a href="boxed.php"><i class="fa fa-shopping-basket "></i>Marketplace</a></li>
              <li><a href="boxed.php"><i class="fa fa-money "></i> gushoraStartUp</a></li>
              <li><a href="fixed.php"><i class="fa fa-circle-o text-red"></i>Events</a></li>
              <li><a href="fixed.php"><i class="fa fa-heartbeat"></i>Fundraising</a></li>
              <li><a href="fixed.php"><i class="fa fa-microphone"></i>Entertainment</a></li>
              <li><a href="fixed.php"><i class="fa fa-cutlery"></i>Foodzana</a></li>
              <!-- <li><a href="fixed.php"><i class="fa fa-film"></i>Movies</a></li>
              <li><a href="fixed.php"><i class="fa fa-circle-o"></i>Sport</a></li> -->
              <li><a href="fixed.php"><i class="fa fa-shopping-basket"></i>Cyamunara</a></li>
              <li><a href="fixed.php"><i class="fa fa-home"></i>House</a></li>
              <li><a href="fixed.php"><i class="fa fa-car"></i>Car</a></li>
              <li><a href="fixed.php"><i class="fa fa-building"></i>School</a></li>
          </li>
        </ul>
        </li>
        <li>
          <a href="setting.php">
            <i class="fa fa-gear"></i> <span>Setting</span>
            <span class="pull-right-container" style="margin-right: 10px;">
              <small class="label pull-right"><i class="fa fa-files-o"></i></small>
            </span>
          </a>
        </li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>