<?php namespace App\Controllers;

use App\Models\ClientModel;

class regCont extends BaseController{
	public function index(){
		$validation= \Config\Services::validation();
		$ClientModel= new ClientModel();
		return view('registro');
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
		
		return redirect()->to(base_url('public/registro'))->with('mensaje',"Se ha guardado el cliente.");

		/*$clienteModelo= new ClientModel();
		$validation= \Config\Services::validation();
		$validation->setRules([
				'id' => [
					'label' => 'Rules.idC',
					'rules'=>'required|min_length[7]|max_length[11]',
					'errors' =>[
						'required' => "Por favor ingrese un número de identificación.",
						'min_length' => "Por favor ingrese un número de identificación válido (por lo menos 7 dígitos).",
						'max_length' => "Por favor ingrese un número de identificación válido (a lo sumo 11 dígitos)."
					]
				],
				'nom'=> [
					'label' => 'Rules.nomC',
					'rules' => 'required|min_length[3]|max_length[100]',
					'errors' => [
						'required' => "Por favor ingrese un nombre.",
						'min_length' => "Por favor ingrese un nombre válido (por lo menos 3 caracteres).",
						'max_length' => "Ha ingresado un nombre muy largo (hasta 100 caracteres)."
					]
				],
				'tel'=>[
					'label' => 'Rules.tel',
					'rules' => 'exactlength[7,10]',
					'errors' => [
						'exactlength' => "Por favor ingrese un teléfono o celular válido (sólo disponible en Medellín, Colombia)."
					]
				],
				'email' =>[
					'label' => 'Rules.email',
					'rules' => 'valid_email',
					'errors' =>[
						'valid_email' => "Por favor ingrese un email válido."
					]
				]
		]);
		if($validation->hasError('id')){
			$error= $validation->getError('id');
		}
		else if($validation->hasError('nom')){
			$error= $validation->getError('nom');
		}
		else if($validation->hasError('tel')){
			$error= $validation->getError('tel');
		}
		else if($validation->hasError('email')){
			$error= $validation->getError('email');
		}
		else{
			$validation=\Config\Services::validation();
			return view('registro', ['validation'=>$validation]);
		}
		alert($error);*/
	}
}