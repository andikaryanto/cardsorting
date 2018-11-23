<?php 
	//session_start();
	$url = "/cardsorting/";
	//$url = "http://localhost/cardsorting/";
	$title = "Kuliner";
	$no = 1;
	conn();
	
	function conn(){
		
		$con = mysqli_connect("localhost", "root", "", "cardsorting");
		//mysqli_select_db($con, "cardsorting");
		
		// settings
		
		return $con;
	}
	
	function alert($command){
		echo "<script>alert('".$command."');</script>";
	}
	function redir($command){
		echo "<script>document.location='".$command."';</script>";
	}
	function validate_admin_not_login($command){
		if(empty($_SESSION['iam_admin'])){
			redir($command);
		}
	}
	//class DB
	//{

		
	// try {
		
	// 	$servername = "localhost";
	// 	$username = "root";
	// 	$password = "";

	// 	$conn = new PDO("mysql:host=$servername;dbname=catering", $username, $password);
	// 	// set the PDO error mode to exception
	// 	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// 	//echo "Connected successfully"; 
	// 	return $conn;
	// }
	// catch(PDOException $e)
	// {
	// 	echo "Connection failed: " . $e->getMessage();
	// }

	// function connection()
	// {
		// $servername = "localhost";
		// $username = "root";
		// $password = "";

		// $conn = mysqli_connect($servername, $username, $password, "catering");
		//return $conn;
	//}	
	//}	
?>