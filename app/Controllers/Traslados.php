<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Traslado;
class Traslados extends Controller{
    
    public function index(){

        $traslado = new Traslado();
        $datos['traslados'] = $traslado->orderBy('idtra','ASC')->findAll();

        $datos['cabecera2'] = view('template/cabecera2');
        $datos['pie'] = view('template/piepagina');

        return view('traslados/listartraslado',$datos);

    }

    
    public function creartraslado(){

        $datos['cabecera2'] = view('template/cabecera2');
        $datos['pie'] = view('template/piepagina');

        return view('traslados/creartraslado',$datos);

    }

    public function guardartraslado(){
        
        $traslado = new Traslado();

        $validacion = $this->validate([
            'idare' => 'required|min_length[1]',
            'idinc' => 'required|min_length[1]'
        ]);

        if(!$validacion){
            $session = session();
            $session -> setFlashdata('mensaje','Revise la informacion ingresada');
            
            return redirect()->back()->withInput();
        }

        $datos = [
            'idare'=>$this->request->getVar('idare'),
            'idinc'=>$this->request->getVar('idinc')
        ];
        
        $traslado -> insert($datos);
        return $this->response->redirect(site_url('/listartraslado'));
        
    }

    public function borrartraslado($id=null){

        $traslado = new Traslado();

        $datosTraslado = $traslado->where('idtra',$id)->first();

        $traslado -> where('idtra',$id)->delete($id);

        return $this->response->redirect(site_url('/listartraslado'));

    }


    public function editartraslado($id=null){

        $traslado = new Traslado();

        $datos['traslado'] = $traslado -> where('idtra',$id)->first();

        $datos['cabecera2'] = view('template/cabecera2');
        $datos['pie'] = view('template/piepagina');

        return view('traslados/editartraslado',$datos);

    }

    public function actualizartraslado(){
        
        $traslado = new Traslado();

        $validacion = $this->validate([
            'idare' => 'required|min_length[1]',
            'idinc' => 'required|min_length[1]'
        ]);

        if(!$validacion){
            $session = session();
            $session -> setFlashdata('mensaje','Revise la informacion ingresada');
            
            return redirect()->back()->withInput();
        }

        $datos = [
            'idare'=>$this->request->getVar('idare'),
            'idinc'=>$this->request->getVar('idinc')
        ];
        
        $id = $this->request->getVar('idtra');

        $traslado -> update($id,$datos);
        return $this->response->redirect(site_url('/listartraslado'));
        
    }



}