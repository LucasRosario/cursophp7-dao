<?php 

class Sql extends PDO{

	private $conn;
	//CONEXAO COM O BANCO
	public function __construct(){
			$this->conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");
	}

	//INSERINDO DADOS EM UM VETOR
	private function setParams($statement, $parameters = array()){

			foreach ($parameters as $key => $value) {

				$this->setParam($statement, $key, $value);

			}
	}

	//INSERINDO DADOS EM 1 ITEM
	private function setParam($statement, $key, $value){

		$statement->bindParam($key, $value);

	}
	
	// Executa a Query dentro do banco de dados (BIND)
	public function query($rawQuery, $params = array()){
		
		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt, $params);

		$stmt->execute();

		return $stmt;

	}

	//PROJETA DADOS DO BANCO (tratamento)
	public function select($rawQuery, $params = array()):array{

		$stmt = $this->query($rawQuery, $params);

		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

}

 ?>