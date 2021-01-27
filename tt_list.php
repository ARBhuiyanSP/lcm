<?php include 'header.php'; ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
<?php include 'sidebar.php'; ?>
<style>
.table td{
	padding:3px 5px 3px 12px;
}
.dbclr{
	background-color:#f0c80d;
	color:#000000;
}
.ucbclr{
	background-color:#db0a3b;
	color:#ffffff;
}
.oneclr{
	background-color: #acad75;
	color:#ffffff;
}
.nccclr{
	background-color: #17A2B8;
	color:#ffffff;
}
</style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h5><img src="images/logo.png" height="25px"/> LC Management System</h5>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">TT List - [Commercial]</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List of TT - [Commercial]</h3>
				<button type="button" class="btn btn-info btn-xs" onclick="window.location.href='tt-entry.php';"><i class="nav-icon fas fa-plus"></i> New Entry</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="10%">LCAF No</th>
							<th width="15%">Importer Name</th>
							<th width="15%">IRC No</th>
							<th width="10%">LC Amount</th>
							<th width="10%">Bank</th>
							<th>Items</th>
							<th width="12%" class="TAC">Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$item_details = getTableDataByTableName('tt', '', 'id');
						if (isset($item_details) && !empty($item_details)) {
							foreach ($item_details as $item) {
						
						
								if($item['bank'] == 'Dhaka Bank')
								{ 
									$bankclr = 'dbclr';
								}else if($item['bank'] == 'UCB Bank'){
									$bankclr = 'ucbclr';
								}else if($item['bank'] == 'One Bank'){
									$bankclr = 'oneclr';
								}else if($item['bank'] == 'NCC Bank'){
									$bankclr = 'nccclr';
								}else{
									$bankclr = '';
								} 
							?>
						<tr>
							<td class="<?php echo $bankclr; ?>"><?php echo $item['lcaf_no']; ?></td>
							<td class="<?php echo $bankclr; ?>"><?php echo $item['importer_name']; ?></td>
							<td class="<?php echo $bankclr; ?>"><?php echo $item['irc_no']; ?></td>
							<td class="<?php echo $bankclr; ?>"><?php echo $item['lc_amount']; ?></td>
							
							<td class="<?php echo $bankclr; ?>"><?php echo $item['bank']; ?></td>
							<td class="<?php echo $bankclr; ?>"><?php echo $item['description_of_item_imported']; ?></td>
							<td class="TAC">
								<a href="lc_industrial_view.php?no=<?php echo $item['sl_no']; ?>" title="View" class="icon-button btn btn-success" style="padding:3px;"><i class="fas fa-eye"></i></a> 
								<a href="tt_print.php?no=<?php echo $item['sl_no']; ?>" title="Bank Print" class="icon-button btn btn-primary" style="padding:3px;"><i class="fas fa-print"></i></a> 
								<a href="#" class="icon-button btn btn-info" style="padding:3px;"><i class="fas fa-edit"></i></a>
								<a href="#" class="icon-button btn btn-danger" style="padding:3px;"><i class="fas fa-trash"></i></a>
							</td>
						</tr>
						<?php }} ?>
					</tbody>
					<tfoot>
						<tr>
							<th width="10%">LCAF No</th>
							<th width="15%">Importer Name</th>
							<th width="15%">IRC No</th>
							<th width="10%">LC Amount</th>
							<th width="10%">Bank</th>
							<th>Items</th>
							<th width="12%" class="TAC">Actions</th>
						</tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include 'footer_content.php'; ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php include 'footer.php'; ?>
