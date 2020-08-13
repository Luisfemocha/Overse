<?php namespace App\Controllers;

use App\Models\VentaModel;

class CRUDVenCont extends BaseController{
	public function index(){
		$validation= \Config\Services::validation();
		$VentaModel= new VentaModel();
		$datos=$VentaModel->asObject()->findAll();
		$datosVista=array('ventas'=>$datos);
		return view('CRUD/CRUDVenta', $datosVista);
	}
	
	public function registrar(){
		$Venta= new VentaModel();

		$id=$this->request->getPost('id');
		$emp=$this->request->getPost('emp');
        $valor=$this->request->getPost('valor');
        $fecha=$this->request->getPost('fecha');
        
        $Venta->insert([
            'idV'=>$id,
            'emp1'=>$emp,
            'valor'=>$valor,
            'fecha'=>$fecha
        ]);
        		
		return redirect()->to(base_url('public/Venta'))->with('mensaje',"Se ha guardado la venta.");
	}

	public function eliminar($id){
		$VentaModelo= new VentaModel();
        $VentaModelo->where('idV',$id)->delete();
        
		return redirect()->to(base_url('public/Venta'));
	  }
}