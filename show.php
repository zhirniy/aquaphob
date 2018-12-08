<?php 
require_once 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Show</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="style/show.css" rel="stylesheet">
</head>
<body>
<?php 
	$record = new Model();
	$record->show();
?>
</body>
</html>