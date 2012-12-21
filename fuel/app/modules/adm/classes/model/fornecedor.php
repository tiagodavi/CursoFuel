<?php

namespace Adm\Model;

class Fornecedor extends \Model_Crud
{
	protected static $_table_name = 'fornecedores';
		
	//List
	public static function _find($closure, $key = null)
	{
		return static::find($closure, $key);
	}
	
	// --------------------------------------------------------------------
	
	//Insert/Update
	public static function _save($data)
	{
		//A senha é o próprio código
		$data['senha'] = md5($data['codigo']); 
		
		$fornecedor 	 = static::forge($data);
		
		(isset($data['id']) && is_numeric($data['id'])) ? $fornecedor->is_new(false) : $fornecedor->is_new(true);
		
		$fornecedor->save();
				
		return $fornecedor;
	}
	
	// --------------------------------------------------------------------
	
	//Delete
	public static function _delete($id)
	{
		/*
		 **
		 $fornecedor 	= static::find_by_pk($id); //(Forma prática)		 
		 if($fornecedor) $fornecedor->delete();
		*/
		
		//SELECT * FROM `fornecedores` WHERE `id` = '?'
		list($fornecedor) = static::_find(function($query) use($id) { return $query->where('id', $id); });
						
		if($fornecedor) $fornecedor->delete();
	}
}