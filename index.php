<?php

$application_folder = 'app';
$system_folder = 'system';
//$view_folder = 'app/views';


define('DS',DIRECTORY_SEPARATOR);
define('EXT','.php');

define('APPPATH',basename($application_folder).DS);
define('SYSPATH',$system_folder.DS);


// load the applicaltion core here
include_once SYSPATH.'/core/bootstrap.php';

$MR = new MR\MR();

?>