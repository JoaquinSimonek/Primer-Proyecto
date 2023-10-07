<?php
namespace App\Controllers;
Use App\Models\usuario_Model;
Use CodeIgniter\Controller;
// Aca corregí un error 
class usuario_control extends BaseController {

    public function __construct(){
        helper(['form', 'url']);
    }

    public function create() {
        $data['titulo']='registro';
        echo view('front/head(inicio)', $data);
        echo view('front/navbar');
        echo view('back/usuario/registro');
        echo view('front/footer(final)');
    }

    public function formValidation() {

        $input = $this->validate([
            // Acá corregí otro error lenght
            'nombre'    => 'required|min_length[3]',
            'apellido'  => 'required|min_length[4]|max_length[25]',
            'usuario'   => 'required|min_length[3]',
            'email'     => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'pass'      => 'required|min_length[3]|max_length[10]',
        ]);

        $formModel = new usuario_Model();

        if (!$input) {
            $data['titulo'] = 'registro';
            echo view('front/head(inicio)',$data);
            echo view('front/navbar');
            echo view('back/usuario/registro',['validation' => $this->validator]);
            echo view('front/footer(final)');
        } else {
            $formModel->save([
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'email' => $this->request->getVar('email'),
                'usuario' => $this->request->getVar('usuario'),
                'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT )
            ]);

            session()->setFlashdata('success', 'Usuario registrado con exito');
            // Agregué el return
            return $this->response->redirect('/primer_proyecto/registro');
        }
    }
}

