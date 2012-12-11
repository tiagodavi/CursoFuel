<?php

namespace Adm;

class Controller_Vendas extends \Controller_Rest
{
	public function get_fornecedores()
	{
		$widget = \Request::forge('fornecedores/vendas/consultar')->execute();
		
		echo $widget;
	}
}