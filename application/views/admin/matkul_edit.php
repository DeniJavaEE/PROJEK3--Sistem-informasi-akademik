<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Edit Mata Kuliah
			<small>Bidang Studi</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?=base_URL()?>admin/dashboard" ><i class="fa fa-dashboard"></i>&nbsp; Dashboard</a></li>
			<li><a href="<?=base_URL()?>admin/matkul" ><i class="fa fa-book"></i>&nbsp; Mata Kuliah</a></li>
			<li class="active"><i class="fa fa-wpforms"></i>&nbsp; Edit Mata Kuliah</li>
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
					<?=form_open('admin/matkul_edit', 'role="form"')?>
					<div class="row">
						<div class="col-md-6">
							<div class="box-body">
								<div class="form-group">
									<label>KODE MATA KULIAH</label>
									<input type="text" class="form-control" name="kode_mk" value="<?=$mtk['kode_mk']?>" maxlength="5" placeholder="KODE MATA KULIAH" readonly>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="box-body">
								<div class="form-group">
									<label>Nama Mata Kuliah</label>
									<input type="text" class="form-control" name="nama_mk" value="<?=$mtk['nama_mk']?>" maxlength="30" placeholder="Nama Mata Kuliah" required autofocus>
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
											<option value="<?=$d->nid?>" <?php if($mtk['nid'] == $d->nid) { echo "selected=selected";} ?>><?=getDosen($d->nid)?></option>
										<?php endforeach ?>

									</select>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="box-body">
								<div class="form-group">
									<label>Jumlah SKS</label>
									<input type="number" class="form-control" name="jml_sks" value="<?=$mtk['jml_sks']?>" maxlength="2" placeholder="Jumlah SKS" required autofocus>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="box-body">
								<div class="form-group">
									<label>Semester</label><br>
									<select class="form-control" name="semester" required autofocus>
										<option value="">Pilih Semester</option>
										<option value="1" <?php if($mtk['semester'] == '1') { echo "selected=selected";} ?>>Semester 1</option>
										<option value="2" <?php if($mtk['semester'] == '2') { echo "selected=selected";} ?>>Semester 2</option>
										<option value="3" <?php if($mtk['semester'] == '3') { echo "selected=selected";} ?>>Semester 3</option>
										<option value="4" <?php if($mtk['semester'] == '4') { echo "selected=selected";} ?>>Semester 4</option>
										<option value="5" <?php if($mtk['semester'] == '5') { echo "selected=selected";} ?>>Semester 5</option>
										<option value="6" <?php if($mtk['semester'] == '6') { echo "selected=selected";} ?>>Semester 6</option>
										<option value="7" <?php if($mtk['semester'] == '7') { echo "selected=selected";} ?>>Semester 7</option>
										<option value="8" <?php if($mtk['semester'] == '8') { echo "selected=selected";} ?>>Semester 8</option>
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
										<option value="Teknik Informatika" <?php if($mtk['jurusan'] == 'Teknik Informatika') { echo "selected=selected";} ?>>Teknik Informatika</option>
										<option value="Sistem Informasi" <?php if($mtk['jurusan'] == 'Sistem Informasi') { echo "selected=selected";} ?>>Sistem Informasi</option>
										<option value="Manajemen Informatika" <?php if($mtk['jurusan'] == 'Manajemen Informatika') { echo "selected=selected";} ?>>Manajemen Informatika</option>
										<option value="Komputerisasi Akuntansi" <?php if($mtk['jurusan'] == 'Komputerisasi Akuntansi') { echo "selected=selected";} ?>>Komputerisasi Akuntansi</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="box-footer">
						<button type="submit" name="submit" class="btn btn-success btn-flat">Update</button>

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