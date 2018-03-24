<?php 



class PageController
{
	
	public function home (){
		$users = App::get('database')->selectAll('users');
		require('views/index.view.php');
	}

	public function about(){

		require('views/about.view.php');


	}
	
	public function contact(){

		require('views/contact.view.php');

	}
}