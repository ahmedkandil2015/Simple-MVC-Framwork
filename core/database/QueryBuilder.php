<?php 

class QueryBuilder{

	protected $pdo;

	public function __construct($pdo){


		$this->pdo = $pdo;


	}

	public function selectAll($Table){

		$statment = $this->pdo->prepare("select * from {$Table}");

		$statment->execute();

		 return $statment->fetchAll(PDO::FETCH_CLASS);

	}

	public function insert ($table , $pramaters){

		$sql = sprintf(

						'insert into %s (%s) values (%s)',

						$table,

						implode(', ', array_keys($pramaters)),
						':' . implode(', :',array_keys($pramaters))
						

					);
		try{

			$statment = $this->pdo->prepare($sql);
			$statment->execute($pramaters);

		}catch(Exception  $e){

			die("Whoops , Something Went wrong.");

		}
	}


}












