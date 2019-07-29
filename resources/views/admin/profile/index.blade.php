@extends('admin.master')

@section('title', 'My Profile')

@section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			My Profile
		</h1>
		<ol class="breadcrumb">
			<li><a href="{{ route('admin_dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">My Profile</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">

		<div class="row">
			<div class="col-md-3">

				<!-- Profile Image -->
				<div class="box box-primary">
					<div class="box-body box-profile">
						<img class="profile-user-img img-responsive img-circle" src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" alt="User profile picture">

						<h3 class="profile-username text-center">{{ Sentinel::getUser()->last_name }} {{ Sentinel::getUser()->first_name }}</h3>

						<p class="text-muted text-center">Health Plants - Admin</p>

						<ul class="list-group list-group-unbordered">
							<li class="list-group-item">
								<b>Followers</b> <a class="pull-right">1,322</a>
							</li>
							<li class="list-group-item">
								<b>Following</b> <a class="pull-right">543</a>
							</li>
							<li class="list-group-item">
								<b>Friends</b> <a class="pull-right">13,287</a>
							</li>
						</ul>

					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
			<div class="col-md-9">
				<div class="nav-tabs-custom">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#settings" data-toggle="tab">Settings</a></li>
					</ul>
					<div class="tab-content">
						<!-- /.tab-pane -->

						<div class="active tab-pane" id="settings">
							<form action="{{ route('reset.password') }}" method="POST" class="form-horizontal">

								{{ csrf_field() }}

								<div class="form-group">
									<label for="firstName" class="col-sm-3 control-label">First Name</label>

									<div class="col-sm-9">
										<input type="email" class="form-control" id="inputName" value="{{ Sentinel::getUser()->first_name }}" disabled>
									</div>
								</div>
								<div class="form-group">
									<label for="lastName" class="col-sm-3 control-label">Last Name</label>

									<div class="col-sm-9">
										<input type="text" class="form-control" id="inputName" value="{{ Sentinel::getUser()->last_name }}" disabled>
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail" class="col-sm-3 control-label">Email Address</label>

									<div class="col-sm-9">
										<input type="email" class="form-control" id="inputEmail" value="{{ Sentinel::getUser()->email }}" disabled>
									</div>
								</div>
								<hr>
								<div class="form-group">
									<label for="currentPassword" class="col-sm-3 control-label">Current Password</label>

									<div class="col-sm-9">
										<input type="password" name="old_password" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label for="currentPassword" class="col-sm-3 control-label">New Password</label>

									<div class="col-sm-9">
										<input type="password" name="password" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label for="currentPassword" class="col-sm-3 control-label">Confirm Password</label>

									<div class="col-sm-9">
										<input type="password" name="password_confirmation" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-3 col-sm-9">
										<button type="submit" class="btn btn-danger">Change Password</button>
									</div>
								</div>
							</form>
						</div>
						<!-- /.tab-pane -->
					</div>
					<!-- /.tab-content -->
				</div>
				<!-- /.nav-tabs-custom -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->

	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection