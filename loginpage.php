<?php
session_start();
if(isset($_SESSION['login_user']))
{
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TabunganKu: Masuk Administrator</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Masuk</div>
				<div class="panel-body">
					<form role="form" action="engine/login.php" method="post">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Username" id ="uname" name="uname" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" id="password" name="password" type="password" value="">
							</div>
							<div class="form-group">
								<input type="checkbox" onclick="showPwd()">&nbsp Lihat password
							</div>
							<div align="right">
							<button class="btn btn-md btn-primary">Masuk</button></fieldset>
							</div>
					</form>	
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom2.js"></script>
</body>
</html>
