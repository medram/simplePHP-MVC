<?php

namespace MR;
use SYS\Core\Controller;
use SYS\Core\Route;
use SYS\Input\Input;

// auto load files from here
include_once SYSPATH.'/autoload'.EXT;

class MR
{
	public function __construct ()
	{
		echo 'App Staring...<br>';

		$Route = new Route();
		Route::start();
	}

	/*
	public static function start ()
	{
		echo $this->_path;
		// explode url page to get the controller, method, arguements
		$path = explode('/',trim(strip_tags($this->_path),'/'));

		echo $controller = $path[0];
		echo '<br>';
		echo $controller_file = $path[0].'Controller';
		echo '<br>';
		
		// include controller file from application
		$controller_file_path = APPPATH.'controllers/'.$controller_file.EXT;
		
		if (file_exists($controller_file_path))
		{
			include_once $controller_file_path;
		}
		else
		{
			exit('the controller file \''.$controller_file.'\' not found !');
		}

		// activate the class controller
		if (!class_exists($controller))
		{
			exit('can\'t call to the \''.$controller_file.'\' controller');
		}
		else
		{
			$con = new $controller();
		}

		// activate the method (function)
		if (count($path) == 1)
		{
			$con->index();
		}
		else if (count($path) == 2)
		{
			$con->{$path[1]}();
		}
		else
		{
			$allParam = '';
			
			foreach ($path as $k => $param)
			{
				if ($k == 0 or $k == 1)
				{
					continue;
				}
				else
				{
					$allParam .= "'".$param."',";
				}
			}

			$allParam = trim($allParam,',');

			//eval('return $con->login(\'ok\',\'hello\');');
			@eval('return $con->{$path[1]}('.$allParam.');');
		}
	}
	*/
}


?>