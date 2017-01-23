<?php

namespace SYS\Database;
use SYS\Database\Devices\DB_Core;
use SYS\Database\Devices\DB_PDO;
use SYS\Database\Devices\DB_Mysqli;

class DB
{
	public $db;

	public function __construct ()
	{
		$this->db = $this->set_Device(new DB_PDO());
	}

	// polymorfisme
	private function set_Device (DB_Core $device)
	{
		return $device;
	}


}

?>