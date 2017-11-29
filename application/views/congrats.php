<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>The Alfa Studio</title>

	<!-- SCRIPT -->
	<script src="<?php echo base_url(); ?>plugins/jQuery/jQuery.min.js"></script>
	<script src="<?php echo base_url(); ?>plugins/jQueryUI/jquery-ui.min.js"></script>
	<script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
	$.widget.bridge('uibutton', $.ui.button);
	</script>

	<!-- STYLESHEET -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
	<style>
	body {
		margin-top:60px;
	}
	</style>
    </head>

    <body>
        <!-- Top content -->
        <div class="top-content container">
			<table class="table table-bordered">
				<tr>
					<td colspan="4"><center><img height="90" src="<?php echo base_url(); ?>assets/img/logo.png"></img></center></td>
				</tr>
				<tr>
					<td colspan="4"><strong><?php echo $nm_pendaftar."<br/> (".func_tanggal($dt_pendaftar).")"; ?></strong></td>
				</tr>
				<tr>
					<td><strong>No</strong></td>
					<td><strong>Paket</strong></td>
					<td><strong>Waktu Booking</strong></td>
					<td><strong>Harga</strong></td>
				</tr>
				
				<tr>
					<td>1</td>
					<td><?php echo get_paket($id_paket); ?></td>
					<td><?php echo get_waktu($id_waktu); ?></td>
					<td><?php echo buatrp(get_harga($id_paket)); ?></td>
				</tr>
				
				<tr>
					<td colspan="3">Total</td>
					<td><?php echo buatrp(get_harga($id_paket)); ?></td>
				</tr>
				<tr>
					<td colspan="4"><center>"Terimakasih telah menggunakan layanan kami"</center></td>
				</tr>
			</table>
			<center><button class="btn btn-lg btn-success" onclick="printFunc()">Cetak</button></center>
		</div>
		<script>
		function printFunc() {
			window.print();
		}
		</script>
    </body>
</html>