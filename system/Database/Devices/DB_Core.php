<?php

namespace SYS\Database\Devices;

abstract class DB_Core
{
	protected $_config = array();
	
	public function __construct ()
	{
		echo 'DB_Core construct<br>';
		// get the Config data
	}

	public abstract function get ();
	public abstract function insert ();
	public abstract function delete ();
	public abstract function update ();
	public abstract function count ();

}

?>