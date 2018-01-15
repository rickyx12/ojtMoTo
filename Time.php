<?php

class Time {

	///database credentials
	public $host;
	public $username;
	public $password;
	public $database;
	public function __construct() {
	  $this->host = $_SERVER['DB_HOST'];
	  $this->username = $_SERVER['DB_USER'];
	  $this->password = $_SERVER['DB_PASS'];
	  $this->database = $_SERVER['DB_DB'];
	}	

	private $getTimeSheet_time;

	public function getTimeSheet_time() {
		return $this->getTimeSheet_time;
	}

	public function getTimeSheet(){
		$connection = mysqli_connect($this->host,$this->username,$this->password,$this->database);      
		$result = mysqli_query($connection, " SELECT id FROM timeSheet ORDER BY id ASC ") or die("Query fail: " . mysqli_error()); 
		while($row = mysqli_fetch_array($result))
		{
			$this->getTimeSheet_time[] = $row['id'];
		}	
	}

	public function hoursRendered($time1,$time2) {
		$t1 = new DateTime($time1);
		$t2 = new DateTime($time2);
		$total = $t1->diff($t2);
		return $total->h." Hours and ".$total->i." minutes";		
	}

	public function totalHour($time) {
		$totalHr = 0;
		$t = preg_split('/\s+/', $time);
		$totalHr += $t[0];

		return $totalHr;
	}

	public function totalMin($time) {
		$totalMins = 0;
		$t = preg_split('/\s+/', $time);
		$totalMins += $t[3];
		return $totalMins;
	}	

}

?>