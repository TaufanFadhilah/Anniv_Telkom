<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">

    <title>Anniv</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
</head>

	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-offset-4 col-md-4">
					<h1>Login</h1>
					<form action="<?php echo base_url() ?>index.php/home/do_login" method="post">
					<div class="form-group">
					<label for="exampleInputEmail1">
						Username
					</label>
					<input type="text" class="form-control" name="username" />
				</div>
				<div class="form-group">	 
					<label for="exampleInputPassword1">
						Password
					</label>
					<input type="password" class="form-control" name="password" />
				</div>
				<input type="submit" name="submit" class="btn btn-primary" value="Login">
				</div>
				</form>
				<div class="col-md-4">
					
				</div>
			</div>
		</div>

	</body>
</html>