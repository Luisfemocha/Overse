<?php namespace App\Controllers;

use App\Models\StockModel;

class CRUDStoCont extends BaseController{
	public function index(){
		$validation= \Config\Services::validation();
		$StockModel= new StockModel();
		$datos=$StockModel->asObject()->findAll();
		$datosVista=array('stocks'=>$datos);
		return view('CRUD/CRUDStock', $datosVista);
	}
	
	public function registrar(){
		$Stock= new StockModel();

		$idj=$this->request->getPost('idj');
		$enc=$this->request->getPost('enc');
        $vent=$this->request->getPost('vent');
        if ($enc==NULL && $vent!=NULL){
            $Stock->insert([
                'idJ1'=>$idj,
                'vent'=>$vent
            ]);
        }
        else if($enc!=NULL && $vent==NULL){
            $Stock->insert([
                'idJ1'=>$idj,
                'encargado'=>$enc
            ]);
        }
        else if($enc==NULL && $vent==NULL){
            $Stock->insert([
                'idJ1'=>$idj
            ]);
        }
        else{
            $Stock->insert([
                'idJ1'=>$idj,
                'encargado'=>$enc,
                'vent'=>$vent
            ]);
        }
		
		return redirect()->to(base_url('public/Stock'))->with('mensaje',"Se ha guardado el juego que hay en stock.");
	}

	public function eliminar($id){
      
		$StockModelo= new StockModel();
  
		$StockModelo->where('idS',$id)->delete();
		
		return redirect()->to(base_url('public/Stock'));
  
	  }
}