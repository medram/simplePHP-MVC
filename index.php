<?php
/**
* Powred by: Mohammed Ramouchy
* Email: mramouchy@gmail.com
* Date: from: 22/01/2017 to:
* Project name: simple MVC using namespaces (° 3 °) 
* Description: I want to create my MVC 
*/


$application_folder = 'app';
$system_folder = 'system';
//$view_folder = 'app/views';


/**
* Options: development, product
* Desc: Show the errors or not 
*/
define('ENVIRONMENT','development');

//define('DS',DIRECTORY_SEPARATOR);
define('DS','/');
define('EXT','.php');

define('APPPATH',$application_folder.DS);
define('SYSPATH',$system_folder.DS);


// load the applicaltion core here
include_once SYSPATH.'/core/bootstrap.php';

$MR = new MR\MR();

?>