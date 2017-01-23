<?php

namespace SYS\Core;
use SYS\Database\DB;

class Controller
{
	public $db;

	public function __construct ()
	{
		$DB = new DB();
		$this->db = $DB->db;

	}
}

?>