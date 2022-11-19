<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Pregunta;
class Preguntas extends Controller{

    public function index(){

        $pregunta = new Pregunta();
        $datos['preguntas'] = $pregunta->orderBy('idpre','ASC')->findAll();

        $datos['cabecera'] = view('template/cabecera');
        $datos['pie'] = view('template/piepagina');

        return view('preguntas/listarpregunta',$datos);

    }

    
    public function crearpregunta(){

        $datos['cabecera'] = view('template/cabecera');
        $datos['pie'] = view('template/piepagina');

        return view('preguntas/crearpregunta',$datos);

    }

    public function guardarpregunta(){
      
        $pregunta = new Pregunta();

        $validacion = $this->validate([
            'pregun' => 'required|min_length[3]',
            'respre' => 'required|min_length[3]'
            
        ]);

        if(!$validacion){
            $session = session();
            $session -> setFlashdata('mensaje','Revise la informacion ingresada');
            
            return redirect()->back()->withInput();
        }

        $datos = [
            'pregun'=>$this->request->getVar('pregun'),
            'respre'=>$this->request->getVar('respre')
        ];
        
        $incidencia -> insert($datos);
        return $this->response->redirect(site_url('/listarpregunta'));
    
    }


    public function borrarpregunta($id=null){

        $pregunta = new Pregunta();

        $datosPregunta = $pregunta->where('idpre',$id)->first();

        $pregunta -> where('idpre',$id)->delete($id);

        return $this->response->redirect(site_url('/listarpregunta'));

    }


    public function editarpregunta($id=null){

        $pregunta = new Pregunta();

        $datos['pregunta'] = $pregunta -> where('idpre',$id)->first();

        $datos['cabecera'] = view('template/cabecera');
        $datos['pie'] = view('template/piepagina');

        return view('preguntas/editarpregunta',$datos);

    }

    public function actualizarpregunta(){
        
        $pregunta = new Pregunta();

        $validacion = $this->validate([
            'pregun' => 'required|min_length[3]',
            'respre' => 'required|min_length[3]'
        ]);

        if(!$validacion){
            $session = session();
            $session -> setFlashdata('mensaje','Revise la informacion ingresada');
            
            return redirect()->back()->withInput();
        }

        $datos = [
            'pregun'=>$this->request->getVar('pregun'),
            'respre'=>$this->request->getVar('respre')
        ];
        
        $id = $this->request->getVar('idpre');

        $pregunta -> update($id,$datos);
        return $this->response->redirect(site_url('/listarpregunta'));
        
    }




}