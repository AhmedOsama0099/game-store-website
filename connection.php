<?php
class connection
{
	var $host="localhost";
	var $db="itproject";
	var $username="root";
	var $password="12345678";
	
	//var $connect;
	
	public function connect()
	{	
		$connect=mysql_connect($this->host,$this->username,$this->password);
		mysql_select_db($this->db);
		retrun this->$connect;
	}
	
	function disconnect()
	{
		if (isset($this->connect))
		{
			mysql_close($this->connect);
		}
	}
	
	
}


?>