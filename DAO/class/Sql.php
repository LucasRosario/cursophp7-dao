<?php 

class Sql extends PDO{

	private $conn;
	//CONEXAO COM O BANCO
	public function __construct(){
			$this->conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");
	}// FIM DA CONEXAO

	//INSERINDO DADOS EM UM VETOR
	private function setParams($statement, $parameters = array()){

			foreach ($parameters as $key => $value) {

				$this->setParam($statement, $key, $value);

			}
	}// FIM DA INSERÇÃO

	//INSERINDO DADOS EM 1 ITEM
	private function setParam($statement, $key, $value){

		$statement->bindParam($key, $value);

	}// FIM DA INSERÇÃO
	
	// Executa a Query dentro do banco de dados (BIND)
	public function query($rawQuery, $params = array()){
		
		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt, $params);

		$stmt->execute();

		return $stmt;

	} //FIM DA QUERY

	//PROJETA DADOS DO BANCO (tratamento)
	public function select($rawQuery, $params = array()):array{

		$stmt = $this->query($rawQuery, $params);

		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

}

 ?>