<?php
require_once "Config.php";

/*
**
*/

class Model extends Config {

	protected $_connection;
	public $goods;
	public $price;
	public $name;
	public $phone;
	public $index;
	public $address;
	public $email;
	public $quantity;
	public $summa;



	function __construct() {
		$this->_connection = new mysqli(Config::$host, Config::$user, 
		Config::$password, Config::$database);
		mysqli_set_charset($this->_connection, 'utf8');
   }

	public function insert($data){
		$this->goods = '\''.$data['goods'].'\'';
		$this->price = str_replace(' ', '', $data['price']);
		$this->name = '\''.$data['name'].'\'';
		$this->phone = $data['phone'];
		$this->index = $data['index'];
		$this->address = '\''.$data['address'].'\'';
		$this->email = '\''.$data['email'].'\'';
		$this->quantity = $data['quantity'];
		$this->summa =  str_replace(' ', '', $data['price']) * $data['quantity'];		

		$sql = "INSERT INTO aquaphob(goods, 
		price, 
		name,
		phone,
		index_,
		address,
		email, 
		quantity,
		summa
	) VALUES($this->goods, 
		$this->price, 
		$this->name,
		$this->phone,
		$this->index,
		$this->address,
		$this->email, 
		$this->quantity,
		$this->summa
	)";
		$this->_connection->query($sql);
	}


	public function show(){
		$sql = "SELECT * FROM `aquaphob` ORDER BY my_order DESC LIMIT 100";
		$result = $this->_connection->query($sql);
		if($result->num_rows !== 0){
			$result_ = '';
			$count = 0;
			while( $result_ = $result->fetch_object() ){
				if($count == 0){
					include "templates/headers.php";
					$count++;
				}

				include "templates/products.php";
			}
		}else{
			echo '<div class="row center"><h2>Нет заказов</h2>';
		}
	}




}





 ?>