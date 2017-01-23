<?php

// autoloading file using the namespaces
spl_autoload_register (function($path){
	static $namespaces = array();
	
	if (count($namespaces) == 0)
	{
		include_once APPPATH.'config/namespaces'.EXT;
	}
		
	if (isset($namespaces) && $namespaces != null)
	{
		foreach ($namespaces as $k => $v)
		{
			$path = str_ireplace($k, $v, $path);
			$file = str_ireplace("\\",DS,$path).EXT;
			//$file = trim($path.'.php','\\');
			//echo '<pre>'.$file.'</pre><br>';
			
			if (file_exists($file))
			{
				include_once $file;
				break;
			}		
		}
	}
	else
	{
		die('namespaces array is not found from the config folder');
	}

})

?>