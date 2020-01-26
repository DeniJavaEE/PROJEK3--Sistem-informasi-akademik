<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Edit Nilai
			<small>Nilai Mahasiswa</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?=base_URL()?>admin/dashboard" ><i class="fa fa-dashboard"></i>&nbsp; Dashboard</a></li>
			<li><a href="<?=base_URL()?>admin/nilai" ><i class="fa fa-calculator"></i>&nbsp; Daftar Nilai Mahasiswa</a></li>
			<li class="active"><i class="fa fa-wpforms"></i>&nbsp; Edit Nilai</li>
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
					<?=form_open('admin/nilai_edit', 'role="form"')?>
					<div class="row">
						<div class="col-md-3">
							<div class="box-body">
								<div class="form-group">
									<label>NIM Mahasiswa</label><br>
									<input type="text" class="form-control" id="nim" name="nim" value="<?=$nil['nim']?>" maxlength="20" placeholder="NIM Mahasiswa" required readonly>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="box-body">
								<div class="form-group">
									<label>Nama Mahasiswa</label>
									<input type="text" class="form-control" id="nama_mhs" value="<?=getMhs($nil['nim'])?>" maxlength="30" placeholder="Nama Mahasiswa" required readonly>
								</div>
							</div>
						</div>
						<div class="col-md-2">
							<div class="box-body">
								<div class="form-group">
									<label>Tahun Akademik</label>
									<input type="number" class="form-control" id="thn_akademik" value="<?=getTAMhs($nil['nim'])?>" maxlength="4" placeholder="Tahun Akademik" required readonly>
								</div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="box-body">
								<div class="form-group">
									<label>Jurusan</label>
									<input type="text" class="form-control" id="jurusan_mhs" value="<?=getJMhs($nil['nim'])?>" maxlength="30" placeholder="Jurusan" required readonly>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="box-body">
								<div class="form-group">
									<label>KODE Mata Kuliah</label><br>
									<input type="text" class="form-control" id="kode_mk" value="<?=$nil['kode_mk']?>" maxlength="5" placeholder="KODE Mata Kuliah" required readonly>
								</div>
							</div>
						</div>
						<div class="col-md-7">
							<div class="box-body">
								<div class="form-group">
									<label>Nama Mata Kuliah</label>
									<input type="text" class="form-control" id="nama_mk" value="<?=getMatkul($nil['kode_mk'])?>" maxlength="30" placeholder="Nama Mata Kuliah" required readonly>
								</div>
							</div>
						</div>
						<div class="col-md-2">
							<div class="box-body">
								<div class="form-group">
									<label>Semester</label>
									<input type="number" class="form-control" id="semester" value="<?=getSMatkul($nil['kode_mk'])?>" maxlength="2" placeholder="Semester" required readonly>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="box-body">
								<div class="form-group">
									<label>NID Dosen Pengajar</label>
									<input type="text" class="form-control" id="nid" value="<?=getDMatkul($nil['kode_mk'])?>" maxlength="30" placeholder="NID Dosen Pengajar" required readonly>
								</div>
							</div>
						</div>
						<div class="col-md-9">
							<div class="box-body">
								<div class="form-group">
									<label>Nama Dosen Pengajar</label>
									<input type="text" class="form-control" id="nama_dosen" value="<?=getDosen(getDMatkul($nil['kode_mk']))?>" maxlength="30" placeholder="Nama Dosen Pengajar" required readonly>
								</div>
							</div>
						</div>
						<div class="col-md-5">
							<div class="box-body">

								<div class="form-group">
									<label>NILAI</label>
									<input type="number" class="form-control" id="nil" name="nilai" value="<?=$nil['nilai']?>" maxlength="2" onkeyup="sum();" placeholder="NILAI" required autofocus>
								</div>
							</div>
						</div>
						<div class="col-md-5">
							<div class="box-body">
								<div class="form-group">
									<label>GRADE</label>
									<input type="text" class="form-control" id="gr" name="grade" value="<?=$nil['grade']?>" maxlength="2" placeholder="GRADE" required readonly>
								</div>
							</div>
						</div>
						<div class="col-md-2">
							<div class="box-body">
								<div class="form-group">
									<label>TANGGAL INPUT</label>
									<input type="text" class="form-control" name="tgl_input" value="<?=date('Y-m-d')?>" placeholder="TANGGAL INPUT" required readonly>
								</div>
							</div>
						</div>
					</div>
					<div class="box-footer">
						<button type="submit" name="submit" class="btn btn-success btn-flat">Update</button>
						<a href="<?=base_URL()?>admin/nilai" class="btn btn-warning btn-flat pull-right">Batal</a>
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
<!-- PERHITUNGAN GRADE -->
<script type="text/javascript">
	function sum() {
		var na = document.getElementById('nil').value;
		if (document.getElementById('nil').value == 0) {
			document.getElementById('gr').value = "F";
		} else if (document.getElementById('nil').value <= 49) {
			document.getElementById('gr').value = "E";
		} else if (document.getElementById('nil').value >= 50 && document.getElementById('nil').value <= 59) {
			document.getElementById('gr').value = "D";
		} else if (document.getElementById('nil').value >= 60 && document.getElementById('nil').value <= 65) {
			document.getElementById('gr').value = "C";
		} else if (document.getElementById('nil').value >= 66 && document.getElementById('nil').value <= 74) {
			document.getElementById('gr').value = "C+";
		} else if (document.getElementById('nil').value >= 75 && document.getElementById('nil').value <= 79)

		{
			document.getElementById('gr').value = "B";
		} else if (document.getElementById('nil').value >= 80 && document.getElementById('nil').value <= 89) {
			document.getElementById('gr').value = "B+";
		} else if (document.getElementById('nil').value >= 90 && document.getElementById('nil').value <= 100) {
			document.getElementById('gr').value = "A";
		} else {
			document.getElementById('gr').value = null;
		}
	}
</script>