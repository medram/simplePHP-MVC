<?php

spl_autoload_register (function($path){

	$filesPath = array(
		'MR'	=> SYSPATH.'/core/bootstrap',
		'SYS'	=> 'system',
		);

	foreach ($filesPath as $k => $v)
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

})

?>