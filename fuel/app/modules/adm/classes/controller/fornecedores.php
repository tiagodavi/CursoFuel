<?php

namespace Adm;

use Adm\Model\Fornecedor;

class Controller_Fornecedores extends \Controller_Hybrid
{
	public function get_index()
	{
		//SELECT * FROM `fornecedores`
		$data['fornecedores'] 		= Fornecedor::_find(function($query){ return $query->select('*'); }, 'id');
						
		$this->template->content 	= \View::forge('fornecedores/index', $data);
	}
	
	// --------------------------------------------------------------------
	
	public function get_novo()
	{				
		$this->template->content 	= static::pega_form(
																	Fornecedor::forge(
																		array('id'		 => null,
																					'nome'	 => null,
																					'codigo' => null
																		)
																	),
																	'Novo Fornecedor'
																);
	}
	
	// --------------------------------------------------------------------
	
	public function get_editar($id = 0)
	{
		$fornecedor = Fornecedor::find_by_pk($id);
		
		$this->template->content 	= static::pega_form($fornecedor, 'Editar '.$fornecedor->nome);
	}
	
	// --------------------------------------------------------------------
	
	
	public function post_salvar()
	{
		Fornecedor::_save(\Input::post('fornecedor'));
		
		return \Response::redirect('adm/fornecedores');
	}
	
	// --------------------------------------------------------------------
	
	
	public function get_deletar($id = 0)
	{				
		Fornecedor::_delete($id);
		
		return \Response::redirect('adm/fornecedores');
	}
	
	// --------------------------------------------------------------------
	
	
	private static function pega_form(Fornecedor $fornecedor, $titulo)
	{
		$form 						= \View::forge('fornecedores/form');
		$form->titulo 		= $titulo;
		$form->fornecedor = $fornecedor;
		
		return $form;
	}
}