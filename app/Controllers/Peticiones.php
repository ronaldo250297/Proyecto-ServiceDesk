<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Peticion;
class Peticiones extends Controller{

    public function index(){

        $peticion = new Peticion();
        $datos['peticiones'] = $peticion->orderBy('idpet','ASC')->findAll();

        $datos['cabecera'] = view('template/cabecera');
        $datos['pie'] = view('template/piepagina');

        return view('peticiones/listarpeticion',$datos);

    }

    
    public function crearpeticion(){

        $datos['cabecera'] = view('template/cabecera');
        $datos['pie'] = view('template/piepagina');

        return view('peticiones/listarpeticion',$datos);

    }

    public function guardarpeticion(){
      
        $peticion = new Peticion();

        $validacion = $this->validate([
            'titpet' => 'required|min_length[3]',
            'detpet' => 'required|min_length[3]'
            
        ]);

        if(!$validacion){
            $session = session();
            $session -> setFlashdata('mensaje','Revise la informacion ingresada');
            
            return redirect()->back()->withInput();
        }

        if($imgpet=$this->request->getFile('imgpet')){
            $nuevoNombre = $imgpet->getRandomName();
            $imgpet -> move('../public/uploads/',$nuevoNombre);
        
            $datos = [
                'titpet'=>$this->request->getVar('titpet'),
                'detpet'=>$this->request->getVar('detpet'),
                'imgpet'=>$nuevoNombre,
                'idusu'=>$this->request->getVar('idusu')
            ];
            $peticion -> insert($datos);
        }

        return $this->response->redirect(site_url('/listarpeticion'));
    
    }

    public function borrarpeticion($id=null){

        $peticion = new Peticion();

        $datosPeticion = $peticion->where('idpet',$id)->first();

        $ruta=('../public/uploads/'.$datosPeticion['imgpet']);
        unlink($ruta);

        $peticion -> where('idpet',$id)->delete($id);

        return $this->response->redirect(site_url('/listarpeticion'));

    }


    public function editarpeticion($id=null){

        $peticion = new Peticion();

        $datos['peticion'] = $peticion -> where('idpet',$id)->first();

        $datos['cabecera'] = view('template/cabecera');
        $datos['pie'] = view('template/piepagina');

        return view('peticiones/editarpeticion',$datos);

    }

    public function actualizarpeticion(){
        
        $peticion = new Peticion();

        $datos = [
            'titpet'=>$this->request->getVar('titpet'),
            'detpet'=>$this->request->getVar('detpet'),
            'idusu'=>$this->request->getVar('idusu')
        ];

        $id = $this->request->getVar('idpet');

        $peticion -> update($id,$datos);

        $validacion = $this->validate([
            'imgpet' => [
                'uploaded[imgpet]',
                'mime_in[imgpet,imgpet/jpg,imgpet/jpeg,imgpet/png]',
                'max_size[imgpet,1024]',
            ]
        ]);

        if($validacion){
            if($imgpet=$this->request->getFile('imgpet')){
                
                $datosPeticion = $peticion->where('imgpet',$id)->first();
                
                $ruta=('../public/uploads/'.$datosPeticion['imgpet']);
                unlink($ruta);
                
                $nuevoNombre = $imgpet->getRandomName();
                $imgpet -> move('../public/uploads/',$nuevoNombre);
            
                $datos = [
                    'imgpet'=>$nuevoNombre
                ];
                $peticion -> update($id,$datos);
            }
        }

        return $this->response->redirect(site_url('/listarpeticion'));
        
    }



}