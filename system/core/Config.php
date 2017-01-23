<?php

namespace SYS\core;
/*
* DESC: get the global config
*/

class Config
{
	private static $_config = array();
	
	private static function LoadConfigFile ($file = 'config')
	{
		//Load::file('config/config'.EXT);
		$path = APPPATH.'config/'.$file.EXT;

		if (file_exists($path))
		{
			@include_once $path;

			if (isset($config) && is_array($config))
			{
				self::$_config = $config;
			}
			else
			{
				exit('the config data not found at the config file!');
			}
		}
		else
		{
			exit('the file <b>'.$file.'</b> cannot found at the config file!');
		}

	}

	// check & load config file if the config array is empty
	private static function check_config ()
	{
		// load config file here
		if (count(self::$_config) == 0)
		{
			self::LoadConfigFile();
		}
	}

	// add a value to the config array
	public static function add ($key, $value = null)
	{
		// load config file here
		self::check_config();

		if (!isset(self::$_config[$key]) && $key != null)
			self::$_config[$key] = $value;
	}

	// get the config array or get by key
	public static function get ($key = null)
	{
		// load config file here
		self::check_config();

		if ($key != null)
		{
			if (isset(self::$_config[$key]))
			{
				return self::$_config[$key];
			}
			else
			{
				return null;
			}
		}
		else
		{
			return self::$_config;
		}
	}	
}


?>