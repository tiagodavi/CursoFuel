<?php

namespace Fornecedores;

use Fornecedores\Model\Venda;

class View_Consultar extends \ViewModel
{
	public function view()
	{
		$this->upper 	= function($string){ return strtoupper($string); };
		$this->vendas = Venda::consultar();
	}
}