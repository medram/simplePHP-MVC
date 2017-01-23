<?php
namespace SYS\Database\Devices;

class DB_PDO extends DB_Core
{
	public function __construct ()
	{
		parent::__construct();
		echo 'DB_PDO construct<br>';
	}

	public function get ()
	{
		echo 'PDO get<br>';
	}
	
	public function insert ()
	{

	}

	public function delete ()
	{

	}
	
	public function update ()
	{

	}

	public function count ()
	{

	}
}


?>