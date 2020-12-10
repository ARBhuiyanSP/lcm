<style>
.reqfield{
	font-size:12px;
	color:red;
	font-weight:bold;
}
</style>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><img src="images/logo.png" height="50px"/> Inventory Management System</h1>
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
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<button class="btn btn-default"><i class="fa fa-th" aria-hidden="true"></i> Material Receive Entry Form</button>
						<button class="btn btn-info float-right" onclick="window.location.href='#"><i class="fa fa-server" aria-hidden="true"></i> Material Receive List</button>
					</div>
				  <!-- /.card-header -->
				  <div class="card-body">
					<!-- we are adding the accordion ID so Bootstrap's collapse plugin detects it -->
					<form action="" method="post" name="add_name" id="receive_entry_form" enctype="multipart/form-data" onsubmit="showFormIsProcessing('receive_entry_form');">
						<div class="row" id="div1" style="">
							<div class="col-2">
								<label>MRR Date</label>
								<div class="input-group date" id="reservationdate" data-target-input="nearest">
									<input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
									<div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
										<div class="input-group-text"><i class="fa fa-calendar"></i></div>
									</div>
								</div>
							</div>
							<div class="col-2">
								<label>MRR No</label>
								<?php if($_SESSION['logged']['user_type'] == 'whm')
									{
										$warehouse_id	=	$_SESSION['logged']['warehouse_id'];
										$sql	=	"SELECT * FROM inv_warehosueinfo WHERE `id`='$warehouse_id'";
										$result = mysqli_query($conn, $sql);
										$row=mysqli_fetch_array($result);
										$short_name = $row['short_name'];
										$mrrcode= 'MRR-'.$short_name;
									} else{
										$mrrcode= 'MRR-CW';
									}
								?>
								<input type="text" name="mrr_no" id="mrr_no" class="form-control" value="<?php echo getDefaultCategoryCodeByWarehouse('inv_receive', 'mrr_no', '03d', '001', $mrrcode) ?>" readonly>
								<input type="hidden" name="receive_no" id="receive_no" value="<?php echo getDefaultCategoryCodeByWarehouse('inv_receive', 'mrr_no', '03d', '001', $mrrcode) ?>">
							</div>
							<div class="col-2">
								<label>Purchase ID</label>
								<input type="text" name="purchase_id" id="purchase_id" class="form-control">
							</div>
							<div class="col-2">
								<label>Purchase Date</label>
								<div class="input-group date" id="purchasedate" data-target-input="nearest">
									<input type="text" class="form-control datetimepicker-input" data-target="#purchasedate"/>
									<div class="input-group-append" data-target="#purchasedate" data-toggle="datetimepicker">
										<div class="input-group-text"><i class="fa fa-calendar"></i></div>
									</div>
								</div>
							</div>
							
							  <div class="col-2">
								<label>Supplier Challan No</label>
								<input type="text" name="challan_no" id="challan_no" class="form-control">
							  </div>
							  <div class="col-2">
								<label for="id">Challan Date</label>
									<input type="text" autocomplete="off" name="challan_date" id="challan_date" class="form-control datepicker" value="<?php echo date('Y-m-d'); ?>">
							  </div>
							  <div class="col-2">
								<label for="id">Requisition No.</label>
									<input type="text" name="requisition_no" id="requisition_no" class="form-control">
							  </div>
							  <div class="col-2">
								<label for="id">Requisition Date</label>
									<input type="text" autocomplete="off" name="requisition_date" id="requisition_date" class="form-control datepicker" value="<?php echo date('Y-m-d'); ?>">
							  </div>
							  
							  <div class="col-2">
								<label for="id">Supplier</label><span class="reqfield"> ***required</span>
									<select class="form-control" id="supplier_name" name="supplier_name" required onchange="getItemCodeByParam(this.value, 'suppliers', 'code', 'supplier_id');">
										<option value="">Select</option>
										<?php
										$projectsData = getTableDataByTableName('suppliers');

										if (isset($projectsData) && !empty($projectsData)) {
											foreach ($projectsData as $data) {
												?>
												<option value="<?php echo $data['id']; ?>"><?php echo $data['name']; ?></option>
												<?php
											}
										}
										?>
									</select>
							  </div>
							  <div class="col-2">
									<label for="id">Supplier ID</label>
									<input type="text" name="supplier_id" id="supplier_id" class="form-control" required>
								
							  </div>
							  <div class="col-2">
								<label>Project</label>
									<select class="form-control" id="project_id" name="project_id" readonly >
										<?php
										$projectsData = getTableDataByTableName('projects');
										;
										if (isset($projectsData) && !empty($projectsData)) {
											foreach ($projectsData as $data) {
												?>
												<option value="<?php echo $data['id']; ?>"><?php echo $data['name']; ?></option>
												<?php
											}
										}
										?>
									</select>
							  </div>
							  <div class="col-2">
								<label>Warehouse</label>
									
									<?php  
										$warehouse_id = $_SESSION['logged']['warehouse_id'];								
										$dataresult =   getDataRowByTableAndId('inv_warehosueinfo', $warehouse_id);
									?>
									<input type="text" class="form-control" readonly="readonly" value="<?php echo (isset($dataresult) && !empty($dataresult) ? $dataresult->name : ''); ?>">
									
									<input type="hidden" name="warehouse_id" id="warehouse_id" class="form-control" readonly="readonly" value="<?php echo $_SESSION['logged']['warehouse_id']; ?>">
							  </div>
						</div>
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-body">
										<table class="table table-bordered" id="dynamic_field">
											<thead>
											<th>Material Name<span class="reqfield"> ***required</span></th>
											<th>Material ID</th>
											<th width="10%">Unit</th>
											<th>Brand Name</th>
											<th>Qty<span class="reqfield"> ***required</span></th>
											<th>Unit Price<span class="reqfield"> ***required</span></th>
											<th>Total Amount</th>
											<th></th>
											</thead>
											<tbody>
												<tr>
													<td>
														<select class="form-control select2" id="material_name" name="material_name[]" required onchange="getItemCodeByParam(this.value, 'inv_material', 'material_id_code', 'material_id0', 'qty_unit');">
															<option value="">Select</option>
															<?php
															$projectsData = get_product_with_category();
															if (isset($projectsData) && !empty($projectsData)) {
																foreach ($projectsData as $data) {
																	?>
																	<option value="<?php echo $data['id']; ?>"><?php echo $data['material_name']; ?></option>
																	<?php
																}
															}
															?>
														</select>
													</td>
													<td><input type="text" name="material_id[]" id="material_id0" class="form-control" readonly></td>
													<td>
														<select class="form-control" id="unit0" name="unit[]" required readonly>
															<option value="">Select Unit</option>
															<?php
															$projectsData = getTableDataByTableName('inv_item_unit', '', 'unit_name');
															if (isset($projectsData) && !empty($projectsData)) {
																foreach ($projectsData as $data) {
																	?>
																	<option value="<?php echo $data['id']; ?>"><?php echo $data['unit_name']; ?></option>
																	<?php
																}
															}
															?>
														</select>
													</td>
													<td>
														<select class="form-control" id="brand0" name="brand[]" readonly>
															<option value="">Select Brand</option>
															<?php
															$brandData = getmaterialbrand();
															if (isset($brandData) && !empty($brandData)) {
																foreach ($brandData as $data) {
																	?>
																	<option value="<?php echo $data['brand_name']; ?>"><?php echo $data['brand_name']; ?></option>
																	<?php
																}
															}
															?>
														</select>
													</td>
													<td><input type="text" name="quantity[]" id="quantity0" onchange="sum(0)" class="form-control" required></td>
													<td><input type="text" name="unit_price[]" id="unit_price0" onchange="sum(0)" class="form-control" required></td>
													<td><input type="text" name="totalamount[]" id="sum0" class="form-control"></td>
													<td><button type="button" name="add" id="add" class="btn btn-info" style="">+</button></td>
												</tr>
											</tbody>
										</table>
										<table class="table table-bordered">
											<tr>
												<td width="" style="">VAT Challan No<span class="reqfield"> ***required</span></td>
												<td><input type="text" class="form-control" maxlength="30" name="vat_challan_no" required /></td>
												<td width="" style="text-align:right;">Total Amount</td>
												<td><input type="text" class="form-control" maxlength="30" name="sub_total_amount" id="allsum" readonly /></td>
											</tr>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="row" style="">
							<div class="col-4">
								<div class="form-group">
									<input type="file" accept="image/*"  name="file" id="picture">
									<p id="error1" style="display:none; color:#FF0000;">
									Invalid Image Format! Image Format Must Be JPG, JPEG, PNG or GIF.
									</p>
									<p id="error2" style="display:none; color:#FF0000;">
									Maximum File Size Limit is 500KB.
									</p>
									<script>
									  var loadFile = function(event) {
										var output = document.getElementById('output');
										output.src = URL.createObjectURL(event.target.files[0]);
										output.onload = function() {
										  URL.revokeObjectURL(output.src) // free memory
										}
									  };
									  
									</script>
									
								</div>
							</div>
							<div class="col-8">
								<div class="form-group">
									<label>Remarks</label>
									<textarea id="remarks" name="remarks" class="form-control" required></textarea>
								</div>
							</div>
						</div>
						<div class="row" style="">
							<div class="col-12">
								<div class="form-group">
									<input type="submit" name="receive_submit" id="submit" class="btn btn-block" style="background-color:#007BFF;color:#ffffff;" value="Save" />   
								</div>
							</div>
						</div>
					</form>
				<!--here your code will go-->
				  </div>
				  <!-- /.card-body -->
				</div>
				<!-- /.card -->
			</div>
        </div>
        <!-- /.row -->
    </div><!--/. container-fluid -->
