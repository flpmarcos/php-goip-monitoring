<?php

require_once("bdConnect/bdConnect.php");


class BDchipeira {

	public function consultaChipeira(){
		$conn = bdConnect();
		$consulta = $consulta = 'SELECT * FROM goip ORDER BY id desc ';
		
		$operacao = $conn->prepare($consulta);
		$resultados = $operacao->execute();
		$resultados = $operacao->fetchAll();
		$conn=null;
		
		return $resultados;
	}

}