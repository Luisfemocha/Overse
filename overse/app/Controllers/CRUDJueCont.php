<?php namespace App\Controllers;

use App\Models\JuegoModel;

class CRUDJueCont extends BaseController{
	public function index(){
		$validation= \Config\Services::validation();
		$JuegoModel= new JuegoModel();
		$datos=$JuegoModel->asObject()->findAll();
		$datosVista=array('juegos'=>$datos);
		return view('CRUD/CRUDJuego', $datosVista);
	}
	
	public function registrar(){
		$Juego= new JuegoModel();

		$id=$this->request->getPost('id');
		$nom=$this->request->getPost('nom');
		$precio=$this->request->getPost('precio');
		$ESRB=$this->request->getPost('ESRB');
		$genero=$this->request->getPost('gen');
		$plat=$this->request->getPost('plat');

		$Juego->insert([
			'idJ'=>$id,
			'nomJ'=>$nom,
			'precio'=>$precio,
            'ESRB'=>$ESRB,
            'genero'=>$genero,
            'plataforma'=>$plat
		]);
		
		return redirect()->to(base_url('public/Juego'))->with('mensaje',"Se ha guardado el juego.");
	}

	public function eliminar($id){
      
		$JuegoModelo= new JuegoModel();
  
		$JuegoModelo->where('idJ',$id)->delete();
		
		return redirect()->to(base_url('public/Juego'));
  
	  }
}