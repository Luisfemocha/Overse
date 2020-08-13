<?php namespace App\Controllers;

use App\Models\EmpleadoModel;

class CRUDEmpleCont extends BaseController{
	public function index(){
		$validation= \Config\Services::validation();
		$EmpleModel= new EmpleadoModel();
		$datos=$EmpleModel->asObject()->findAll();
		$datosVista=array('empleados'=>$datos);
		return view('CRUD/CRUDEmpleado', $datosVista);
	}
	
	public function registrar(){
		$empleado= new EmpleadoModel();

		$idE=$this->request->getPost('id');
		$nomE=$this->request->getPost('nom');
		$telE=$this->request->getPost('tel');
		$esp=$this->request->getPost('espe');

		$empleado->insert([
			'idE'=>$idE,
			'nomE'=>$nomE,
			'telE'=>$telE,
			'esp'=>$esp
		]);
		
		return redirect()->to(base_url('public/Empleado'))->with('mensaje',"Se ha guardado el empleado.");
	}

	public function eliminar($id){
      
		$EmpleadoModelo= new EmpleadoModel();
  
		$EmpleadoModelo->where('idE',$id)->delete();
		
		return redirect()->to(base_url('public/Empleado'));
  
	  }
}