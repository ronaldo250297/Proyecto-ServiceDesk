<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Empleado;
class Empleados extends Controller{

    public function index(){

        $empleado = new Empleado();
        $datos['empleados'] = $empleado->orderBy('idemp','ASC')->findAll();

        $datos['cabecera2'] = view('template/cabecera2');
        $datos['pie'] = view('template/piepagina');

        return view('empleados/listarempleado',$datos);
    }

    public function crearempleado(){

        $datos['cabecera2'] = view('template/cabecera2');
        $datos['pie'] = view('template/piepagina');

        return view('empleados/crearempleado',$datos);

    }

    
    public function guardarempleado(){
        
        $empleado = new Empleado();

        $validacion = $this->validate([
            'dniemp' => 'required|min_length[8]',
            'nomemp' => 'required|min_length[3]',
            'apepaemp' => 'required|min_length[3]',
            'apemaemp' => 'required|min_length[3]',
            'passemp' => 'required|min_length[6]',
            'fonoemp' => 'required|min_length[9]'
        ]);

        if(!$validacion){
            $session = session();
            $session -> setFlashdata('mensaje','Revise la informacion ingresada');
            
            return redirect()->back()->withInput();
        }

        $datos = [
            'dniemp'=>$this->request->getVar('dniemp'),
            'nomemp'=>$this->request->getVar('nomemp'),
            'apepaemp'=>$this->request->getVar('apepaemp'),
            'apemaemp'=>$this->request->getVar('apemaemp'),
            'passemp'=>$this->request->getVar('passemp'),
            'fonoemp'=>$this->request->getVar('fonoemp')
        ];
        
        $empleado -> insert($datos);
        return $this->response->redirect(site_url('/listarempleado'));
        
    }

    public function borrarempleado($id=null){

        $empleado = new Empleado();

        $datosEmpleado = $empleado->where('idemp',$id)->first();

        $empleado -> where('idemp',$id)->delete($id);

        return $this->response->redirect(site_url('/listarempleado'));

    }


    public function editarempleado($id=null){

        $empleado = new Empleado();

        $datos['empleado'] = $empleado -> where('idemp',$id)->first();

        $datos['cabecera2'] = view('template/cabecera2');
        $datos['pie'] = view('template/piepagina');

        return view('empleados/editarempleado',$datos);

    }

    public function actualizarempleado(){
        
        $empleado = new Empleado();

        $validacion = $this->validate([
            'dniemp' => 'required|min_length[8]',
            'nomemp' => 'required|min_length[3]',
            'apepaemp' => 'required|min_length[3]',
            'apemaemp' => 'required|min_length[3]',
            'passemp' => 'required|min_length[6]',
            'fonoemp' => 'required|min_length[9]'
        ]);

        if(!$validacion){
            $session = session();
            $session -> setFlashdata('mensaje','Revise la informacion ingresada');
            
            return redirect()->back()->withInput();
        }

        $datos = [
            'dniemp'=>$this->request->getVar('dniemp'),
            'nomemp'=>$this->request->getVar('nomemp'),
            'apepaemp'=>$this->request->getVar('apepaemp'),
            'apemaemp'=>$this->request->getVar('apemaemp'),
            'passemp'=>$this->request->getVar('passemp'),
            'fonoemp'=>$this->request->getVar('fonoemp')
        ];
        
        $id = $this->request->getVar('idemp');

        $empleado -> update($id,$datos);
        return $this->response->redirect(site_url('/listarempleado'));
        
    }



}
