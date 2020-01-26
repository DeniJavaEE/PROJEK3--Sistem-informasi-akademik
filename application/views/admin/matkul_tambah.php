<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Tambah Mata Kuliah
			<small>Bidang Studi</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?=base_URL()?>admin/dashboard" ><i class="fa fa-dashboard"></i>&nbsp; Dashboard</a></li>
			<li><a href="<?=base_URL()?>admin/matkul" ><i class="fa fa-book"></i>&nbsp; Mata Kuliah</a></li>
			<li class="active"><i class="fa fa-wpforms"></i>&nbsp; Tambah Mata Kuliah</li>
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
					<?=form_open('admin/matkul_tambah', 'role="form"')?>
					<div class="row">
						<div class="col-md-6">
							<div class="box-body">
								<div class="form-group">
									<label>KODE MATA KULIAH</label>
									<input type="text" class="form-control" name="kode_mk" maxlength="5" placeholder="KODE MATA KULIAH" required autofocus>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="box-body">
								<div class="form-group">
									<label>Nama Mata Kuliah</label>
									<input type="text" class="form-control" name="nama_mk" maxlength="30" placeholder="Nama Mata Kuliah" required autofocus>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="box-body">
								<div class="form-group">
									<label>Dosen Pengajar</label><br>
									<select class="form-control" name="nid" required autofocus>
										<option value="">Pilih Dosen Pengajar</option>
										<?php foreach ($dsn as $d) : ?>
											<option value="<?=$d->nid?>"><?=getDosen($d->nid)?></option>
										<?php endforeach ?>
									</select>

								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="box-body">
								<div class="form-group">
									<label>Jumlah SKS</label>
									<input type="number" class="form-control" name="jml_sks" maxlength="2" placeholder="Jumlah SKS" required autofocus>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="box-body">
								<div class="form-group">
									<label>Semester</label><br>
									<select class="form-control" name="semester" required autofocus>
										<option value="">Pilih Semester</option>
										<option value="1">Semester 1</option>
										<option value="2">Semester 2</option>
										<option value="3">Semester 3</option>
										<option value="4">Semester 4</option>
										<option value="5">Semester 5</option>
										<option value="6">Semester 6</option>
										<option value="7">Semester 7</option>
										<option value="8">Semester 8</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="box-body">
								<div class="form-group">
									<label>Jurusan</label><br>
									<select class="form-control" name="jurusan" required autofocus>
										<option value="">Pilih Jurusan</option>
										<option value="Teknik Informatika">Teknik Informatika</option>
										<option value="Sistem Informasi">Sistem Informasi</option>
										<option value="Manajemen Informatika">Manajemen Informatika</option>
										<option value="Komputerisasi Akuntansi">Komputerisasi Akuntansi</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="box-footer">
						<button type="submit" name="submit" class="btn btn-success btn-flat">Simpan</button>
						<a href="<?=base_URL()?>admin/matkul" class="btn btn-warning btn-flat pull-right">Batal</a>
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