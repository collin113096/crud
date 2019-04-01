<?php

class Connection
{
	static $conn;

	static function setConnection()
	{
		self::$conn = new mysqli("localhost","root","","crud");
	}
}