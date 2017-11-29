<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>The Alfa Studio</title>

	<!-- SCRIPT -->
	<script src="<?php echo base_url(); ?>plugins/jQuery/jQuery.min.js"></script>
	<script src="<?php echo base_url(); ?>plugins/jQueryUI/jquery-ui.min.js"></script>
	<script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>plugins/moment/moment-with-locales.min.js"></script>
    <script src="<?php echo base_url(); ?>plugins/daterangepicker/daterangepicker.js"></script>
    <script src="<?php echo base_url(); ?>plugins/datepicker/bootstrap-datepicker.js"></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
	$.widget.bridge('uibutton', $.ui.button);
	</script>

	<!-- STYLESHEET -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>plugins/datepicker/datepicker3.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>plugins/daterangepicker/daterangepicker-bs3.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/form-elements.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	<div class="container">
                	
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text">
                        <img src="<?php echo base_url(); ?>assets/img/logo.png" height="150"></img>
                        <div class="description">
                        	
                        </div>
                    </div>
                </div>
                
                <div class="row register-form">
                    <div class="col-sm-4 col-sm-offset-1">
						<?php
						echo form_open('welcome/saved', array(
							'class' => 'r-form',
							'role' => 'form',
						));
						?>
						<form role="form" action="" method="post" class="r-form">
	                    	<div class="form-group">
								<label class="sr-only" for="form-name">Nama Lengkap</label>
								<input type="text" name="form-name" placeholder="Nama Lengkap Anda..." class="form-name form-control" id="form-name" maxlength="50" required>
							</div>
							<div class="form-group">
								<label class="sr-only" for="form-date">Tanggal</label>
								<input type="text" name="form-date" placeholder="Pilih Tanggal..." class="form-time form-control" id="form-date" required>
							</div>
							<div class="form-group">
								<label class="sr-only" for="form-time">Waktu</label>
								<select name="form-time" id="form-time" class="form-time form-control" required>
									
								</select>
							</div>
							<div class="form-group">
								<label class="sr-only" for="form-cat">Kategori</label>
								<select name="form-cat" id="form-cat" class="form-cat form-control" required>
									<option value="">Pilih Kategori ...</option>
									<option value="1">Paket Standar (5 Alat Musik)</option>
									<option value="2">Paket Premium (7 Alat Musik)</option>
								</select>
							</div>
							<div class="form-group">
								<div id="price" class="alert alert-info" ></div>
								<input type="hidden" name="form-verify" value="<?php echo rand(000,999); ?>">  
							</div>
							<button type="submit" class="btn">Booking ...</button>
						<?php echo form_close(); ?>
                    </div>
                    <div class="col-sm-6 forms-right-icons">
						<div class="row">
							<div class="col-sm-2 icon"><i class="fa fa-pencil"></i></div>
							<div class="col-sm-10">
								<h3>The Alfa Studio</h3>
								<p>The Alfa Studio menyediakan rental Studio Musik dengan fasilitas premium. Buka jam 10:00 s/d jam 17:00</p>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-2 icon"><i class="fa fa-user"></i></div>
							<div class="col-sm-10">
								<h3>Paket Standar</h3>
								<p>Kami menyediakan Paket Standar untuk Anda yang ingin bermain musik dengan 5 instrumen yang digunakan</p>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-2 icon"><i class="fa fa-magic"></i></div>
							<div class="col-sm-10">
								<h3>Paket Premium</h3>
								<p>Kami menyediakan Paket Premium untuk Anda yang ingin bermain musik dengan 7 instrumen yang digunakan</p>
							</div>
						</div>
                    </div>
                </div>
                    
        	</div>
        </div>

        <!-- Footer -->


        <!-- Javascript -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.backstretch.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
        <script>
		$(document).ready(function(){
			$("#form-date").change(function () {
				$.post('jquery/select_time',
				{a:$("#form-date").val()},
				function(html){
					$("#form-time").html(html);
				});
			});
			$("#form-cat").change(function () {
				$.post('jquery/harga',
				{c:$('select[name=form-cat]').val()},
				function(html){
					$("#price").html(html);
				});
			});
			$('#form-date').datepicker({
				format: 'yyyy-mm-dd',
				startDate: '1d'
			});
		});
		</script>
        <!--[if lt IE 10]>
            <script src="<?php echo base_url(); ?>assets/js/placeholder.js"></script>
        <![endif]-->

    </body>
</html>