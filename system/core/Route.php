<?php

namespace SYS\core;

use SYS\Core\Load;


class Route
{
	private $_path;
	
	private static $routes = array(
			'default_controller' => 'home'
		);
	
	private static $symbol = array(
			'{num}'		=> '([0-9]+)',
			'{any}'		=> '(.*)',
			'{string}'	=> '([a-zA-Z])'
		);

	private static $go = array(
			'controller'	=>'',
			'method'		=>'index',
			'parmes'		=> array()
		);

	public function __construct ()
	{
		$this->get_path();	
		$this->get_config_route();
		$this->replace();
		
		echo '<pre>';
		print_r(self::$routes);
		print_r($this->_path);
		print_r(self::$go);
		echo '</pre>';
	}

	public static function start ()
	{
		//$countGo = count(self::$go['parmes']);
		$controller = "App\controllers\\".self::$go['controller'].'Controller';
		$C = new $controller();
		// activate the controller & method & parms
		call_user_func_array(array($C, self::$go['method']), (array) self::$go['parmes']);
	}

	private function get_path ()
	{
		if (isset($_SERVER['PATH_INFO']))
		{
			$this->parse_path(trim(strtolower($_SERVER['PATH_INFO']),'/'));
		}
		else
		{
			// show error about the default controller or the path not found
			die('ERROR: cannot get the path!');
		}
	}

	private function parse_path ($path)
	{
		return $this->_path = explode('/',$path);
	}

	private function replace ()
	{
		$countPath = count($this->_path);
		
		if ($countPath == 0)
		{
			self::$go['controller'] = self::$routes['default_controller'];
		}
		else if ($countPath == 1)
		{
			self::$go['controller'] = $this->_path[0];
		}
		else if ($countPath == 2)
		{
			self::$go['controller'] = $this->_path[0];
			self::$go['method'] = $this->_path[1];
		}
		else
		{
			self::$go['controller'] = $this->_path[0];
			self::$go['method'] = $this->_path[1];

			for ($i = 2; $i < $countPath; $i++)
			{
				self::$go['parmes'][] = $this->_path[$i];
			}
		}

	}

	private function get_config_route ()
	{
		$file = APPPATH.'/config/route'.EXT;
		
		if (file_exists($file))
		{
			include_once $file;
			if (isset($route) && is_array($route))
			{
				return self::$routes = $route;
			}
		}
		else
		{
			die('the route config file not found!');
		}	
	}



	
}

?>