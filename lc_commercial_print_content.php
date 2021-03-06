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
<?php
$sl_no=$_GET['no'];
$sql = "select * from `lc_commercial` where `sl_no`='$sl_no'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

$bank = $row['bank'];
?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
			<div class="col-md-12">
				<div class="card">
				  <div class="card-header">
					<h3 class="card-title">LC Print View - [Commercial]</h3>
				  </div>
				  <!-- /.card-header -->
				  <div class="card-body">
					<!-- we are adding the accordion ID so Bootstrap's collapse plugin detects it -->
					<?php 
						if($bank == 'Dhaka Bank')
						{ 
							include('lc_layout/commercial_dhaka_bank_1.php');
							include('lc_layout/commercial_dhaka_bank_2.php');
							include('lc_layout/commercial_dhaka_bank_2b.php');
						}else if($bank == 'UCB Bank'){
							include('lc_layout/commercial_ucb_bank_1.php');
							include('lc_layout/commercial_ucb_bank_2.php');
							include('lc_layout/commercial_ucb_bank_2b.php');
						}else if($bank == 'One Bank'){
							include('lc_layout/commercial_one_bank_1.php');
							include('lc_layout/commercial_one_bank_2.php');
						}else if($bank == 'NCC Bank'){
							include('lc_layout/commercial_ncc_bank_1.php');
							include('lc_layout/commercial_ncc_bank_2.php');
							include('lc_layout/commercial_ncc_bank_2b.php');
						}else{
							echo 'Something Error ! Layout May Not Found...!';
						} 
					?>
				  </div>
				  <!-- /.card-body -->
				</div>
				<!-- /.card -->
			</div>
        </div>
        <!-- /.row -->
    </div><!--/. container-fluid -->
</section>