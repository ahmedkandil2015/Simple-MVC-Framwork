<?php 
return [

	'database'=>[

		'name'=>'todo',

		'username'=>'root',

		'password'=>'admin',

		'connection'=>'mysql:host=localhost',

		'options'=>[
			PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
		]
	]
];