<footer class="footer">
	<div class="container-fluid">
		<nav class="pull-left">
			<ul>
				<li>
					<a href="#">
						Home
					</a>
				</li>
				<li>
					<a href="#">
						Company
					</a>
				</li>
				<li>
					<a href="#">
						Portfolio
					</a>
				</li>
				<li>
					<a href="#">
						Blog
					</a>
				</li>
			</ul>
		</nav>
		<p class="copyright pull-right">
			&copy; <script>
				document.write(new Date().getFullYear())

			</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better
			web
		</p>
	</div>
</footer>

</div>
</div>


</body>
<!--   Core JS Files   -->
<script src="<?php echo base_url() ?>assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

<!--  Charts Plugin -->
<script src="<?php echo base_url() ?>assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="<?php echo base_url() ?>assets/js/bootstrap-notify.js"></script>


<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="<?php echo base_url() ?>assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url() ?>assets/js/demo.js"></script>

<script type="text/javascript">
	$(document).ready(function () {
		demo.initChartist();
		$('#transactionTable').DataTable();
		$('#car').change(function () {
			var id = this.value;
			$.ajax({
				url: "<?php echo site_url('car/getCar/') ?>" + id,
				type: "GET",
				dataType: "JSON",
				success: function (data) {
					$("#hargaMobil").val(data[0]['harga']);
				},
				error: function (data) {
					alert('error')
				},
			});

		});

		$('#tgl_kembali').change(function () {
			var tgl_pinjam = $('#tgl_pinjam').val();
			var tgl_kembali = $('#tgl_kembali').val();
			var hargaMobil = $('#hargaMobil').val();
			var lama = (((new Date(tgl_kembali.replace(/-/g, '/')) - new Date(tgl_pinjam.replace(/-/g,
				'/'))) / 1000) / 86400);
			$("#lama").val(lama)
			var total = lama * hargaMobil;
			$("#total").val(total)
			console.log(total)
		});
	});

	$('.deleteConfirm').click(() => {
		var sure = confirm('Are you sure ?');
		if (sure) {
			return true;
		}
		return false;
	})

	$(".select-cars").select2({
		placeholder: "Pilih mobil",
		allowClear: true
	});

	$(".select-customers").select2({
		placeholder: "Pilih pelanggan",
		allowClear: true
	});

	

</script>

</html>
