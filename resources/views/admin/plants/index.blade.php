@extends('admin.master')

@section('title', 'List of Plants')

@section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Plants
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Plants</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<!-- Info boxes -->
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title"><i class="fa fa-list"></i> List of Plants</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<div class="row">
							<div class="col-md-12">
								<table class="table table-bordered table-hover">
									<thead>
										<tr>
											<th>#</th>
											<th width="9%">Plant Name</th>
											<th width="9%">Latin Name</th>
											<th width="10%">Country</th>
											<th width="25%">Description</th>
											<th width="25%">Growth Conditions</th>
											<th width="8%">Plant Photo</th>
											<th>Created At</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Moringa</td>
											<td>Uganda</td>
											<td>Lorem ipsum dolor sit amet</td>
											<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero tempora itaque nisi voluptas! Reprehenderit error dolorem perferendis ipsam delectus molestiae, inventore excepturi iste nisi modi molestias ad, illum. Suscipit, eos.</td>
											<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit atque cumque, ea excepturi, corporis iure rerum deleniti porro molestias quasi beatae consectetur labore reiciendis corrupti cum veniam quos illum, debitis!</td>
											<td><img class="img-thumbnail" src="{{ asset('assets/dist/img/user2-160x160.jpg') }}"></td>
											<td>{{ now() }}</td>
										</tr>

									</tbody>
								</table>
							</div>
							<!-- /.col -->
						</div>
						<!-- /.row -->
					</div>
					<!-- ./box-body -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->

		<!-- /.row -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection