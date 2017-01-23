<?php

namespace MR;
use SYS\Core\Controller;
use SYS\Core\Route;
use SYS\Core\Config;

// load the necessary files
include_once SYSPATH.'/autoload'.EXT;
include_once SYSPATH.'/core/functions'.EXT;


class MR
{
	public function __construct ()
	{
		/**
		* ----------------------------------------------------
		* set a environment 
		* ----------------------------------------------------
		*/
		set_environment();

		/**
		* ----------------------------------------------------
		* set a custom error here 
		* ----------------------------------------------------
		*/
		set_error_handler('custom_err');

		// init the route
		$Route = new Route();

		$con = new controller();
		$con->db->get();

		// activate the controller
		$Route->start();
	}

}


?>