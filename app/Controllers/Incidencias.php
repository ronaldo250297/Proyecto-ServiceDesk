<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Incidencia;
class Incidencias extends Controller{

    public function index(){

        $incidencia = new Incidencia();
        $datos['incidencias'] = $incidencia->orderBy('idinc','ASC')->findAll();

        $datos['cabecera'] = view('template/cabecera');
        $datos['pie'] = view('template/piepagina');

        return view('incidencias/listarincidencia',$datos);

    }

    
    public function crearincidencia(){

        $datos['cabecera'] = view('template/cabecera');
        $datos['pie'] = view('template/piepagina');

        return view('incidencias/crearincidencia',$datos);

    }

    public function guardarincidencia(){
      
        $incidencia = new Incidencia();

        $validacion = $this->validate([
            'nominc' => 'required|min_length[3]',
            'detinc' => 'required|min_length[3]'
            
        ]);

        if(!$validacion){
            $session = session();
            $session -> setFlashdata('mensaje','Revise la informacion ingresada');
            
            return redirect()->back()->withInput();
        }

        if($imginc=$this->request->getFile('imginc')){
            $nuevoNombre = $imginc->getRandomName();
            $imginc -> move('../public/uploads/',$nuevoNombre);
        
            $datos = [
                'nominc'=>$this->request->getVar('nominc'),
                'detinc'=>$this->request->getVar('detinc'),
                'imginc'=>$nuevoNombre,
                'idusu'=>$this->request->getVar('idusu')
            ];
            $incidencia -> insert($datos);
        }

        return $this->response->redirect(site_url('/listarincidencia'));
    
    }

    public function borrarincidencia($id=null){

        $incidencia = new Incidencia();

        $datosIncidencia = $incidencia->where('idinc',$id)->first();

        $ruta=('../public/uploads/'.$datosIncidencia['imginc']);
        unlink($ruta);

        $incidencia -> where('idinc',$id)->delete($id);

        return $this->response->redirect(site_url('/listarincidencia'));

    }


    public function editarincidencia($id=null){

        $incidencia = new Incidencia();

        $datos['incidencia'] = $incidencia -> where('idinc',$id)->first();

        $datos['cabecera'] = view('template/cabecera');
        $datos['pie'] = view('template/piepagina');

        return view('incidencias/editarincidencia',$datos);

    }

    public function actualizarincidencia(){
        
        $incidencia = new Incidencia();

        $datos = [
            'nominc'=>$this->request->getVar('nominc'),
            'detinc'=>$this->request->getVar('detinc'),
            'idusu'=>$this->request->getVar('idusu')
        ];

        $id = $this->request->getVar('idinc');

        $incidencia -> update($id,$datos);

        $validacion = $this->validate([
            'imginc' => [
                'uploaded[imginc]',
                'mime_in[imginc,imginc/jpg,imginc/jpeg,imginc/png]',
                'max_size[imginc,1024]',
            ]
        ]);

        if($validacion){
            if($imginc=$this->request->getFile('imginc')){
                
                $datosIncidencia = $incidencia->where('idinc',$id)->first();
                
                $ruta=('../public/uploads/'.$datosIncidencia['imginc']);
                unlink($ruta);
                
                $nuevoNombre = $imginc->getRandomName();
                $imginc -> move('../public/uploads/',$nuevoNombre);
            
                $datos = [
                    'imginc'=>$nuevoNombre
                ];
                $incidencia -> update($id,$datos);
            }
        }

        return $this->response->redirect(site_url('/listarincidencia'));
        
    }



}