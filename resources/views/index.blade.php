<!-- menandakan ini adalah konten homepage admin -->
@extends('layout/main')

<!-- menandakan ini title di halaman ini adalah judul homepage admin -->
@section('title', 'Homepage Admin')

<!-- ini adalah isi homepage admin -->
@section('container')
<div class="header">
	<h1 class="page-header">
		Dashboard
	</h1>
	<ol class="breadcrumb">
		<li><a href="#">Home</a></li>
		<li><a href="#">Dashboard</a></li>
		<li class="active">Data</li>
	</ol>

</div>
<div id="page-inner">
	<div class="dashboard-cards">
		<div class="row">

			<div class="col-xs-12 col-sm-6 col-md-6">
				<div class="card horizontal cardIcon waves-effect waves-dark">
					<div class="card-image orange">
						<i class="material-icons dp48">dry_cleaning</i>
					</div>
					<div class="card-stacked orange">
						<div class="card-content">
							<h3>6</h3>
						</div>
						<div class="card-action">
							<strong>Total Paket Laundry</strong>
						</div>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-sm-6 col-md-6">
				<div class="card horizontal cardIcon waves-effect waves-dark">
					<div class="card-image blue">
						<i class="material-icons dp48">add_business</i>
					</div>
					<div class="card-stacked blue">
						<div class="card-content">
							<h3>1</h3>
						</div>
						<div class="card-action">
							<strong>Total Outlet</strong>
						</div>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-sm-6 col-md-6">

				<div class="card horizontal cardIcon waves-effect waves-dark">
					<div class="card-image purple">
						<i class="material-icons dp48">supervisor_account</i>
					</div>
					<div class="card-stacked purple">
						<div class="card-content">
							<h3>10</h3>
						</div>
						<div class="card-action">
							<strong>Jumlah User</strong>
						</div>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-sm-6 col-md-6">

				<div class="card horizontal cardIcon waves-effect waves-dark">
					<div class="card-image green">
						<i class="material-icons dp48">local_atm</i>
					</div>
					<div class="card-stacked green">
						<div class="card-content">
							<h3>4</h3>
						</div>
						<div class="card-action">
							<strong>Jumlah Pelanggan</strong>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ini adalah tutup isi kontent / section -->
	@endsection