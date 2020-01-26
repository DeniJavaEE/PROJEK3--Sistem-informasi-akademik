<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Edit Admin
			<small>Master Data</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?=base_URL()?>admin/dashboard" ><i class="fa fa-dashboard"></i>&nbsp; Dashboard</a></li>
			<li><i class="fa fa-database"></i>&nbsp; Master Data</li>
			<li><a href="<?=base_URL()?>admin/user" ><i class="fa fa-user"></i>&nbsp; Data Admin</a></li>
			<li class="active"><i class="fa fa-wpforms"></i>&nbsp; Edit Admin</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<!-- left column -->
			<div class="col-md-12">
				<!-- general form elements -->
				<div class="box box-primary">
					<!-- form start -->
					<?=form_open_multipart('admin/user_edit', 'role="form"')?>
					<div class="row">
						<div class="col-md-6">
							<div class="box-body">
								<div class="form-group">
									<label>USERNAME</label>
									<input type="text" class="form-control" name="username" value="<?=$adm['username']?>" maxlength="20" placeholder="USERNAME" readonly>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="box-body">
								<div class="form-group">
									<label>Password</label>
									<input type="password" class="form-control" name="password" maxlength="50" placeholder="Password" >
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="box-body">
								<div class="form-group">
									<label>Nama Admin</label>
									<input type="text" class="form-control" name="nama_admin" value="<?=$adm['nama_admin']?>" maxlength="30" placeholder="Nama Admin" required autofocus>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="box-body">
								<div class="form-group">
									<label>Ganti Foto</label>
									<input type="file" class="form-control" name="filefoto" placeholder="Foto">
									<p class="help-block"><i>Format File : jpg, JPG, jpeg, JPEG, png, PNG, gif, BMP &nbsp; | &nbsp; Ukuran : 2 MB</i></p>
								</div>
							</div>
						</div>
						<?php
						$foto = 'default.jpg';
						if($adm['foto'] && file_exists('assets/img/'.$adm['foto'])) {
							$foto = $adm['foto'];
						}
						?>
						<div class="col-md-6">
							<div class="box-body">
								<div class="form-group">
									<label>Foto Profil</label>
									<div class="fileupload-new thumbnail" class="img-responsive" style="width: 100px; height: 100px;">
										<img src="<?=base_URL().'assets/img/'.$foto?>" alt="foto profil" style="height: 90px;"/>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="box-footer">
						<button type="submit" name="submit" class="btn btn-success btn-flat">Update</button>
						<a href="<?=base_URL()?>admin/user" class="btn btn-warning btn-flat pull-right">Batal</a>
					</div>
					<?=form_close()?>
					<!-- form end -->
				</div>
				<!-- /.box -->
			</div>
		</div>
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->