<?php

namespace App\controllers;
use SYS\Core\Controller;

class HomeController extends Controller
{
	public function __construct ()
	{
		echo 'Home contructor!';
	}

	public function index ($param='')
	{
		echo 'index page!';
	}

	public function go ($param='',$param2='')
	{
		echo 'go page!';
		echo '<br>';
		echo $param;
		echo '<br>';
		echo $param2;
	}
}

?>