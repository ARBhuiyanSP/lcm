<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h5><img src="images/logo.png" height="25px"/> LC Management System</h5>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Lc View - [Industrial]</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<?php
$sl_no=$_GET['no'];
$sql = "select * from `lc_industrial` where `sl_no`='$sl_no'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

$bank = $row['bank'];
?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">LC Details View - [Industrial] 
					<button type="button" class="btn btn-info btn-xs" onclick="window.location.href='lc_industrial_list.php';"><i class="nav-icon fas fa-bars"></i> Back To LC List</button>
				</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!-- Main content -->
				<div class="invoice p-3 mb-3">
				  <!-- title row -->
				  <div class="row">
					<div class="col-12">
					  <h4>
						<i class="fas fa-globe"></i> LCAF No : <?php echo $row['lcaf_no']; ?>
						<small class="float-right">Date: 2/10/2014</small>
					  </h4>
					</div>
					<!-- /.col -->
				  </div>
				</div>
				<!-- /.invoice -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>