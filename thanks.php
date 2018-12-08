<?php
require_once 'db.php';
$record = new Model();
$record->insert($_POST);

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Thanks you!</title>
	<style type="text/css">
		h1{
			margin-top: 50px;
			text-align: center;
		}
		
	</style>
</head>
<body>
	<h1>Спасибо за заказ!!!</h1>
</body>
</html>