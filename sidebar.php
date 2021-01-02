<style>
.nav-sidebar>.nav-item {
	border:1px solid rgba(0, 0, 0, 0.125);
	background-color:#e9ecef;
	margin-bottom:2px;
	
}
.nav-sidebar>.nav-item p{
	color: #000;
}
.sidebar-dark-info{
	background-color:#17A2B8;
}
</style>
<aside class="main-sidebar sidebar-dark-info elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard.php" class="brand-link">
      <img src="images/favicon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SAIF POWERTEC LTD</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block" style="color:#ffffff;font-weight:bold;"><?php echo $_SESSION['logged']['user_name']; ?>-[<?php echo $_SESSION['logged']['user_type']; ?>]</a>
		  <small><a href="includes/logout.php">Logout</a></small>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt" style="color: #17A2B8;"></i>
              <p> Dashboard</p>
            </a>
          </li>
		  <li class="nav-header">SET UP</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cog" style="color: #17A2B8;"></i>
              <p>
                Master Setup
                <i class="fas fa-angle-left right" style="color: #17A2B8;"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="bank.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bank</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="country.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Country</p>
                </a>
              </li>
              
            </ul>
          </li>
		  
          <li class="nav-header">USER OPTION</li>
		  <li class="nav-item">
            <a href="lc_industrial_list.php" class="nav-link">
              <i class="nav-icon fas fa-copy" style="color: #17A2B8;"></i>
              <p>LC - Industrial</p>
            </a>
          </li>
		  <li class="nav-item">
            <a href="lc_commercial_list.php" class="nav-link">
              <i class="nav-icon fas fa-copy" style="color: #17A2B8;"></i>
              <p>LC - Commercial</p>
            </a>
          </li>
          <li class="nav-header">REPORTS</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-chart-pie nav-icon" style="color: #17A2B8;"></i>
              <p>Level 1</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
