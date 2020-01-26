<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Nilai Mahasiswa
			<small>Daftar Nilai</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?=base_URL()?>dosen/dashboard" ><i class="fa fa-dashboard"></i>&nbsp; Dashboard</a></li>
			<li class="active"><i class="fa fa-calculator"></i>&nbsp; Nilai Mahasiswa</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
		<!-- Info boxes -->
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title">
					<select class="form-control btn btn-primary" name="semester" onChange="window.location.href=this.value" required>
						<option value="">Lihat Nilai Semester</option>
						<?php $data = array('1','2','3','4','5','6','7','8'); ?>
						<?php foreach($data as $row) { ?>
							<option value="<?=base_URL()?>mahasiswa/nilai/<?=$row?>">Semester <?=$row?></option>
						<?php } ?>
					</select>
				</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<hr>
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="10%"><center>NO</center></th>
							<th><center>SEMESTER</center></th>
							<th>MATA KULIAH</th>
							<th><center>SKS</center></th>
							<th>DOSEN PENGAJAR</th>
							<th><center>NILAI</center></th>
							<th><center>GRADE</center></th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						foreach($smt as $nil) :
							?>

							<tr>
								<td align="center"><?=$no?>.</td>
								<td align="center">Semester <?=$nil->semester?></td>
								<td><?=getMatkul($nil->kode_mk)?></td>
								<td align="center"><?=getSKSMatkul($nil->kode_mk)?></td>
								<td><?=getDosen($nil->nid)?></td>
								<td align="center"><?=$nil->nilai?></td>
								<td align="center"><?=$nil->grade?></td>
							</tr>
							<?php $no++; endforeach; ?>
						</tbody>
					</table>
					<hr>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->