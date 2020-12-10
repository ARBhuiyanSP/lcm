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
              <li class="breadcrumb-item active">Lc Entry - [Commercial]</li>
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
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">LC Commercial Data Entry</h3>
					</div>
					<form id="" method="POST" action="#">
					<!-- /.card-header -->
					<div class="card-body">
						<div class="row">
							<div class="col-md-1">
								<div class="form-group">
								  <label>SL No</label>
								  <input class="form-control" type="text" name="sl_no" readonly value="<?php echo getDefaultCategoryCode('lc_commercial', 'sl_no', '03d', '001', 'LCM-') ?>" />
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
							<div class="col-md-3">
								<div class="form-group">
								  <label>Beneficiary Name</label>
								  <input class="form-control" type="text" name="beneficiary_name" />
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
							<div class="col-md-3">
								<div class="form-group">
								  <label>Beneficiary Address</label>
								  <input class="form-control" type="text" name="beneficiary_address" />
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
							<div class="col-md-3">
								<div class="form-group">
								  <label>Opener's Name</label>
								  <input class="form-control" type="text" name="openers_name" />
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
							<div class="col-md-3">
								<div class="form-group">
								  <label>Opener's Address</label>
								  <input class="form-control" type="text" name="openers_address" />
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
							<div class="col-md-2">
								<div class="form-group">
								  <label>Draft Amount</label>
								  <input class="form-control" type="text" name="draft_amount" />
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
							<div class="col-md-6">
								<label>.</label>
								<div class="form-group clearfix">
									<div class="icheck-primary d-inline">
										<input type="checkbox" name="at_sight" id="checkboxPrimary6" >
										<label for="checkboxPrimary6">At sight</label>
									</div>
									<div class="icheck-primary d-inline">
										<input type="checkbox" name="days_da_dp" id="checkboxPrimary7">
										<label for="checkboxPrimary7">Days DA/DP</label>
									</div>
									<div class="icheck-primary d-inline">
										<input type="checkbox" name="cif" id="checkboxPrimary8" >
										<label for="checkboxPrimary8">CIF</label>
									</div>
									<div class="icheck-primary d-inline">
										<input type="checkbox" name="cfr" id="checkboxPrimary9" >
										<label for="checkboxPrimary9">C F R</label>
									</div>
									<div class="icheck-primary d-inline">
										<input type="checkbox" name="fob" id="checkboxPrimary10" >
										<label for="checkboxPrimary10">FOB</label>
									</div>
									<div class="icheck-primary d-inline">
										<input type="checkbox" name="drawn_on_us" id="checkboxPrimary11" >
										<label for="checkboxPrimary11">Drawn on-Us</label>
									</div>
									<div class="icheck-primary d-inline">
										<input type="checkbox" name="drawn_on_them" id="checkboxPrimary12" >
										<label for="checkboxPrimary12">Drawn on-Them</label>
									</div>
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
							<div class="col-md-2">
								<div class="form-group">
								  <label>Country of Origin</label>
								  <select class="form-control select2" name="country_origin" style="width: 100%;">
									<option>Choose Country</option>
									<?php 
										$item_details = getTableDataByTableName('countries', '', 'id');
										if (isset($item_details) && !empty($item_details)) {
											foreach ($item_details as $item) {
										?>
									<option value="<?php echo $item['country_name']; ?>"><?php echo $item['country_name']; ?></option>
										<?php }} ?>
								  </select>
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
							<div class="col-md-2">
								<div class="form-group">
								  <label>HS Code</label>
								  <input class="form-control" type="text" name="hs_code" />
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
							<div class="col-md-6">
								<div class="form-group">
								  <label>Commodities</label>
								  <textarea id="summernote3" name="commodities"> </textarea>
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
							<div class="col-md-6">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
										  <label>Issue/Shipment From</label>
										  <input class="form-control" type="text" name="shipment_from" />
										</div>
										<!-- /.form-group -->
									</div>
									<!-- /.col -->
									<div class="col-md-12">
										<div class="form-group">
										  <label>Issue/Shipment To</label>
										  <input class="form-control" type="text" name="shipment_to" />
										</div>
										<!-- /.form-group -->
									</div>
									<!-- /.col -->
								</div>
							</div>
							<!-- /.col -->
							<div class="col-md-2">
								<div class="form-group">
								  <label>Ins. Cover note/policy no </label>
								  <input class="form-control" type="text" name="insurance_cover_no" />
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
							<div class="col-md-2">
								<div class="form-group">
									<label>Date </label>
									<div class="input-group date" name="ins_date" id="ins_date" data-target-input="nearest">
										<input type="text" class="form-control datetimepicker-input" data-target="#ins_date" data-toggle="datetimepicker"/>
									</div>
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
							<div class="col-md-2">
								<div class="form-group">
								  <label>Amount TK</label>
								  <input class="form-control" type="text" name="ins_amount" />
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
							<div class="col-md-4">
								<div class="form-group">
								  <label>.</label>
									<div class="form-group clearfix">
										<div class="icheck-primary d-inline">
											<input type="checkbox" name="ins_part_shipment" id="checkboxPrimary13" >
											<label for="checkboxPrimary13">Part Shipment</label>
										</div>
										<div class="icheck-primary d-inline">
											<input type="checkbox" name="ins_allowed" id="checkboxPrimary14">
											<label for="checkboxPrimary14">Allowed </label>
										</div>
										<div class="icheck-primary d-inline">
											<input type="checkbox" name="ins_prohibited" id="checkboxPrimary15" >
											<label for="checkboxPrimary15">Prohibited</label>
										</div>
									</div>
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
							<div class="col-md-2">
								<div class="form-group">
									<label>Last Date of Shipment </label>
									<div class="input-group date" name="last_shipment_date" id="last_shipment_date" data-target-input="nearest">
										<input type="text" class="form-control datetimepicker-input" data-target="#last_shipment_date" data-toggle="datetimepicker"/>
									</div>
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
							<div class="col-md-3">
								<div class="form-group">
								  <label>Name of Insurance </label>
								  <input class="form-control" type="text" name="name_of_ins"/>
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
							<div class="col-md-3">
								<div class="form-group">
								  <label>Address of Insurance</label>
								  <input class="form-control" type="text" name="ins_address"/>
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
							<div class="col-md-4">
								<div class="form-group">
								  <label>.</label>
									<div class="form-group clearfix">
										<div class="icheck-primary d-inline">
											<input type="checkbox" name="ins_co_transhipment" id="checkboxPrimary16" >
											<label for="checkboxPrimary16">Transhipment </label>
										</div>
										<div class="icheck-primary d-inline">
											<input type="checkbox" name="ins_co_allowed" id="checkboxPrimary17">
											<label for="checkboxPrimary17">Allowed </label>
										</div>
										<div class="icheck-primary d-inline">
											<input type="checkbox" name="ins_co_prohibited" id="checkboxPrimary18" >
											<label for="checkboxPrimary18">Prohibited</label>
										</div>
									</div>
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
							<div class="col-md-2">
								<div class="form-group">
									<label>Last Date of Negotiation </label>
									<div class="input-group date" name="last_neg_date" id="last_neg_date" data-target-input="nearest">
										<input type="text" class="form-control datetimepicker-input" data-target="#last_neg_date" data-toggle="datetimepicker"/>
									</div>
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
						</div>
						<!-- /.row -->
				  </div>
					<!-- /.card-body -->
					<div class="card-footer">
					  <input type="submit" name="commercial_submit" id="commercial_submit" class="btn btn-info btn-block btn-sm" style="" value="SAVE LC" />
					</div>
				</form>
				</div>
				<!-- /.card -->
			</div>
        </div>
        <!-- /.row -->
    </div><!--/. container-fluid -->
</section>