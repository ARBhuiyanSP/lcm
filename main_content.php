<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h5 class="m-0"><img src="images/logo.png" height="25px"/> LC Management System</h5>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-copy"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Amounts of LC-[Commercial]</span>
                <span class="info-box-number">
					<?php
						$sqlindamount = "SELECT SUM(`lc_amount`) AS totalamount FROM `lc_commercial`";
						$resultindamount = mysqli_query($conn, $sqlindamount);
						$rowindamount = mysqli_fetch_object($resultindamount) ;
						echo '$ '. $rowindamount->totalamount;
					?>
                  <button class="btn btn-info" onclick="window.location.href='lc_commercial_list.php'">View Details</button>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-copy"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Amounts of LC-[Industrial]</span>
                <span class="info-box-number"> 
					<?php
						$sqlcomamount = "SELECT SUM(`lc_amount`) AS totalcomamount FROM `lc_industrial`";
						$resultcomamount = mysqli_query($conn, $sqlcomamount);
						$rowcomamount = mysqli_fetch_object($resultcomamount) ;
						echo '$ '. $rowcomamount->totalcomamount;
					?>
                  <button class="btn btn-success" onclick="window.location.href='lc_industrial_list.php'">View Details</button>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-md-12">
            <?php include('home-chart.php'); ?>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
    </div><!--/. container-fluid -->
</section>