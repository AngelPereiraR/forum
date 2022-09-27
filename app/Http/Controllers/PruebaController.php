<?php 

namespace App\Http\Controllers;

class PruebaController extends Controller
{
	public function index(){
		return "Hola desde el nuevo controlador";
	}

    public function nombre($name){
        return "Hola " . $name;
    }
    
}
