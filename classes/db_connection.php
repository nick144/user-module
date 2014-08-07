<?php


class Db_connection(){

	private $_conn;

	private $_dbname;
	private $_dbhost;
	private $_dbuser;
	private $_dbpass;

	function __construct(){
		include '../config/config.php';

		$this->_dbname = DBNAME;
		$this->_dbhost = DBHOST;
		$this->_dbuser = DBUSER;
		$this->_dbpass = DBPASS;

	}

	function __destruct(){

		$this->dbclose($this->_conn);

	}


	public function connect(){

		$this->conn = mysqli_connect($this->_dbhost,$this->_dbuser, $this->_dbpass, $this->_dbname);

		if (mysqli_connect_errno()){

			echo "Failed to connect to MySQL: " . mysqli_connect_error();
			
		}

		return $this->conn;

	}


	public function dbclose($conn){

		mysqli_close($conn);
		
	}

}