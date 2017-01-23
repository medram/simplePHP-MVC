<?php

namespace SYS\core;

/*
* Load::controller($filename);
* Load::file
*/

class Load
{
	// include files if were exists
	public static function file($path)
	{
		if (file_exists(SYSPATH.$path))
		{
			return include_once SYSPATH.$path;
		}
		else if (file_exists(APPPATH.$path))
		{
			return include_once APPPATH.$path;
		}
		else
		{
			// log error
			exit('ERROR : The file not found '.$path);
		}
	}


}

?>