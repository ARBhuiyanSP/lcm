<style>
.form-control{
	height: calc(1.6rem + 2px);
	border:1px solid #000;
}
.select2-container--default .select2-selection--single{
	height: calc(1.6rem + 2px);
	border:1px solid #000;
}
.select2-container--default .select2-selection--single .select2-selection__rendered{
	margin-top:-8px;
}
label{
	margin-bottom:2px;
}
.select2-container--default .select2-selection--single .select2-selection__arrow b{
	top:35%;
}
</style>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h5 class="m-0"><img src="images/logo.png" height="25px"/> LC Management System</h5>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">TT Entry - [Commercial]</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
			<div class="col-md-12">
				<div class="card" style="border:2px solid #17A2B8;">
					<div class="card-header">
						<h3 class="card-title">TT Commercial Data Entry</h3>
						<button type="button" class="btn btn-info btn-xs" onclick="window.location.href='tt_list.php';"><i class="nav-icon fas fa-bars"></i> TT List</button>
					</div>
					<form id="" method="POST" action="#">
					<!-- /.card-header -->
					<div class="card-body" style="background-color:#E1E3E6;">
						<div class="row">
							<div class="col-md-1">
								<div class="form-group">
								  <label>SL No</label>
								  <input class="form-control" type="text" name="sl_no" readonly value="<?php echo getDefaultCategoryCode('tt', 'sl_no', '03d', '001', 'TT-') ?>" />
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
							<div class="col-md-2">
								<div class="form-group">
								  <label>Bank Name</label>
								  <select class="form-control select2"t name="bank" style="width: 100%;">
									<option> Choose Bank</option>
										<?php 
										$item_details = getTableDataByTableName('banks', '', 'id');
										if (isset($item_details) && !empty($item_details)) {
											foreach ($item_details as $item) {
										?>
									<option value="<?php echo $item['bank_name']; ?>"><?php echo $item['bank_name']; ?></option>
										<?php }} ?>
								  </select>
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
							<div class="col-md-2">
								<div class="form-group">
								  <label>LCAF No</label>
								  <input class="form-control" type="text" name="lcaf_no" />
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
							<div class="col-md-3">
								<div class="form-group">
								  <label>Importer Name</label>
								  <input class="form-control" type="text" name="importer_name" />
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
							<div class="col-md-4">
								<div class="form-group">
								  <label>Importer Address</label>
								  <input class="form-control" type="text" name="address" />
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
							<div class="col-md-2">
								<div class="form-group">
								  <label>IRC No</label>
								  <input class="form-control" type="text" name="irc_no" />
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
							<div class="col-md-2">
								<div class="form-group">
								  <label>Renewal Year</label>
								  <input class="form-control" type="text" name="year_of_renewal" />
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
							<div class="col-md-2">
								<div class="form-group">
								  <label>Share Basis Amount</label>
								  <input class="form-control" type="text" name="share_basis_amount" />
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
							<div class="col-md-4">
								<label>Source of Financing</label>
								<div class="form-group clearfix">
									<div class="icheck-primary d-inline">
										<input type="checkbox" name="sof_cash" id="checkboxPrimary1" >
										<label for="checkboxPrimary1">Cash</label>
									</div>
									<div class="icheck-primary d-inline">
										<input type="checkbox" name="sof_barter" id="checkboxPrimary2">
										<label for="checkboxPrimary2">Barter</label>
									</div>
									<div class="icheck-primary d-inline">
										<input type="checkbox" name="sof_loan" id="checkboxPrimary3" >
										<label for="checkboxPrimary3">Loan</label>
									</div>
									<div class="icheck-primary d-inline">
										<input type="checkbox" name="sof_credit" id="checkboxPrimary4" >
										<label for="checkboxPrimary4">Credit</label>
									</div>
									<div class="icheck-primary d-inline">
										<input type="checkbox" name="sof_other" id="checkboxPrimary5" >
										<label for="checkboxPrimary5">Other</label>
									</div>
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
							<div class="col-md-2">
								<div class="form-group">
								  <label>LC Amount</label>
								  <input class="form-control" type="text" name="lc_amount" />
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
							<div class="col-md-5">
								<div class="form-group">
								  <label>Description of items to be imported</label>
								  <textarea id="summernote" name="description_of_item_imported"> </textarea>
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
							<div class="col-md-5">
								<div class="form-group">
								  <label>Description of Items</label>
								  <textarea id="summernote2" name="description_of_items"> </textarea>
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
							<div class="col-md-2">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
										  <label>ITC Number</label>
										  <input class="form-control" type="text" name="itc_number" />
										</div>
										<!-- /.form-group -->
									</div>
									<!-- /.col -->
									<div class="col-md-12">
										<div class="form-group">
										  <label>ITC No</label>
										  <input class="form-control" type="text" name="itc_no" />
										</div>
										<!-- /.form-group -->
									</div>
									<!-- /.col -->
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
						</div>
						<!-- /.row -->
				  </div>
					<!-- /.card-body -->
					<div class="card-footer">
					  <input type="submit" name="tt_submit" id="tt_submit" class="btn btn-info btn-block btn-sm" style="" value="SAVE LC" />
					</div>
				</form>
				</div>
				<!-- /.card -->
			</div>
        </div>
        <!-- /.row -->
    </div><!--/. container-fluid -->
</section>