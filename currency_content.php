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

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
			<div class="col-md-12">
				<div class="card">
				  <div class="card-header">
					<h3 class="card-title">Currency Entry Form</h3>
				  </div>
				  <!-- /.card-header -->
				  <div class="card-body">
					<!-- we are adding the accordion ID so Bootstrap's collapse plugin detects it -->
					<div class="form-group">
						<form action="#" method="post" name="" id="">
							<div class="row" id="div1" style="">
								<div class="col-md-3 col-sm-6 col-xs-12">
									<div class="form-group">
										<label>Currency Name</label>
										<input type="text" name="currency_name" id="name" class="form-control" required >
									</div>
								</div>
								<div class="col-md-2 col-sm-6 col-xs-12">
									<div class="form-group">
										<label>Currency Icon</label>
										<input type="text" name="currency_icon" id="name" class="form-control" required >
									</div>
								</div>
								<div class="col-md-2 col-sm-3 col-xs-12">
									<div class="form-group">
										<label class="hide">.</label>
										<input type="submit" name="currency_submit" id="submit" class="btn btn-block btn-info" value="Save" />   
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<table id="example2" class="table table-bordered table-striped table-hover customsize">
										<thead>
											<tr>
												<th>Currency Name</th>
												<th>Currency Icon</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
										<?php
											$projectsData = getTableDataByTableName('currency');
											;
											if (isset($projectsData) && !empty($projectsData)) {
												foreach ($projectsData as $data) {
													?>
											<tr>
												<td><?php echo $data['currency_name']; ?></td>
												<td><?php echo $data['currency_icon']; ?></td>
												<td>
													<a href="#"><i class="fas fa-edit text-success"></i></a>
													<a href="#"><i class="fa fa-trash text-danger"></i></a>
												</td>
											</tr>
											<?php
												}
											}
											?>
										</tbody>
									</table>
								</div>
							</div>
						</form>
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