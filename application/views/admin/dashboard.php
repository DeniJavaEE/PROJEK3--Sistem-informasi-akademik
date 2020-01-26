Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Dashboard
			<small>Panel ADMINISTRATOR</small>
		</h1>
		<ol class="breadcrumb">
			<li class="active"><i class="fa fa-dashboard"></i>&nbsp; DASHBOARD</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
		<!-- Info boxes -->
		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-12" data-toggle="tooltip" data-placement="top" title="Panel COURSES">
				<div class="info-box">
					<span class="info-box-icon bg-"><i class="fa fa-book"></i></span>
					<div class="info-box-content">
						<span class="info-box-text">Mata Kuliah</span>
						<span class="info-box-number"><?=$mtk?></span>

					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->
			<div class="col-md-3 col-sm-6 col-xs-12" data-toggle="tooltip" data-placement="top" title="Panel COLLEGE STUDENT">
				<div class="info-box">
					<span class="info-box-icon bg-red " data-toggle="tooltip" data-placement="right" title="Panel COLLEGE STUDENT"><i class="fa fa-users"></i></span>
					<div class="info-box-content">
						<span class="info-box-text">Mahasiswa</span>
						<span class="info-box-number"><?=$mhs?></span>
					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->
			<!-- fix for small devices only -->
			<div class="clearfix visible-sm-block"></div>
	<div class="col-md-3 col-sm-6 col-xs-12" data-toggle="tooltip" data-placement="right" title="PANEL LECTURER">
				<div class="info-box">
					<span class="info-box-icon bg-green"><i class="fa fa-user-md"></i></span>
					<div class="info-box-content">
						<span class="info-box-text">Dosen</span>
						<span class="info-box-number"><?=$dsn?></span>
					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->
			<div class="col-md-3 col-sm-6 col-xs-12" data-toggle="tooltip" data-placement="right" title="Panel ADMIN">
				<div class="info-box">
					<span class="info-box-icon bg-yellow"><i class="fa fa-user"></i></span>
					<div class="info-box-content">
						<span class="info-box-text">Admin</span>
						<span class="info-box-number"><?=$adm?></span>
					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
		
		<div class="callout callout-info">
			<h4>Welcome !</h4>
			<p>
				Hai, Selamat datang di <i>Panel Admin</i> <b>SIINI (Sistem Informasi Input Nilai)</b>.
			</p>
		</div>
		<!-- /.box -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->