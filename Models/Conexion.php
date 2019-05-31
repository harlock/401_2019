<?php namespace Models;

	class Conexion{

		private $datos = array(
			"host" => "localhost",
			"user" => "root",
			"pass" => "",
			"db" => "test_401"
		);

		private $con;

		public function __construct(){
			$this->con = new \mysqli($this->datos['host'], 
				$this->datos['user'], $this->datos['pass'],
				$this->datos['db']);
		}

		public function consultaSimple($sql){
			$datos=$this->con->query($sql);
			if(!$datos)
				printf("Errormessage: %s\n", $this->con->error);
		}

		public function consultaRetorno($sql){

			
			$datos = $this->con->query($sql);
			if(!$datos)
				printf("Errormessage: %s\n", $this->con->error);
			return $datos;
		}
	}

?>
