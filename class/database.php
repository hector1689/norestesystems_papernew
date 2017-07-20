<?php 

class Database extends PDO{


public function __construct(){

	try{
		parent::__construct('mysql:host=localhost;dbname=new_paper','periodico','');
	parent::setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
	}catch (Exception $ex){
		echo $ex. '<br>';
		die('error al conectar a la base de datos!');
	}
}

}