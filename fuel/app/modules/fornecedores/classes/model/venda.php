<?php

namespace Fornecedores\Model;

class Venda
{
	/**
	*	Acessado por fornecedores
	**/
	public static function consultar($criterio = null)
	{
		for($i=0;$i<10;$i++){
			$produtos[$i]['nome']	 		= "Produto-{$i}";
			$produtos[$i]['codigo'] 	= $i + rand(50,100);
			$produtos[$i]['vendidos'] = $i + rand(1,20);
		}
		
		return $produtos;
	}
}