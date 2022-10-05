<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Respuesta;
class Respuestas extends Controller{

    
    public function index(){

        $respuesta = new Respuesta();
        $datos['respuestas'] = $respuesta->orderBy('idres','ASC')->findAll();

        $datos['cabecera'] = view('template/cabecera');
        $datos['pie'] = view('template/piepagina');

        return view('respuestas/listarrespuesta',$datos);

    }

    
    public function crearrespuesta(){

        $datos['cabecera'] = view('template/cabecera');
        $datos['pie'] = view('template/piepagina');

        return view('respuestas/crearrespuesta',$datos);

    }

    public function guardarrespuesta(){
        
        $respuesta = new Respuesta();

        $validacion = $this->validate([
            'detres' => 'required|min_length[3]'
        ]);

        if(!$validacion){
            $session = session();
            $session -> setFlashdata('mensaje','Revise la informacion ingresada');
            
            return redirect()->back()->withInput();
        }

        $datos = [
            'detres'=>$this->request->getVar('detres'),
            'idinc'=>$this->request->getVar('idinc'),
            'idemp'=>$this->request->getVar('idemp')
        ];
        
        $respuesta -> insert($datos);
        return $this->response->redirect(site_url('/listarrespuesta'));
        
    }

    public function borrarrespuesta($id=null){

        $respuesta = new Respuesta();

        $datosRespuesta = $respuesta->where('idres',$id)->first();

        $respuesta -> where('idres',$id)->delete($id);

        return $this->response->redirect(site_url('/listarrespuesta'));

    }


    public function editarrespuesta($id=null){

        $respuesta = new Respuesta();

        $datos['respuesta'] = $respuesta -> where('idres',$id)->first();

        $datos['cabecera'] = view('template/cabecera');
        $datos['pie'] = view('template/piepagina');

        return view('respuestas/editarrespuesta',$datos);

    }

    public function actualizarrespuesta(){
        
        $respuesta = new Respuesta();

        $validacion = $this->validate([
            'detres' => 'required|min_length[3]'
        ]);

        if(!$validacion){
            $session = session();
            $session -> setFlashdata('mensaje','Revise la informacion ingresada');
            
            return redirect()->back()->withInput();
        }

        $datos = [
            'detres'=>$this->request->getVar('detres'),
            'idinc'=>$this->request->getVar('idinc'),
            'idemp'=>$this->request->getVar('idemp')
        ];
        
        $id = $this->request->getVar('idres');

        $respuesta -> update($id,$datos);
        return $this->response->redirect(site_url('/listarrespuesta'));
        
    }



}