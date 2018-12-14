<?php
class DBController {
	private $host = "localhost";
	private $user = "root";
	private $password = "";
	private $database = "ined_relatorio";
	private $conn;
	function __construct() {
		$this->conn = $this->connectDB();
	}
	function connectDB() {
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $conn;
	}
	function selectDB($query) {
		$result = mysqli_query($this->conn,$query);
		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}
		if(!empty($resultset))
			return $resultset;
	}
	function numRows($query) {
		$result  = mysqli_query($this->conn,$query);
		if(!isset($result)){return 0;}
		$rowcount = mysqli_num_rows($result);
		return $rowcount;
	}
	function insertDB($query) {
		if (mysqli_query($this->conn, $query)) {
      //  echo "Novo registro criado com sucesso";
				return true;
        } else {
           echo "Error: " . $query . "<br>" . mysqli_error($this->conn);
					 return false;
    }
	}
	function updateDB($query) {
		if (mysqli_query($this->conn, $query)) {
        echo "Registro atualizado com sucesso";
        } else {
           echo "Error: " . $query . "<br>" . mysqli_error($this->conn);
     }
	}
	function removeBD($query){
		mysqli_query($this->conn, $query);
	}
	function closeDB() {
		if(mysqli_close($this->conn)){
			return 1;
		}else {
			return 0;
		}
	}
}
?>
