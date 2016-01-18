<?php

	function active_class($id, $id_atual){
	   if($id == $id_atual){return "active";}
	}

    function dataPtBrParaMysql($dataPtBr) {
    	$partes = explode("/", $dataPtBr);
		return "{$partes[2]}-{$partes[1]}-{$partes[0]}";
	}
	
	function dataMysqlParaPtBr($dataPtBr) {
    	$partes = explode("-", $dataPtBr);
		return "{$partes[2]}/{$partes[1]}/{$partes[0]}";
	}