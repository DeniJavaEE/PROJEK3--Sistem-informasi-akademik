<footer class="main-footer">
	<div class="pull-right hidden-xs">
		<b>Versi</b> 1.2
	</div>
	<strong>Hak Cipta &copy; 2019 &nbsp;<a href="<?=base_URL()?>">SIINI</a></strong>
</footer>
</div>
<!-- ./wrapper -->
<!-- jQuery 3 -->
<script src="<?=base_URL()?>assets/plugins/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_URL()?>assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?=base_URL()?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?=base_URL()?>assets/plugins/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_URL()?>assets/js/adminlte.min.js"></script>
<!-- DataTables -->
<script src="<?=base_URL()?>assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?=base_URL()?>assets/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- page script -->
<script>
	$(function () {
		$('#example1').DataTable()
		$('#example2').DataTable({
			'paging' : true,
			'lengthChange': false,
			'searching' : false,
			'ordering' : true,
			'info' : true,
			'autoWidth' : false
		})
	})
</script>
<!-- bootstrap datepicker -->
<script src="<?=base_URL()?>assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="<?=base_URL()?>assets/plugins/iCheck/icheck.min.js"></script>
<!-- Page script -->
<script>
	$(function () {
//Date picker
$('#datepicker').datepicker({
	autoclose: true,
	format: "yyyy-mm-dd",
	orientation: "auto",
	todayBtn: true,
	todayHighlight: true
})
//iCheck for checkbox and radio inputs
$('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
	checkboxClass: 'icheckbox_minimal-blue',
	radioClass : 'iradio_minimal-blue'
})

})
</script>
<!-- Notifikasi -->
<script>
	$("#alert").fadeTo(3000, 500).slideUp(500, function() {
		$("#alert").alert('close');
	});
</script>
</body>
</html>