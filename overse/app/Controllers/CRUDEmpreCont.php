<?php namespace App\Controllers;

use App\Models\EmpresaModel;

class CRUDEmpreCont extends BaseController{
	public function index(){
		$validation= \Config\Services::validation();
		$EmpresaModel= new EmpresaModel();
		$datos=$EmpresaModel->asObject()->findAll();
		$datosVista=array('empresas'=>$datos);
		return view('CRUD/CRUDEmpresa', $datosVista);
	}
	
	public function registrar(){
		$Empresa= new EmpresaModel();

		$id=$this->request->getPost('id');
		$nom=$this->request->getPost('nom');
		$tel=$this->request->getPost('tel');
		$cor=$this->request->getPost('email');
		$dir=$this->request->getPost('dir');

		$Empresa->insert([
			'idEmp'=>$id,
			'nomEmp'=>$nom,
			'telEmp'=>$tel,
            'corEmp'=>$cor,
            'dirEmp'=>$dir
		]);
		
		return redirect()->to(base_url('public/Empresa'))->with('mensaje',"Se ha guardado la empresa.");
	}

	public function eliminar($id){
      
		$EmpresaModelo= new EmpresaModel();
  
		$EmpresaModelo->where('idEmp',$id)->delete();
		
		return redirect()->to(base_url('public/Empresa'));
  
	  }
}