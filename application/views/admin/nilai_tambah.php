<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Transaksi Nilai
			<small>Nilai Mahasiswa</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?=base_URL()?>admin/dashboard" ><i class="fa fa-dashboard"></i>&nbsp; Dashboard</a></li>
			<li><a href="<?=base_URL()?>admin/nilai" ><i class="fa fa-calculator"></i>&nbsp; Daftar Nilai Mahasiswa</a></li>
			<li class="active"><i class="fa fa-wpforms"></i>&nbsp; Transaksi Nilai</li>
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
					<?=form_open('admin/nilai_tambah', 'role="form"')?>
					<div class="row">
						<div class="col-md-3">
							<div class="box-body">
								<div class="form-group">
									<label>NIM Mahasiswa</label><br>
									<div class="row">
										<div class="col-xs-10">
											<input type="text" class="form-control" id="nim" name="nim" maxlength="20" placeholder="NIM Mahasiswa" required readonly>
										</div>
										<div class="col-xs-2">
											<button type="button" class="btn btn-default" data-toggle="modal" data-target="#nimModal">. . .</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="box-body">
								<div class="form-group">
									<label>Nama Mahasiswa</label>
									<input type="text" class="form-control" id="nama_mhs" maxlength="30" placeholder="Nama Mahasiswa" required readonly>
								</div>
							</div>
						</div>
						<div class="col-md-2">
							<div class="box-body">

								<div class="form-group">
									<label>Tahun Akademik</label>
									<input type="number" class="form-control" id="thn_akademik" name="thn_akademik" maxlength="4" placeholder="Tahun Akademik" required readonly>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="box-body">
								<div class="form-group">
									<label>Jurusan</label>
									<input type="text" class="form-control" id="jurusan_mhs" maxlength="30" placeholder="Jurusan" required readonly>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="box-body">
								<div class="form-group">
									<label>KODE Mata Kuliah</label><br>
									<div class="row">
										<div class="col-xs-10">
											<input type="text" class="form-control" id="kode_mk" name="kode_mk" maxlength="5" placeholder="KODE Mata Kuliah" required readonly>
										</div>
										<div class="col-xs-2">
											<button type="button" class="btn btn-default" data-toggle="modal" data-target="#mkModal">. . .</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-7">
							<div class="box-body">
								<div class="form-group">
									<label>Nama Mata Kuliah</label>
									<input type="text" class="form-control" id="nama_mk" maxlength="30" placeholder="Nama Mata Kuliah" required readonly>
								</div>
							</div>
						</div>
						<div class="col-md-2">
							<div class="box-body">
								<div class="form-group">
									<label>Semester</label>
									<input type="number" class="form-control" id="semester" name="semester" maxlength="2" placeholder="Semester" required readonly>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="box-body">
								<div class="form-group">
									<label>NID Dosen Pengajar</label>
									<input type="text" class="form-control" id="nid" name="nid" maxlength="30" placeholder="NID Dosen Pengajar" required readonly>
								</div>
							</div>
						</div>

						<div class="col-md-9">
							<div class="box-body">
								<div class="form-group">
									<label>Nama Dosen Pengajar</label>
									<input type="text" class="form-control" id="nama_dosen" maxlength="30" placeholder="Nama Dosen Pengajar" required readonly>
								</div>
							</div>
						</div>
						<div class="col-md-5">
							<div class="box-body">
								<div class="form-group">
									<label>NILAI</label>
									<input type="number" class="form-control" id="nil" name="nilai" maxlength="2" onkeyup="sum();" placeholder="NILAI" required autofocus>
								</div>
							</div>
						</div>
						<div class="col-md-5">
							<div class="box-body">
								<div class="form-group">
									<label>GRADE</label>
									<input type="text" class="form-control" id="gr" name="grade" maxlength="2" placeholder="GRADE" required readonly>
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
						<button type="submit" name="submit" class="btn btn-success btn-flat">Simpan</button>
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
<!-- Modal NIM -->
<div class="modal fade" id="nimModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">

				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 align="center" class="modal-title" id="myModalLabel">PILIH MAHASISWA</h4>
			</div>
			<div class="modal-body">
				<table id="lookup" class="table table-hover table-striped table-bordered">
					<thead>
						<tr>
							<th style="text-align: center; width:">NIM</th>
							<th>NAMA MAHASISWA</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($mhs as $m) { ?>
							<tr class="pilih" data-nim="<?=$m->nim?>" data-nama_mhs="<?=$m->nama_mhs?>" data-thn_akademik="<?=$m->thn_akademik?>" data-jurusan_mhs="<?=$m->jurusan_mhs?>">
								<td align="center"><?=$m->nim?></td>
								<td><?=$m->nama_mhs?></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!-- Modal MATA KULIAH -->
<div class="modal fade" id="mkModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 align="center" class="modal-title" id="myModalLabel">PILIH MATA KULIAH</h4>
			</div>
			<div class="modal-body">
				<table id="lookup2" class="table table-hover table-striped table-bordered">
					<thead>
						<tr>
							<th style="text-align: center; width:">KODE</th>
							<th>NAMA MATA KULIAH</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($mtk as $m) { ?>
							<tr class="pilihs" data-kode_mk="<?=$m->kode_mk?>" data-nama_mk="<?=$m->nama_mk?>" data-semester="<?=$m->semester?>" data-nid="<?=$m->nid?>" data-nama_dosen="<?=getDosen($m->nid)?>">
								<td align="center"><?=$m->kode_mk?></td>
								<td><?=$m->nama_mk?></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<script src="<?=base_URL()?>assets/modal/js/jquery-1.11.2.min.js"></script>
<script src="<?=base_URL()?>assets/modal/datatables/jquery.dataTables.js"></script>

<!-- JS NIM -->
<script type="text/javascript">
	$(document).on('click', '.pilih', function(e) {
		document.getElementById("nim").value = $(this).attr("data-nim");
		document.getElementById("nama_mhs").value = $(this).attr("data-nama_mhs");
		document.getElementById("thn_akademik").value = $(this).attr("data-thn_akademik");
		document.getElementById("jurusan_mhs").value = $(this).attr("data-jurusan_mhs");
		$('#nimModal').modal('hide');
	});
	$(function() {
		$("#lookup").dataTable();
	})
</script>
<style>
	.pilih:hover{
		cursor: pointer;
	}
</style>
<!-- JS MATA KULIAH -->
<script type="text/javascript">
	$(document).on('click', '.pilihs', function(e) {
		document.getElementById("kode_mk").value = $(this).attr("data-kode_mk");
		document.getElementById("nama_mk").value = $(this).attr("data-nama_mk");
		document.getElementById("semester").value = $(this).attr("data-semester");
		document.getElementById("nid").value = $(this).attr("data-nid");
		document.getElementById("nama_dosen").value = $(this).attr("data-nama_dosen");
		$('#mkModal').modal('hide');
	});
	$(function() {
		$("#lookup2").dataTable();
	})
</script>
<style>
	.pilihs:hover{
		cursor: pointer;
	}
</style>
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
		} else if (document.getElementById('nil').value >= 75 && document.getElementById('nil').value <= 79) {
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