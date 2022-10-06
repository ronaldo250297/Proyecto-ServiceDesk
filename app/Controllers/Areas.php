<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Area;
class Areas extends Controller{

    
    public function index(){

        $area = new Area();
        $datos['areas'] = $area->orderBy('idare','ASC')->findAll();

        $datos['cabecera2'] = view('template/cabecera2');
        $datos['pie'] = view('template/piepagina');

        return view('areas/listararea',$datos);

    }

    
    public function creararea(){

        $datos['cabecera2'] = view('template/cabecera2');
        $datos['pie'] = view('template/piepagina');

        return view('areas/creararea',$datos);

    }

    public function guardararea(){
        
        $area = new Area();

        $validacion = $this->validate([
            'nomare' => 'required|min_length[3]',
            'fonoare' => 'required|min_length[4]'
        ]);

        if(!$validacion){
            $session = session();
            $session -> setFlashdata('mensaje','Revise la informacion ingresada');
            
            return redirect()->back()->withInput();
        }

        $datos = [
            'nomare'=>$this->request->getVar('nomare'),
            'fonoare'=>$this->request->getVar('fonoare')
        ];
        
        $area -> insert($datos);
        return $this->response->redirect(site_url('/listararea'));
        
    }

    public function borrararea($id=null){

        $area = new Area();

        $datosArea = $area->where('idare',$id)->first();

        $area -> where('idare',$id)->delete($id);

        return $this->response->redirect(site_url('/listararea'));

    }


    public function editararea($id=null){

        $area = new Area();

        $datos['area'] = $area -> where('idare',$id)->first();

        $datos['cabecera2'] = view('template/cabecera2');
        $datos['pie'] = view('template/piepagina');

        return view('areas/editararea',$datos);

    }

    public function actualizararea(){
        
        $area = new Area();

        $validacion = $this->validate([
            'nomare' => 'required|min_length[3]',
            'fonoare' => 'required|min_length[4]'
        ]);

        if(!$validacion){
            $session = session();
            $session -> setFlashdata('mensaje','Revise la informacion ingresada');
            
            return redirect()->back()->withInput();
        }

        $datos = [
            'nomare'=>$this->request->getVar('nomare'),
            'fonoare'=>$this->request->getVar('fonoare')
        ];
        
        $id = $this->request->getVar('idare');

        $area -> update($id,$datos);
        return $this->response->redirect(site_url('/listararea'));
        
    }




}