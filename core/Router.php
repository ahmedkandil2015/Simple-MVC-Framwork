<?php
class Router
{
	protected $routes=[
		'GET'=>[],
		'POST'=>[]
	];

	public static function load ($file){
		
		$router = new static ;		
		require $file;	

		return $router;
	}

	public function get($uri , $controller){

		$this->routes['GET'][$uri]=$controller;
	} 
	public function post($uri,$controller){

		$this->routes['POST'][$uri]=$controller;

	}

	public function direct($URi,$requestType)
	{

		if (array_key_exists($URi, $this->routes[$requestType])) {
		
			return $this->callAction(
				...explode('@',$this->routes[$requestType][$URi])
			);

		}
		throw new Exception('No Route Defined For This URL');
	}

	protected function callAction ($controller , $action){

		$controller = new $controller;

		if(! method_exists($controller, $action)){

			throw new Exception(
				"{$controller} does not Response to the {$action} action"
			);
			
		}

		return $controller->$action();
			
	}
	

}