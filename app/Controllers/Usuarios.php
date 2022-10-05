<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Usuario;

class Usuarios extends Controller{

    public function index(){

        $usuario = new Usuario();
        $datos['usuarios'] = $usuario->orderBy('idusu','ASC')->findAll();

        $datos['cabecera'] = view('template/cabecera');
        $datos['pie'] = view('template/piepagina');

        return view('usuarios/listarusuario',$datos);

    }

    public function crearusuario(){

        $datos['cabecera'] = view('template/cabecera');
        $datos['pie'] = view('template/piepagina');

        return view('usuarios/crearusuario',$datos);

    }

    public function guardarusuario(){
        
        $usuario = new Usuario();

        $validacion = $this->validate([
            'dniusu' => 'required|min_length[8]',
            'nomusu' => 'required|min_length[3]',
            'apepausu' => 'required|min_length[3]',
            'apemausu' => 'required|min_length[3]',
            'passusu' => 'required|min_length[6]'
        ]);

        if(!$validacion){
            $session = session();
            $session -> setFlashdata('mensaje','Revise la informacion ingresada');
            
            return redirect()->back()->withInput();
        }

        $datos = [
            'dniusu'=>$this->request->getVar('dniusu'),
            'nomusu'=>$this->request->getVar('nomusu'),
            'apepausu'=>$this->request->getVar('apepausu'),
            'apemausu'=>$this->request->getVar('apemausu'),
            'passusu'=>$this->request->getVar('passusu')
        ];
        
        $usuario -> insert($datos);
        return $this->response->redirect(site_url('/listarusuario'));
        
    }

    public function borrarusuario($id=null){

        $usuario = new Usuario();

        $datosUsuario = $usuario->where('idusu',$id)->first();

        $usuario -> where('idusu',$id)->delete($id);

        return $this->response->redirect(site_url('/listarusuario'));

    }


    public function editarusuario($id=null){

        $usuario = new Usuario();

        $datos['usuario'] = $usuario -> where('idusu',$id)->first();

        $datos['cabecera'] = view('template/cabecera');
        $datos['pie'] = view('template/piepagina');

        return view('usuarios/editarusuario',$datos);

    }

    public function actualizarusuario(){
        
        $usuario = new Usuario();

        $validacion = $this->validate([
            'dniusu' => 'required|min_length[8]',
            'nomusu' => 'required|min_length[3]',
            'apepausu' => 'required|min_length[3]',
            'apemausu' => 'required|min_length[3]',
            'passusu' => 'required|min_length[6]'
        ]);

        if(!$validacion){
            $session = session();
            $session -> setFlashdata('mensaje','Revise la informacion ingresada');
            
            return redirect()->back()->withInput();
        }

        $datos = [
            'dniusu'=>$this->request->getVar('dniusu'),
            'nomusu'=>$this->request->getVar('nomusu'),
            'apepausu'=>$this->request->getVar('apepausu'),
            'apemausu'=>$this->request->getVar('apemausu'),
            'passusu'=>$this->request->getVar('passusu')
        ];
        
        $id = $this->request->getVar('idusu');

        $usuario -> update($id,$datos);
        return $this->response->redirect(site_url('/listarusuario'));
        
    }



}