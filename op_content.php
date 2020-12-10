<?php include 'includes/opening_stock_process.php';  ?>
<style>
.table td, .table th{
	padding:3px;
}
.form-control {
	height: calc(2.25rem + 0px);
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
					<h3 class="card-title">Opening Stock Entry Form</h3>
				  </div>
				  <!-- /.card-header -->
				  <div class="card-body">
					<!-- we are adding the accordion ID so Bootstrap's collapse plugin detects it -->
					    <form name="add_name" action="" method="post" id="opening_entry_form" onsubmit="showFormIsProcessing('opening_entry_form');">
						<div class="row" style="">
							<div class="col-md-4">
								<div class="form-group">
									<?php 
														$warehouse_id	=	$_SESSION['logged']['warehouse_id'];
														$sqlop			=	"SELECT * FROM inv_materialbalance WHERE `mbtype`='OP' AND `warehouse_id`='$warehouse_id';";
														$resultop		=	mysqli_query($conn, $sqlop);
														$rowop			=	mysqli_fetch_array($resultop);
														$op_date 		= 	$rowop['mb_date'];
														if($op_date)
														{
															$op_date 		= 	$rowop['mb_date'];
															$validation		=	'readonly';
															$op_id			=	'';
														}else{
															$op_date 		= 	date('Y-m-d');
															$validation		=	'';
															$op_id			=	'reservationdate';
														}
											?>
								  <label>Opening Stock Entry Date:</label>
									<div class="input-group date" id="reservationdate" data-target-input="nearest">
										<input type="text" class="form-control" data-target="#reservationdate" autocomplete="off" name="op_date" value="<?php echo $op_date; ?>" <?php echo $validation; ?>>
										<div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
											<div class="input-group-text"><i class="fa fa-calendar"></i></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<table class="table table-condensed table-hover table-bordered">
								<thead>
									<tr style="background-color:#007BFF;color:#fff;">
										<th width="10%">Category</th>
										<th width="10%">Sub Category</th>
										<th width="10%">Material Code</th>
										<th width="35%">Material Name</th>
										<th width="10%">Unit</th>
										<th width="10%">OP Stock</th>
										<th width="15%">OP Stock Value</th>
									</tr>
								</thead>
								<tbody>
									<?php
										
										$sql	=	"SELECT * FROM inv_material  GROUP BY `material_id`";
										$result = mysqli_query($conn, $sql);
										while($row=mysqli_fetch_array($result))
										{
									?>
										<tr style="background-color:#b6d7fa;">
											<td>
												<?php 
												$dataresult =   getDataRowByTableAndId('inv_materialcategorysub', $row['material_id']);
												echo (isset($dataresult) && !empty($dataresult) ? $dataresult->category_description : '');
												?>
											</td>
											<td colspan="6"></td>
										</tr>
										<?php 
											$material_id = $row['material_id'];
											$sqlall	=	"SELECT * FROM inv_material WHERE `material_id` = '$material_id' GROUP BY `material_sub_id`;";
											$resultall = mysqli_query($conn, $sqlall);
											while($rowall=mysqli_fetch_array($resultall))
											{ ?>
										
										<tr>
											<td></td>
											<td style="background-color:#b6d7fa;">
												<?php
												$dataresult =   getDataRowByTableAndId('inv_materialcategory', $rowall['material_sub_id']);
												echo (isset($dataresult) && !empty($dataresult) ? $dataresult->material_sub_description : '');
												?>
											</td>
											<td colspan="5"></td>
										</tr>
										<?php 
											$material_sub_id = $rowall['material_sub_id'];
											$sqlmat	=	"SELECT * FROM inv_material WHERE `material_sub_id` = '$material_sub_id' GROUP BY `material_id_code`;";
											$resultmat = mysqli_query($conn, $sqlmat);
											while($rowmat=mysqli_fetch_array($resultmat))
											{ ?>
										
										<tr>
											<td></td>
											<td></td>
											<td><input class="form-control" name="material_id_code[]" id="material_id_code" type="text" value="<?php echo $rowmat['material_id_code']; ?>" readonly /></td>
											<td><input class="form-control" name="material_description[]" id="material_description" type="text" value="<?php echo $rowmat['material_description']; ?>" readonly /></td>
											<td><input class="form-control" name="material_description[]" id="material_description" type="text" value="<?php echo getDataRowByTableAndId('inv_item_unit', $rowmat['qty_unit'])->unit_name; ?>" readonly /></td>
											
											
											<?php
											$mb_materialid	=	$rowmat['material_id_code'];
											$warehouse_id	=	$_SESSION['logged']['warehouse_id'];
											$sqlop			=	"SELECT * FROM inv_materialbalance WHERE `mb_materialid` = '$mb_materialid' AND `mbtype`='OP' AND `warehouse_id`='$warehouse_id';";
											$resultop		=	mysqli_query($conn, $sqlop);
											$rowop			=	mysqli_fetch_array($resultop);
											$rowcount 		=	mysqli_num_rows($resultop);
											
											if($rowcount > 0){
												$mbin_qty 		= $rowop['mbin_qty'];
												$mbin_val 		= $rowop['mbin_val'];
												$submit_name	= 'op_edit';
												if($mbin_qty > 0){
													$validation 	= 'readonly';
													$submit			= 'disabled';
												}else{
													$validation 	= '';
													$submit			= '';
												}
											}else{
												$mbin_qty		= 0;
												$mbin_val 		= 0;
												$validation 	= '';
												$submit			= '';
												$submit_name	= 'op_submit';
											}
											?>
											
											<td><input class="form-control" name="op_balance_qty[]" id="op_balance_qty" type="text" value="<?php echo $mbin_qty; ?>" <?php echo $validation; ?> /></td>
											<td><input class="form-control" name="op_balance_val[]" id="op_balance_val" type="text" value="<?php echo $mbin_val; ?>" <?php echo $validation; ?> /></td>
										</tr>
										<?php } 
										
											} 
										} 
										?>
									</tbody>
							</table>
									<?php $project_id	= $_SESSION['logged']['project_id']; ?>
									<input type="hidden" name="project_id" value="<?php echo $project_id; ?>">
									<?php $warehouse_id	= $_SESSION['logged']['warehouse_id']; ?>
									<input type="hidden" name="warehouse_id" value="<?php echo $warehouse_id; ?>">
							<div class="col-xs-12">
								<div class="form-group">
									<input type="submit" name="<?php echo $submit_name; ?>" id="submit" class="btn btn-block btn-info" style="" value="SAVE DATA" <?php echo $submit; ?>/>    
								</div>
							</div>
							</form>
					</div>
				  <!-- /.card-body -->
				</div>
				<!-- /.card -->
			</div>
        </div>
        <!-- /.row -->
    </div><!--/. container-fluid -->
</section>