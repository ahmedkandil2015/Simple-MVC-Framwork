<?php 

// namespace App\Core\Database;
class  Connection{


	public static function make($config){
		try{
			return new PDO(
				$config['connection'].';dbname='.$config['name'],
				$config['username'],
				$config['password'],
				$config['options']
			);
			echo "Connection has been success";

		}catch(PDOException $e){

			die('Error IS : '.$e->getmessage());

		}

	}

}