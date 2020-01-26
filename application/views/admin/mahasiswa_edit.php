<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Edit Mahasiswa
			<small>Master Data</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?=base_URL()?>admin/dashboard" ><i class="fa fa-dashboard"></i>&nbsp; Dashboard</a></li>
			<li><i class="fa fa-database"></i>&nbsp; Master Data</li>
			<li><a href="<?=base_URL()?>admin/mahasiswa" ><i class="fa fa-users"></i>&nbsp; Data Mahasiswa</a></li>
			<li class="active"><i class="fa fa-wpforms"></i>&nbsp; Edit Mahasiswa</li>
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
					<?=form_open_multipart('admin/mahasiswa_edit', 'role="form"')?>
					<div class="row">
						<div class="col-md-6">
							<div class="box-body">
								<div class="form-group">
									<label>NIM</label>
									<input type="number" class="form-control" name="nim" value="<?=$mhs['nim']?>" maxlength="20" placeholder="NIM" readonly>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="box-body">
								<div class="form-group">
									<label>Password</label>
									<input type="password" class="form-control" name="password" maxlength="50" placeholder="Password">
								</div>
							</div>
						</div>
						<div class="col-md-7">
							<div class="box-body">
								<div class="form-group">
									<label>Nama Mahasiswa</label>
									<input type="text" class="form-control" name="nama_mhs" value="<?=$mhs['nama_mhs']?>" maxlength="30" placeholder="Nama Mahasiswa" required autofocus>
								</div>
							</div>
						</div>

						<div class="col-md-5">
							<div class="box-body">
								<div class="form-group">
									<label>Jenis Kelamin</label><br>
									<?php if ($mhs['jk_mhs'] == 'Laki-Laki') {
										echo '
										<input type="radio" class="minimal" name="jk_mhs" value="Laki-Laki" checked> Laki-Laki
										&nbsp;&nbsp;
										<input type="radio" class="minimal" name="jk_mhs" value="Perempuan"> Perempuan
										';
									} else {
										echo '
										<input type="radio" class="minimal" name="jk_mhs" value="Laki-Laki"> Laki-Laki
										&nbsp;&nbsp;
										<input type="radio" class="minimal" name="jk_mhs" value="Perempuan" checked> Perempuan
										';
									} ?>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="box-body">
								<div class="form-group">
									<label>Jurusan</label><br>
									<select class="form-control" name="jurusan_mhs" required autofocus>
										<option value="">Pilih Jurusan</option>
										<option value="Teknik Informatika" <?php if($mhs['jurusan_mhs'] == 'Teknik Informatika') { echo "selected=selected";} ?>>Teknik Informatika</option>
										<option value="Sistem Informasi" <?php if($mhs['jurusan_mhs'] == 'Sistem Informasi') { echo "selected=selected";} ?>>Sistem Informasi</option>
										<option value="Manajemen Informatika" <?php if($mhs['jurusan_mhs'] == 'Manajemen Informatika') { echo "selected=selected";} ?>>Manajemen Informatika</option>
										<option value="Komputerisasi Akuntansi" <?php if($mhs['jurusan_mhs'] == 'Komputerisasi Akuntansi') { echo "selected=selected";} ?>>Komputerisasi Akuntansi</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-md-1">
							<div class="box-body">
								<div class="form-group">
									<label>Jenjang</label><br>
									<?php if ($mhs['jenjang_mhs'] == 'D3') {
										echo '
										<input type="radio" class="minimal" name="jenjang_mhs" value="D3" checked> D3
										<br>
										<input type="radio" class="minimal" name="jenjang_mhs" value="S1"> S1
										';
									} else {
										echo '
										<input type="radio" class="minimal" name="jenjang_mhs" value="D3"> D3
										<br>
										<input type="radio" class="minimal" name="jenjang_mhs" value="S1" checked> S1
										';
									} ?>
								</div>
							</div>
						</div>
						<div class="col-md-2">
							<div class="box-body">
								<div class="form-group">

									<label>Tahun Akademik</label>
									<input type="number" class="form-control" name="thn_akademik" value="<?=$mhs['thn_akademik']?>" maxlength="4" placeholder="Tahun Akademik" required autofocus>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="box-body">
								<div class="form-group">
									<label>Kelas Program</label><br>
									<?php if ($mhs['kelas_program'] == 'Pagi') {
										echo '
										<input type="radio" class="minimal" name="kelas_program" value="Pagi" checked> Pagi
										&nbsp;&nbsp;
										<input type="radio" class="minimal" name="kelas_program" value="Malam"> Malam
										&nbsp;&nbsp;
										<input type="radio" class="minimal" name="kelas_program" value="Sif"> Sif
										';
									} else if ($mhs['kelas_program'] == 'Malam') {
										echo '
										<input type="radio" class="minimal" name="kelas_program" value="Pagi"> Pagi
										&nbsp;&nbsp;
										<input type="radio" class="minimal" name="kelas_program" value="Malam" checked> Malam
										&nbsp;&nbsp;
										<input type="radio" class="minimal" name="kelas_program" value="Sif"> Sif
										';
									} else {
										echo '
										<input type="radio" class="minimal" name="kelas_program" value="Pagi"> Pagi
										&nbsp;&nbsp;
										<input type="radio" class="minimal" name="kelas_program" value="Malam"> Malam
										&nbsp;&nbsp;
										<input type="radio" class="minimal" name="kelas_program" value="Sif" checked> Sif
										';
									} ?>
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
						if($mhs['foto'] && file_exists('assets/img/'.$mhs['foto'])) {
							$foto = $mhs['foto'];
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