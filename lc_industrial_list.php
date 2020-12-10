<?php include 'header.php'; ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
<?php include 'sidebar.php'; ?>
<style>
.table td{
	padding:3px 5px 3px 12px;
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
              <li class="breadcrumb-item active">Lc List - [Industrial]</li>
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
                <h3 class="card-title">List of LC - [Industrial]</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="10%">SL No</th>
							<th width="10%">LCAF No</th>
							<th width="15%">Importer Name</th>
							<th width="15%">IRC No</th>
							<th width="10%">LC Amount</th>
							<th width="30%">Items</th>
							<th width="10%" class="TAC">Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$item_details = getTableDataByTableName('lc_industrial', '', 'id');
						if (isset($item_details) && !empty($item_details)) {
							foreach ($item_details as $item) {
						?>
						<tr>
							<td><?php echo $item['sl_no']; ?></td>
							<td><?php echo $item['lcaf_no']; ?></td>
							<td><?php echo $item['applicant_name']; ?></td>
							<td><?php echo $item['irc_no']; ?></td>
							<td><?php echo $item['lc_amount']; ?></td>
							<td><?php echo $item['description_of_item_imported']; ?></td>
							<td class="TAC">
								<a href="lc_industrial_view.php?no=<?php echo $item['sl_no']; ?>" title="View" class="icon-button btn btn-success" style="padding:3px;"><i class="fas fa-eye"></i></a> 
								<a href="lc_industrial_print.php?no=<?php echo $item['sl_no']; ?>" title="Bank Print" class="icon-button btn btn-primary" style="padding:3px;"><i class="fas fa-print"></i></a> 
								<a href="#" class="icon-button btn btn-info" style="padding:3px;"><i class="fas fa-edit"></i></a>
								<a href="#" class="icon-button btn btn-danger" style="padding:3px;"><i class="fas fa-trash"></i></a>
							</td>
						</tr>
						<?php }} ?>
					</tbody>
					<tfoot>
						<tr>
							<th width="5%">SL No</th>
							<th width="10%">LCAF No</th>
							<th width="15%">Importer Name</th>
							<th width="15%">IRC No</th>
							<th width="10%">LC Amount</th>
							<th width="30%">Items</th>
							<th width="15%" class="TAC">Actions</th>
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
