<html>
	<head>
		<title>index</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<link href="css/index.css" type="text/css" rel="stylesheet"/>
		<link href="css/play.css" type="text/css" rel="stylesheet"/>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/index.js"></script>
	</head>
	<body>
		<div id ="content">
			<?php include 'header.php';?>
			<div id="main">
				<center id="loginreg">
						<label class="t">Login</label>
						<div class="block">
							<label class="field">User Name:</label>
							<input id="userid" class="labelbox" type="text" name="userid"/>
						</div>
						<div class="block">
							<label class="field">Password:</label>
							<input id="passwd" class="labelbox" type="text" name="passwd"/>
						</div>
						<p id="noti"></p>
						<div class="buttonarea">
							<a id="changereg" href="#" >Register</a>
							<input id="login" class="button" type="button" value="Login"/>
						</div>
				</center>
				<div id ="toppair">
					<table>
						<tr>
							<td>player</td>
							<td>score</td>
						</tr>
						<?php
						include 'getdata.php';
						foreach ( getToppairs() as $line ) {
							$temp = preg_split("/_/", $line); ?>
							<tr>
								<td><?= $temp[0] ?></td>
								<td><?= $temp[1] ?></td>
							</tr>
						<?php } ?>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>
