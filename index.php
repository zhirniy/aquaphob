<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aquaphob</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="style/style.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
	<script src="js/js.js"></script>
</head>
<body>
	<div class="container">
   <h1>PROMO!</h1>
  <div class="row">
    <div class="col-md border" style="background-image: url(1.png);">
    	<h3>5 BOTTLES</h3>
    	<p><span>1 945 </span><span>Pln</span></p>
    	<span class="sell"><span>- </span><span>40</span><span>%</span></span>
    	<span class="price"><span>1167</span><span> PLN</span>
      		<p>1 bootle - </p>
      		<p>233.4 pln</p>
  		 </span>
        <button type="button" class="btn btn-danger order">Buy Now</button>
    </div>
    <div class="col-md border" style="background-image: url(2.png);">
      <h3>3 BOTTLES</h3>
      <p><span>1 945 </span><span>Pln</span></p>
      <span class="sell"><span>- </span><span>40</span><span>%</span></span>
      <span class="price"><span>1167</span><span> PLN</span>
      		<p>1 bootle - </p>
      		<p>233.4 pln</p>
  	 </span>
      <button type="button" class="btn btn-danger order">Buy Now</button>
    </div>
    <div class="col-md border" style="background-image: url(3.png);">
      <h3>1 BOTTLE</h3>
      <p><span>1 945 </span><span>Pln</span></p>
      <span class="sell"><span>- </span><span>40</span><span>%</span></span>
      <span class="price"><span>1167</span><span> PLN</span>
      		<p>1 bootle - </p>
      		<p>233.4 pln</p>
  	 </span>
      <button type="button" class="btn btn-danger order">Buy Now</button>
    </div>
  </div>
</div>
<br>
<div id="log"></div>
<div id="background">
	<div id="popup">
		<form id="myform" action="thanks.php" method="POST">
			<input id="goods" type="hidden" name="goods">
			<input id="price" type="hidden" name="price">
			<label>Имя:
				<input type="text" name="name" placeholder="Ваше имя">
			</label>
			<label>Телефон:
				<input type="text" name="phone" required pattern="\d{9}" placeholder="Ваш телефон">
			</label>
			<label>Индекс:
				<input type="number" name="index" placeholder="Ваш индекс">
			</label>
			<label>Адрес:
				<textarea name="address" placeholder="Ваш адрес"></textarea>
			</label>
			<label>Email:
				<input type="text" name="email" required placeholder="Ваш email">
			</label>
			<label>Колличество:
				<input id="number" style="width: 150px;" type="number" min="1" value="1" name="quantity">
			</label>
			<input type="submit" id="submit" value="Отправить">
			<button type="button" id="close">&#10006</button>
		</form>
	</div>
</div>

</body>
</html>