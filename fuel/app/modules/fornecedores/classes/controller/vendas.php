<?php

namespace Fornecedores;

use Fornecedores\Model\Venda;

class Controller_Vendas extends \Controller_Rest
{
	public function get_index()
	{
		$this->get_consultar();
	}
	public function get_consultar()
	{		
		return $this->response(\ViewModel::forge('consultar'));
	}
}