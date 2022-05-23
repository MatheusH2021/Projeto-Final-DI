<?php

abstract class DB{
    
    public function __construct(){}

    public function __clone(){}

    public function __destruct()
    {
        $this->disconnect(); 
        foreach($this as $key => $value)
        {
            unset($this->key);
        }
    }

    private static $dbtype = "mysql";
    private static $host = "localhost";
    private static $user = "root";
    private static $password = "";
    private static $db = "getitdone";

    private function getDBType() {return self::$dbtype;}
	private function getHost() {return self::$host;}
	private function getUser() {return self::$user;}
	private function getPassword(){return self::$password;}
	private function getDB() {return self::$db;}

    public function connect(){
		try{
			$this->conexao = new PDO($this->getDBType().":dbname=".$this->getDB().";host=".$this->getHost(), $this->getUser(), $this->getPassword());
		}catch (PDOException $i){
			//se houver exceção, exibe
			die("Erro: <code>" . $i->getMessage() . "</code>");
		}

		return ($this->conexao);
	}

    private function disconnect(){
		$this->conexao = null;
	}
}

class MySql extends DB{

    public function selectDB($data, $table, $where='1=1', $params=null,$class=null,$row=null){
		
		$sql = "select $data from $table where $where";

		$query=$this->connect()->prepare($sql);
		$query->execute($params);
		$rows = $query->rowCount();

		if ($rows > 0){
			if(isset($class)){
				$rs = $query->fetchAll(PDO::FETCH_CLASS,$class) or die(print_r($query->errorInfo(), true));
			}else{
				if(isset($row)){
					$rs = $query->fetch(PDO::FETCH_ASSOC) or die(print_r($query->errorInfo(), true));
				}else{
					$rs = $query->fetchAll(PDO::FETCH_ASSOC) or die(print_r($query->errorInfo(), true));
				}
			}
		}else{
			$rs = "";
		}
					
		self::__destruct();
		return $rs;
	}

    public function insertDB($campos, $table, $values, $params=null) {	
		
		$sql = "insert into $table ($campos) values ($values);";
        
		$query=$this->connect()->prepare($sql);
		$query->execute($params);
		
		$rows = $query->rowCount();
		
		if ($table == "usuarios" || $table == "tarefas"){
			$rs = true;
		}else{
			$rs = $conexao->lastInsertId() or die(print_r($query->errorInfo(), true));
		}
		
		self::__destruct();
		return $rs;
	}

    public function updateDB($data, $table, $where, $params=null) {

		$strAlter = "";
		
		$conexao=$this->connect();
		
		foreach ($data as $column => $value) {
			$strAlter .= ($strAlter == "") ? "" : ", ";
			$strAlter .= $column . ' = ' . $value;
		}	
		
		$sql = "UPDATE $table SET $strAlter WHERE $where";
		
		$query=$conexao->prepare($sql);
		$query->execute($params);
		$rows = $query->rowCount();

		if ($rows > 0){
			$rs = $query->rowCount() or die(print_r($query->errorInfo(), true));
		}else{
			$rs = "";
		}		
			
		self::__destruct();
	}

    public function deleteDB($table, $where, $params=null) {
		
		$conexao=$this->connect();
				
		$sql = "delete from $table WHERE $where";
		$query=$conexao->prepare($sql);
		$query->execute($params);

		$rows = $query->rowCount();

		if ($rows > 0){
			$rs = $query->rowCount() or die(print_r($query->errorInfo(), true));
		}else{
			$rs = "";
		}		
			
		self::__destruct();
	}

}