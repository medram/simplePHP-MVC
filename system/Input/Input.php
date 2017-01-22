<?php

namespace SYS\Input;
use SYS\Database\db;

class Input {

	public $name = 'Mohammed Ramouchy';
	public $db;

	//private $_get = $_GET;
	//private $_post = $_POST;
	public function __construct()
	{
		$this->db = new db();
	}

	public static function get($key='')
	{
		return $this->_get[$key];
	}

	public static function post($key='')
	{
		return $this->_post[$key];
	}
}

?>