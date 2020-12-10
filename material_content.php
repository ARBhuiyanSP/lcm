<style>
.table td {
	padding:5px 0px 0px 12px;
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
					<h3 class="card-title">Material</h3>
				  </div>
				  <!-- /.card-header -->
				  <div class="card-body">
					<!-- we are adding the accordion ID so Bootstrap's collapse plugin detects it -->
					<div id="accordion">
					  <div class="card card-primary">
						<div class="card-header">
						  <h4 class="card-title w-100">
							<a class="d-block w-100" data-toggle="collapse" href="#collapseOne">
							  Category
							</a>
						  </h4>
						</div>
						<div id="collapseOne" class="collapse show" data-parent="#accordion">
						  <div class="card-body">
							<div class='row'>
                        <div class='col-md-10'>
                            <div class="table-responsive data-table-wrapper">
                                <table id="example2" class="table table-condensed table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Code</th>
                                            <th>Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="parent_category_body">
                                        <?php
                                        $parentCats = getTableDataByTableName('inv_materialcategorysub', '', 'category_description');
                                        if (isset($parentCats) && !empty($parentCats)) {
                                            foreach ($parentCats as $pcat) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $pcat['category_id']; ?></td>
                                                    <td><?php echo $pcat['category_description']; ?></td>
                                                    <td>
                                                        <button type="button" class="btn btn-sm" onclick="openParentEditForm('<?php echo $pcat['id']; ?>');">
                                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                        }else{ ?>
                                              <tr>
                                                  <td colspan="3">
                                                        <div class="alert alert-info" role="alert">
                                                            Sorry, no data found!
                                                        </div>
                                                    </td>
                                                </tr>  
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div><!--table-responsive-->
                        </div>
                        <div class='col-md-2'>
                            <button class="btn btn-flat btn-default pull-left" onclick="openModal('parent_item_added_form');"><i class="fa fa-plus"></i> Category</button>
                        </div>
                    </div>
						  </div>
						</div>
					  </div>
					  <div class="card card-info">
						<div class="card-header">
						  <h4 class="card-title w-100">
							<a class="d-block w-100" data-toggle="collapse" href="#collapseTwo">
							  Sub Category
							</a>
						  </h4>
						</div>
						<div id="collapseTwo" class="collapse" data-parent="#accordion">
						  <div class="card-body">
							<div class='row'>
								<div class='col-md-10'>
									<div class="table-responsive data-table-wrapper">
										<table id="example3" class="table table-condensed table-hover table-bordered site_custome_table">
											<thead>
												<tr>
													<th>Parent</th>
													<th>Code</th>
													<th>Sub Category</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody id="sub_category_body">
												<?php
												$childInfo = getTableDataByTableName('inv_materialcategory', '', 'material_sub_description');
												if (isset($childInfo) && !empty($childInfo)) {
													foreach ($childInfo as $sub) {
														?>
														<tr>
															<td>
																<?php 
																$dataresult =   getDataRowByTableAndId('inv_materialcategorysub', $sub['category_id']);
																echo (isset($dataresult) && !empty($dataresult) ? $dataresult->category_description : '');
																?>
															</td>
															<td><?php echo $sub['material_sub_id']; ?></td>
															<td><?php echo $sub['material_sub_description']; ?></td>
															<td>
																<button type="button" class="btn btn-sm" onclick="openSubMaterialEditForm('<?php echo $sub['id']; ?>');">
																	<i class="fa fa-edit" aria-hidden="true"></i>
																</button>
															</td>
														</tr>
														<?php
													}
												}else{ ?>
													  <tr>
														  <td colspan="4">
																<div class="alert alert-info" role="alert">
																	Sorry, no data found!
																</div>
															</td>
														</tr>  
												<?php } ?>
											</tbody>
										</table>
									</div><!--table-responsive-->
								</div>
								<div class='col-md-2'>
									<button class="btn btn-flat btn-default pull-left" onclick="openModal('sub_item_added_form');"><i class="fa fa-plus"></i> Sub Material</button>
								</div>
							</div>
						  </div>
						</div>
					  </div>
					  <div class="card card-success">
						<div class="card-header">
						  <h4 class="card-title w-100">
							<a class="d-block w-100" data-toggle="collapse" href="#collapseThree">
							  Material
							</a>
						  </h4>
						</div>
						<div id="collapseThree" class="collapse" data-parent="#accordion">
						  <div class="card-body">
							<div class="row">
								<div class='col-md-10'>
									<div class="table-responsive data-table-wrapper">
										<table id="example1" class="table table-condensed table-hover table-bordered site_custome_table">
											<thead>
												<tr>
													<th>Parent</th>
													<th>Sub Material</th>
													<th>Code</th>
													<th>Material</th>
													<th>Material Min Stock</th>
													<th>Unit</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody id="item_category_body">
												<?php
												$item_details = getTableDataByTableName('inv_material', '', 'material_description');
												if (isset($item_details) && !empty($item_details)) {
													foreach ($item_details as $item) {
														?>
														<tr>
															<td>
																<?php 
																$dataresult =   getDataRowByTableAndId('inv_materialcategorysub', $item['material_id']);
																echo (isset($dataresult) && !empty($dataresult) ? $dataresult->category_description : '');
																?>
															</td>
															<td>
																<?php
																$dataresult =   getDataRowByTableAndId('inv_materialcategory', $item['material_sub_id']);
																echo (isset($dataresult) && !empty($dataresult) ? $dataresult->material_sub_description : '');
																?>
															</td>
															<td><?php echo $item['material_id_code']; ?></td>
															<td><?php echo $item['material_description']; ?></td>
															<td><?php echo $item['material_min_stock']; ?></td>
															<td><?php echo getDataRowByTableAndId('inv_item_unit', $item['qty_unit'])->unit_name; ?></td>
															<td>
																<button type="button" class="btn btn-sm" onclick="openMaterialEditForm('<?php echo $item['id']; ?>');">
																	<i class="fa fa-edit" aria-hidden="true"></i>
																</button>
															</td>
														</tr>
														<?php
													}
												}else{ ?>
													  <tr>
														  <td colspan="7">
																<div class="alert alert-info" role="alert">
																	Sorry, no data found!
																</div>
															</td>
														</tr>  
												<?php } ?>
											</tbody>
										</table>
									</div><!--table-responsive-->
								</div>
								<div class='col-md-2'>
									<button class="btn btn-flat btn-default pull-left" onclick="openModal('item_added_form');"><i class="fa fa-plus"></i> Material</button>
								</div>
							</div>
						  </div>
						</div>
					  </div>
					</div>
				  </div>
				  <!-- /.card-body -->
				</div>
				<!-- /.card -->
			</div>
        </div>
        <!-- /.row -->
    </div><!--/. container-fluid -->
</section>