@extends('admin.master')

@section('title', 'List of Plants')

@section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<i class="fa fa-list"></i> List of Plant Variants
		</h1>
		<ol class="breadcrumb">
			<li><a href="{{ route('admin_dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Plants</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<!-- Info boxes -->
		<div class="row">
			<div class="col-md-12">
				<div class="box box-success">
					<div class="box-body">
						<div class="row">
							<div class="col-md-12">
								<table id="example1" class="table table-striped table-hover">
									<thead>
										<tr>
											<th>#</th>
											<th width="9%">Plant Name</th>
											<th width="9%">Latin Name</th>
											<th width="25%">Description</th>
											<th width="25%">Growth Conditions</th>
											<th width="8%">Plant Photo</th>
											<th>Added</th>
											<th></th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Muringa</td>
											<td>Moringa</td>
											<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugit corporis ratione suscipit dolor saepe ex. Architecto recusandae quo, corrupti maxime aliquid ipsam culpa rem voluptas alias asperiores at, expedita.</td>
											<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident dolores sunt, soluta ab. Vitae quo veniam facere minima, quas beatae. Eveniet reprehenderit odit, voluptatem officia nam rerum sequi, eius. Nam.</td>
											<td><img height="50px" src="#"></td>
											<td>12767678</td>
											<td><a href="#" class="btn btn-danger btn-sm">Edit</a></td>
											<td><a href="#" class="btn btn-primary btn-sm">Details</a></td>
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

@section('scripts')
<script>
	$(function () {
		$('#example1').DataTable({
			'ordering'    : false
		})
	})
</script>
@endsection