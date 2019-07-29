@extends('admin.master')

@section('title', 'Add a new Plant')

@section('styles')
<link href="{{ asset('assets/summernote/summernote.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Plants
		</h1>
		<ol class="breadcrumb">
			<li><a href="{{ route('admin_dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Add a New Plant</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<!-- Info boxes -->
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">
							<a href="{{ route('plants.index') }}" class="btn btn-success"><i class="fa fa-list"></i>  List of Plants</a>
						</h3>
						<div class="box-tools">
							<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-default">
								<i class="fa fa-plus-circle"></i> Import from Excel
							</button>
						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<div class="row">
							<div class="col-md-12">
								<form action="{{ route('plants.store') }}" method="POST" enctype="multipart/form-data">

									{{ csrf_field() }}
									<div class="row">
										<div class="form-group col-md-6">
											<input type="text" name="plant_name" class="form-control" placeholder="Enter Plant Name">
										</div>
										<div class="form-group col-md-6">
											<input type="text" name="latin_name" class="form-control" placeholder="Enter Latin Name">
										</div>
									</div>
									<div class="row">
										<div class="form-group col-md-6">
											<input type="file" name="plant_photo" class="form-control">
										</div>
									</div>
									<div class="row">
										<div class="form-group col-md-12">
											<textarea id="summernote1" class="form-control" name="plant_description" ></textarea>
										</div>
										<div class="form-group col-md-12">
											<textarea id="summernote2" class="form-control" name="plant_growth_description"></textarea>
										</div>
									</div>
									<div class="row">
										<div class="pull-right col-md-2">
											<button type="submit" class="btn btn-success btn-block">Submit</button>
										</div>
									</div>
								</form>
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


<!--Modal-->
<div class="modal fade" id="modal-default">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Import an Excel File</h4>
				</div>
				<form action="{{ route('plants.import') }}" method="POST" enctype="multipart/form-data">

					{{ csrf_field() }}

					<div class="modal-body">
						<label for="excel_file">Add Excel File</label>
						<input type="file" name="excel_file" class="form-control">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Save changes</button>
					</div>
				</form>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>

	@endsection

	@section('scripts')
	<script src="{{ asset('assets/summernote/summernote.js') }}"></script>
	<script>
		$(document).ready(function() {

        // Loading Summernote
        $('#summernote1').summernote({
        	placeholder: 'Plant Description',
        	tabsize: 2,
        	height: 70,
        	toolbar: [
    // [groupName, [list of button]]
    ['style', ['bold', 'italic', 'underline', 'clear']],
    ['font', ['strikethrough', 'superscript', 'subscript']],
    ['fontsize', ['fontsize']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['height', ['height']]
    ]
});

        $('#summernote2').summernote({
        	placeholder: 'Plant Growth Description',
        	tabsize: 2,
        	height: 70,
        	toolbar: [
    // [groupName, [list of button]]
    ['style', ['bold', 'italic', 'underline', 'clear']],
    ['font', ['strikethrough', 'superscript', 'subscript']],
    ['fontsize', ['fontsize']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['height', ['height']]
    ]
});

    });

</script>
@endsection