</section>
<script>
    var i = 0;
    $(document).ready(function () {
        $('#add').click(function () {
            i++;
            $('#dynamic_field').append('<tr id="row' + i + '"><td><select class="form-control select2" id="material_name' + i + '" name="material_name[]' + i + '" required onchange="getAppendItemCodeByParam(' + i + ",'inv_material'," + "'material_id_code'," + "'material_id'," + "'qty_unit'" + ')"><option value="">Select</option><?php
                                                $projectsData = get_product_with_category();
                                                if (isset($projectsData) && !empty($projectsData)) {
                                                    foreach ($projectsData as $data) {
                                                        ?><option value="<?php echo $data['id']; ?>"><?php echo $data['material_name']; ?></option><?php }
                                                }
                                                ?></select></td><td><input type="text" name="material_id[]" id="material_id' + i + '" class="form-control" readonly></td><td><select class="form-control select2" id="unit' + i + '" name="unit[]' + i + '" required onchange="getAppendItemCodeByParam(' + i + ",'inv_material'" + ",'material_id_code'" + ",'material_id''" + ",'qty_unit'" + ')"><option value="">Select</option><?php
                                                $projectsData = getTableDataByTableName('inv_item_unit', '', 'unit_name');
                                                if (isset($projectsData) && !empty($projectsData)) {
                                                    foreach ($projectsData as $data) {
                                                        ?><option value="<?php echo $data['id']; ?>"><?php echo $data['unit_name']; ?></option><?php }
                                                }
                                                ?></select></td><td><select class="form-control select2" id="brand' + i + '" name="brand[]' + i + '" ><option value="">Select</option><?php
                                                $projectsData = getmaterialbrand();
                                                if (isset($projectsData) && !empty($projectsData)) {
                                                    foreach ($projectsData as $data) {
                                                        ?><option value="<?php echo $data['brand_name']; ?>"><?php echo $data['brand_name']; ?></option><?php }
                                                }
                                                ?></select></td><td><input type="text" name="quantity[]" id="quantity' + i + '" onchange="sum(0)" class="form-control" required></td><td><input type="text" name="unit_price[]" id="unit_price' + i + '" onchange="sum(0)" class="form-control" required></td><td><input type="text" name="totalamount[]" id="sum' + i + '" class="form-control"></td><td><button type="button" name="remove" id="' + i + '" class="btn btn_remove" style="background-color:#f26522;color:#ffffff;">X</button></td></tr>');
            $('#quantity' + i + ', #unit_price' + i).change(function () {
                sum(i)
            });
        });

        $(document).on('click', '.btn_remove', function () {
            var button_id = $(this).attr("id");
            $('#row' + button_id + '').remove();
            sum_total();
        });
    });

    $(document).ready(function () {
        //this calculates values automatically 
        sum(0);
    });

    function sum(i) {
        var quantity1 = document.getElementById('quantity' + i).value;
        var unit_price1 = document.getElementById('unit_price' + i).value;
        var result = parseFloat(quantity1) * parseFloat(unit_price1);
        if (!isNaN(result)) {
            document.getElementById('sum' + i).value = result;
        }
        sum_total();
    }
    function sum_total() {
        var newTot = 0;
        for (var a = 0; a <= i; a++) {
            aVal = $('#sum' + a);
            if (aVal && aVal.length) {
                newTot += aVal[0].value ? parseFloat(aVal[0].value) : 0;
            }
        }
        document.getElementById('allsum').value = newTot.toFixed(2);
    }
</script>
<script>
    $(function () {
        $("#mrr_date").datepicker({
            inline: true,
            dateFormat: "yy-mm-dd",
            yearRange: "-50:+10",
            changeYear: true,
            changeMonth: true
        });
    });
</script>