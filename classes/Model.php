<?php

require_once "Pagination.php";
require_once "Helper.php";

class Model extends Pagination
{

	static function all()
	{
		self::setConnection();

		$sql = "SELECT * FROM " . strtolower(get_called_class());
		$resultSet = self::$conn->query($sql);
		return convertToArray($resultSet);
	}

	static function store($associativeArray)
	{
		self::setConnection();
		$fields = implode(',', array_keys($associativeArray));
		$values = implode(',', preparedQueryValues($associativeArray));

		$sql = "INSERT INTO " . strtolower(get_called_class()) . "($fields) VALUES($values)";
		self::$conn->query($sql);
	}

	static function find($id)
	{
		self::setConnection();

		$sql = "SELECT * FROM " . strtolower(get_called_class()) . " WHERE id = $id ";
		$resultSet = self::$conn->query($sql);
		return $resultSet->fetch_object();
	}

	static function update($id, $associativeArray)
	{
		self::setConnection();
		$keyValuePair = implode(', ',generateKeyValuePair($associativeArray));

		$sql = "UPDATE " . strtolower(get_called_class()) . " SET $keyValuePair WHERE id = $id";
		self::$conn->query($sql);
	}

	static function delete($id)
	{
		self::setConnection();
		$sql = "DELETE FROM " . strtolower(get_called_class()) . " WHERE id = $id";
		self::$conn->query($sql);
	}
}