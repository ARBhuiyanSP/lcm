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
<?php
$sl_no=$_GET['no'];
$sql = "select * from `lc_commercial` where `sl_no`='$sl_no'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h5 class="m-0"><img src="images/logo.png" height="25px"/> LC Management System</h5>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Lc Edit - [Commercial]</li>
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
						<h3 class="card-title">LC Commercial Data Edit- </h3>
						<button type="button" class="btn btn-info btn-xs" onclick="window.location.href='lc_commercial_list.php';">  <i class="nav-icon fas fa-bars"></i> LC List</button>
					</div>
					<form id="" method="POST" action="#">
					<!-- /.card-header -->
					<div class="card-body">
						<div class="row">
							<div class="col-md-1">
								<div class="form-group">
								  <label>SL No</label>
								  <input class="form-control" type="text" name="sl_no" readonly value="<?php echo $row['sl_no']; ?>" />
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
							<div class="col-md-2">
								<div class="form-group">
								  <label>Bank Name</label>
								  <select class="form-control select2"t name="bank" style="width: 100%;">
									<option value="<?php echo $row['bank']; ?>"> <?php echo $row['bank']; ?></option>
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
							<div class="col-md-1">
								<div class="form-group">
								  <label>LCAF No</label>
								  <input class="form-control" type="text" name="lcaf_no" value="<?php echo $row['lcaf_no']; ?>"/>
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
							<div class="col-md-3">
								<div class="form-group">
								  <label>Importer Name</label>
								  <input class="form-control" type="text" name="importer_name" value="<?php echo $row['importer_name']; ?>"/>
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
							<div class="col-md-3">
								<div class="form-group">
								  <label>Importer Address</label>
								  <input class="form-control" type="text" name="address" value="<?php echo $row['address']; ?>"/>
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
							<div class="col-md-2">
								<div class="form-group">
								  <label>Renewal Year</label>
								  <input class="form-control" type="text" name="year_of_renewal" value="<?php echo $row['year_of_renewal']; ?>"/>
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
							<div class="col-md-2">
								<div class="form-group">
								  <label>IRC No</label>
								  <input class="form-control" type="text" name="irc_no" value="<?php echo $row['irc_no']; ?>"/>
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
							<div class="col-md-2">
								<div class="form-group">
								  <label>Share Basis Amount</label>
								  <input class="form-control" type="text" name="share_basis_amount" value="<?php echo $row['share_basis_amount']; ?>"/>
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
							<div class="col-md-4">
								<label>Source of Financing</label>
								<div class="form-group clearfix">
									<div class="icheck-primary d-inline">
										<input type="checkbox" name="sof_cash" id="checkboxPrimary1" <?php if(isset($row['sof_cash']) && !empty($row['sof_cash'])){ echo 'checked';} ?>>
										<label for="checkboxPrimary1">Cash</label>
									</div>
									<div class="icheck-primary d-inline">
										<input type="checkbox" name="sof_barter" id="checkboxPrimary2" <?php if(isset($row['sof_barter']) && !empty($row['sof_barter'])){ echo 'checked';} ?>>
										<label for="checkboxPrimary2">Barter</label>
									</div>
									<div class="icheck-primary d-inline">
										<input type="checkbox" name="sof_loan" id="checkboxPrimary3" <?php if(isset($row['sof_loan']) && !empty($row['sof_loan'])){ echo 'checked';} ?>>
										<label for="checkboxPrimary3">Loan</label>
									</div>
									<div class="icheck-primary d-inline">
										<input type="checkbox" name="sof_credit" id="checkboxPrimary4" <?php if(isset($row['sof_credit']) && !empty($row['sof_credit'])){ echo 'checked';} ?>>
										<label for="checkboxPrimary4">Credit</label>
									</div>
									<div class="icheck-primary d-inline">
										<input type="checkbox" name="sof_other" id="checkboxPrimary5" <?php if(isset($row['sof_other']) && !empty($row['sof_other'])){ echo 'checked';} ?>>
										<label for="checkboxPrimary5">Other</label>
									</div>
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
							<div class="col-md-2">
								<div class="form-group">
								  <label>Currency</label>
								  <select class="form-control select2"t name="currency" style="width: 100%;">
										<?php 
										$currency = $row['currency'];
										$item_details = getTableDataByTableName('currency', '', 'id');
										if (isset($item_details) && !empty($item_details)) {
											foreach ($item_details as $item) {
										?>
									<option value="<?php echo $item['id']; ?>"<?php if ($currency == $item['id']){ echo 'selected';} ?>><?php echo $item['currency_name']; ?> - <?php echo $item['currency_icon']; ?></option>
										<?php }} ?>
								  </select>
								</div>
							</div>
							<!-- /.col -->
							<div class="col-md-2">
								<div class="form-group">
								  <label>LC Amount</label>
								  <input class="form-control" type="text" name="lc_amount" value="<?php echo $row['lc_amount']; ?>"/>
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
							<div class="col-md-5">
								<div class="form-group">
								  <label>Description of items to be imported</label>
								  <textarea id="summernote" name="description_of_item_imported"> <?php echo $row['description_of_item_imported']; ?> </textarea>
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
							<div class="col-md-5">
								<div class="form-group">
								  <label>Description of Items</label>
								  <textarea id="summernote2" name="description_of_items"> <?php echo $row['description_of_items']; ?> </textarea>
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
							<div class="col-md-2">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
										  <label>ITC Number</label>
										  <input class="form-control" type="text" name="itc_number" value="<?php echo $row['itc_number']; ?>"/>
										</div>
										<!-- /.form-group -->
									</div>
									<!-- /.col -->
									<div class="col-md-12">
										<div class="form-group">
										  <label>ITC No</label>
										  <input class="form-control" type="text" name="itc_no" value="<?php echo $row['itc_no']; ?>"/>
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
								  <input class="form-control" type="text" name="beneficiary_name" value="<?php echo $row['beneficiary_name']; ?>" />
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
							<div class="col-md-3">
								<div class="form-group">
								  <label>Beneficiary Address</label>
								  <input class="form-control" type="text" name="beneficiary_address" value="<?php echo $row['beneficiary_address']; ?>" />
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
							<div class="col-md-3">
								<div class="form-group">
								  <label>Opener's Name</label>
								  <input class="form-control" type="text" name="openers_name" value="<?php echo $row['openers_name']; ?>" />
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
							<div class="col-md-3">
								<div class="form-group">
								  <label>Opener's Address</label>
								  <input class="form-control" type="text" name="openers_address" value="<?php echo $row['openers_address']; ?>" />
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
							<div class="col-md-2">
								<div class="form-group">
								  <label>Draft Amount</label>
								  <input class="form-control" type="text" name="draft_amount"  value="<?php echo $row['draft_amount']; ?>" />
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
							<div class="col-md-6">
								<label>.</label>
								<div class="form-group clearfix">
									<div class="icheck-primary d-inline">
										<input type="checkbox" name="at_sight" id="checkboxPrimary6" <?php if(isset($row['at_sight']) && !empty($row['at_sight'])){ echo 'checked';} ?> >
										<label for="checkboxPrimary6">At sight</label>
									</div>
									<div class="icheck-primary d-inline">
										<input type="checkbox" name="days_da_dp" id="checkboxPrimary7" <?php if(isset($row['days_da_dp']) && !empty($row['days_da_dp'])){ echo 'checked';} ?>>
										<label for="checkboxPrimary7">Days DA/DP</label>
									</div>
									<div class="icheck-primary d-inline">
										<input type="checkbox" name="cif" id="checkboxPrimary8" <?php if(isset($row['cif']) && !empty($row['cif'])){ echo 'checked';} ?> >
										<label for="checkboxPrimary8">CIF</label>
									</div>
									<div class="icheck-primary d-inline">
										<input type="checkbox" name="cfr" id="checkboxPrimary9" <?php if(isset($row['cfr']) && !empty($row['cfr'])){ echo 'checked';} ?> >
										<label for="checkboxPrimary9">C F R</label>
									</div>
									<div class="icheck-primary d-inline">
										<input type="checkbox" name="fob" id="checkboxPrimary10" <?php if(isset($row['fob']) && !empty($row['fob'])){ echo 'checked';} ?> >
										<label for="checkboxPrimary10">FOB</label>
									</div>
									<div class="icheck-primary d-inline">
										<input type="checkbox" name="drawn_on_us" id="checkboxPrimary11" <?php if(isset($row['drawn_on_us']) && !empty($row['drawn_on_us'])){ echo 'checked';} ?> >
										<label for="checkboxPrimary11">Drawn on-Us</label>
									</div>
									<div class="icheck-primary d-inline">
										<input type="checkbox" name="drawn_on_them" id="checkboxPrimary12" <?php if(isset($row['drawn_on_them']) && !empty($row['drawn_on_them'])){ echo 'checked';} ?> >
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
									<option value="<?php echo $row['country_origin']; ?>"> <?php echo $row['country_origin']; ?></option>
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
								  <input class="form-control" type="text" name="hs_code" value="<?php echo $row['hs_code']; ?>" />
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
							<div class="col-md-6">
								<div class="form-group">
								  <label>Commodities</label>
								  <textarea id="summernote3" name="commodities"> <?php echo $row['commodities']; ?> </textarea>
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
							<div class="col-md-6">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
										  <label>Issue/Shipment From</label>
										  <input class="form-control" type="text" name="shipment_from" value="<?php echo $row['shipment_from']; ?>"  />
										</div>
										<!-- /.form-group -->
									</div>
									<!-- /.col -->
									<div class="col-md-12">
										<div class="form-group">
										  <label>Issue/Shipment To</label>
										  <input class="form-control" type="text" name="shipment_to" value="<?php echo $row['shipment_to']; ?>"  />
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
								  <input class="form-control" type="text" name="insurance_cover_no" value="<?php echo $row['insurance_cover_no']; ?>" />
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
							<div class="col-md-2">
								<div class="form-group">
									<label>Date </label>
									<div class="input-group date" id="ins_date" data-target-input="nearest">
										<input type="text" class="form-control datetimepicker-input" data-target="#ins_date" data-toggle="datetimepicker" value="<?php echo $row['ins_date']; ?>" name="ins_date"/>
									</div>
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
							<div class="col-md-2">
								<div class="form-group">
								  <label>Amount TK</label>
								  <input class="form-control" type="text" name="ins_amount" value="<?php echo $row['ins_amount']; ?>" />
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
							<div class="col-md-4">
								<div class="form-group">
								  <label>.</label>
									<div class="form-group clearfix">
										<div class="icheck-primary d-inline">
											<input type="checkbox" name="ins_part_shipment" id="checkboxPrimary13" <?php if(isset($row['ins_part_shipment']) && !empty($row['ins_part_shipment'])){ echo 'checked';} ?> >
											<label for="checkboxPrimary13">Part Shipment</label>
										</div>
										<div class="icheck-primary d-inline">
											<input type="checkbox" name="ins_allowed" id="checkboxPrimary14" <?php if(isset($row['ins_allowed']) && !empty($row['ins_allowed'])){ echo 'checked';} ?>>
											<label for="checkboxPrimary14">Allowed </label>
										</div>
										<div class="icheck-primary d-inline">
											<input type="checkbox" name="ins_prohibited" id="checkboxPrimary15" <?php if(isset($row['ins_prohibited']) && !empty($row['ins_prohibited'])){ echo 'checked';} ?> >
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
									<div class="input-group date" id="last_shipment_date" data-target-input="nearest">
										<input type="text" class="form-control datetimepicker-input" data-target="#last_shipment_date" data-toggle="datetimepicker" name="last_shipment_date" value="<?php echo $row['last_shipment_date']; ?>"/>
									</div>
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
							<div class="col-md-3">
								<div class="form-group">
								  <label>Name of Insurance </label>
								  <input class="form-control" type="text" name="name_of_ins" value="<?php echo $row['name_of_ins']; ?>"/>
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
							<div class="col-md-3">
								<div class="form-group">
								  <label>Address of Insurance</label>
								  <input class="form-control" type="text" name="ins_address" value="<?php echo $row['ins_address']; ?>"/>
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
							<div class="col-md-4">
								<div class="form-group">
								  <label>.</label>
									<div class="form-group clearfix">
										<div class="icheck-primary d-inline">
											<input type="checkbox" name="ins_co_transhipment" id="checkboxPrimary16" <?php if(isset($row['ins_co_transhipment']) && !empty($row['ins_co_transhipment'])){ echo 'checked';} ?> >
											<label for="checkboxPrimary16">Transhipment </label>
										</div>
										<div class="icheck-primary d-inline">
											<input type="checkbox" name="ins_co_allowed" id="checkboxPrimary17" <?php if(isset($row['ins_co_allowed']) && !empty($row['ins_co_allowed'])){ echo 'checked';} ?>>
											<label for="checkboxPrimary17">Allowed </label>
										</div>
										<div class="icheck-primary d-inline">
											<input type="checkbox" name="ins_co_prohibited" id="checkboxPrimary18" <?php if(isset($row['ins_co_prohibited']) && !empty($row['ins_co_prohibited'])){ echo 'checked';} ?> >
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
									<div class="input-group date" id="last_neg_date" data-target-input="nearest">
										<input type="text" class="form-control datetimepicker-input" data-target="#last_neg_date" data-toggle="datetimepicker" name="last_neg_date" value="<?php echo $row['last_neg_date']; ?>"/>
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
					  <input type="submit" name="commercial_update_submit" id="commercial_update_submit" class="btn btn-info btn-block btn-sm" style="" value="UPDATE LC" />
					</div>
				</form>
				</div>
				<!-- /.card -->
			</div>
        </div>
        <!-- /.row -->
    </div><!--/. container-fluid -->
</section>