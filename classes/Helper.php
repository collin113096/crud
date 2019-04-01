<?php

function convertToArray($resultSet)
{
	$temp = [];
	while($row = $resultSet->fetch_object())
	{
		$temp[] = $row;
	}
	return $temp;
}

function preparedQueryValues($associativeArray)
{
	$temp = [];
		foreach($associativeArray as $value)
		{
			if(is_numeric($value))
			{
				$temp[] = $value;
			}
			else
			{
				$temp[] = "'$value'";
			}
		}
		return $temp;
}

function generateKeyValuePair($associativeArray)
{
	$temp = [];
	foreach($associativeArray as $key => $value)
	{
		if(is_numeric($value))
			{
				$temp[] = "$key = $value";
			}
			else
			{
				$temp[] = "$key = '$value'";
			}
	}
	return $temp;
}

?>