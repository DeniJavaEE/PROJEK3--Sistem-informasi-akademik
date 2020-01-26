<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Tambah Mahasiswa
			<small>Master Data</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?=base_URL()?>admin/dashboard" ><i class="fa fa-dashboard"></i>&nbsp; Dashboard</a></li>
			<li><i class="fa fa-database"></i>&nbsp; Master Data</li>
			<li><a href="<?=base_URL()?>admin/mahasiswa" ><i class="fa fa-users"></i>&nbsp; Data Mahasiswa</a></li>
			<li class="active"><i class="fa fa-wpforms"></i>&nbsp; Tambah Mahasiswa</li>
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
					<?=form_open_multipart('admin/mahasiswa_tambah', 'role="form"')?>
					<div class="row">
						<div class="col-md-6">
							<div class="box-body">
								<div class="form-group">
									<label>NIM</label>
									<input type="number" class="form-control" name="nim" maxlength="20" placeholder="NIM" required autofocus>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="box-body">
								<div class="form-group">
									<label>Password</label>
									<input type="password" class="form-control" name="password" maxlength="50" placeholder="Password" required autofocus>
								</div>
							</div>
						</div>
						<div class="col-md-7">
							<div class="box-body">
								<div class="form-group">
									<label>Nama Mahasiswa</label>
									<input type="text" class="form-control" name="nama_mhs" maxlength="30" placeholder="Nama Mahasiswa" required autofocus>
								</div>
							</div>
						</div>

						<div class="col-md-5">
							<div class="box-body">
								<div class="form-group">
									<label>Jenis Kelamin</label><br>
									<input type="radio" class="minimal" name="jk_mhs" value="Laki-Laki" checked> Laki-Laki
									&nbsp;&nbsp;
									<input type="radio" class="minimal" name="jk_mhs" value="Perempuan"> Perempuan
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="box-body">
								<div class="form-group">
									<label>Jurusan</label><br>
									<select class="form-control" name="jurusan_mhs" required autofocus>
										<option value="">Pilih Jurusan</option>
										<option value="Teknik Informatika">Teknik Informatika</option>
										<option value="Sistem Informasi">Sistem Informasi</option>
										<option value="Manajemen Informatika">Manajemen Informatika</option>
										<option value="Komputerisasi Akuntansi">Komputerisasi Akuntansi</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-md-1">
							<div class="box-body">
								<div class="form-group">
									<label>Jenjang</label><br>
									<input type="radio" class="minimal" name="jenjang_mhs" value="D3" checked> D3
									<br>
									<input type="radio" class="minimal" name="jenjang_mhs" value="S1"> S1
								</div>
							</div>
						</div>
						<div class="col-md-2">
							<div class="box-body">
								<div class="form-group">
									<label>Tahun Akademik</label>
									<input type="number" class="form-control" name="thn_akademik" maxlength="4" placeholder="Tahun Akademik" required autofocus>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="box-body">
								<div class="form-group">
									<label>Kelas Program</label><br>
									<input type="radio" class="minimal" name="kelas_program" value="Pagi" checked> Pagi
									&nbsp;&nbsp;
									<input type="radio" class="minimal" name="kelas_program" value="Malam"> Malam
									&nbsp;&nbsp;
									<input type="radio" class="minimal" name="kelas_program" value="Sif"> Sif
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="box-body">
								<div class="form-group">
									<label>Foto</label>

									<input type="file" class="form-control" name="filefoto" placeholder="Foto">
									<p class="help-block"><i>Format File : jpg, JPG, jpeg, JPEG, png, PNG, gif, BMP &nbsp; | &nbsp; Ukuran : 2 MB</i></p>
								</div>
							</div>
						</div>
					</div>
					<div class="box-footer">
						<button type="submit" name="submit" class="btn btn-success btn-flat">Simpan</button>
						<a href="<?=base_URL()?>admin/mahasiswa" class="btn btn-warning btn-flat pull-right">Batal</a>
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