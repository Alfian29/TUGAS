<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Login | DiffDash</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?=base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/vendor/font-awesome/css/font-awesome.min.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?=base_url();?>assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="<?=base_url();?>assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="<?=base_url();?>https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?=base_url();?>assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?=base_url();?>assets/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box">
				<div class="content">
				<div class="header">
					<div class="logo text-center"><img src="<?=base_url()?>assets/img/logo.png" alt="DiffDash Logo"></div>
					<p class="lead">Login to your account</p>
				</div>
				<form id="form_login" method="POST" action="<?=base_url(); ?>index.php/user/Login">
					<div class="form-group">
						<input type="text" class="form-control" name="Username" placeholder="Username" required autofocus>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="Password" placeholder="Password" required>
					</div>
					<br>
					<input class="btn btn-primary btn-lg btn-block" type="submit" id="masuk" name="masuk" value="LOGIN">
				</form>
			</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>
