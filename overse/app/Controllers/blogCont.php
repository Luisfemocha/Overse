<?php namespace App\Controllers;

class blogCont extends BaseController{
	public function index(){
		return view('blog');
    }
}