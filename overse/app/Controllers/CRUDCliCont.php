<?php namespace App\Controllers;

use App\Models\ClientModel; //import

class CRUDCliCont extends BaseController{
	public function index(){
		//$validation= \Config\Services::validation(); agregar reglas...
		$ClientModel= new ClientModel();
		$datos=$ClientModel->asObject()->findAll();
		$datosVista=array('clientes'=>$datos);
		return view('CRUD/CRUDCliente', $datosVista);
	}
	
	public function registrar(){
		$cliente= new ClientModel();

		$idC=$this->request->getPost('id');
		$nomC=$this->request->getPost('nom');
		$telC=$this->request->getPost('tel');
		$corC=$this->request->getPost('email');

		$cliente->insert([
			'idC'=>$idC,
			'nomC'=>$nomC,
			'telC'=>$telC,
			'corC'=>$corC
		]);
		
		return redirect()->to(base_url('public/Cliente'))->with('mensaje',"Se ha guardado el cliente.");
	}

	public function eliminar($id){
      
		$clienteModelo= new ClientModel();
  
		$clienteModelo->where('idC',$id)->delete();
		
		return redirect()->to(base_url('public/Cliente'));
  
	  }
}