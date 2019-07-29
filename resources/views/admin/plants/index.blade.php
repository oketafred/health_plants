@extends('admin.master')

@section('title', 'List of Plants')

@section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<i class="fa fa-list"></i> List of Plants
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
				<div class="box box-success ">
					<div class="box-header with-border">
						<h3 class="box-title">
							<a href="{{ route('plants.create') }}" class="btn btn-success"><i class="fa fa-plus"></i> Add New Plant</a>
						</h3>
						<div class="box-tools">
							<a href="{{ route('plants.export') }}" class="btn btn-danger"><i class="fa fa-download"></i> Download in Excel</a>
						</div>
					</div>
					<!-- /.box-header -->
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
										@forelse($plants as $plant)
										<tr>
											<td>{{ $plant->id }}</td>
											<td>{{ $plant->plant_name }}</td>
											<td>{{ $plant->latin_name }}</td>
											<td>{!! substr($plant->description, 0, 180) !!}</td>
											<td>{!! $plant->growth_condition !!}</td>
											<td><img height="50px" src="{{ asset('plant_photos/' . $plant->plant_photo) }}"></td>
											<td>{{ $plant->created_at->diffForHumans() }}</td>
											<td><a href="#" class="btn btn-danger btn-sm">Edit</a></td>
											<td><a href="{{ route('plants.variants', $plant->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-leaf"></i> Plant Variants</a></td>
										</tr>
										@empty

										@endif
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