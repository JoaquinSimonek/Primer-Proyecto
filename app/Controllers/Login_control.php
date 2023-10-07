<?php
namespace App\Controllers;
Use CodeIgniter\Controller;
Use App\Models\usuario_Model;

class Login_control extends BaseController
{
    public function index()
    {
        helper(['form','url']);

        $data['titulo']='login';
        echo view('front/head(inicio)',$data);
        echo view('front/navbar');
        echo view('back/usuario/login');
        echo view('front/footer(final)');
    }

    public function auth()
    {
        $session = session();
        $model = new usuario_Model();

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('pass');

        $data = $model->where('email', $email)->first();
        if($data){
            $pass = $data['pass'];
            $ba = $data['baja'];
            if($ba == 'SI'){
                $session->setFlashdata('msg','usuario dado de baja');
                return redirect()->to('/primer_proyecto/login');
            }

            $verify_pass = password_verify($password, $pass);

            if($verify_pass){
                $ses_data = [
                    'id_usuario' => $data['id_usuario'],
                    'nombre' => $data['nombre'],
                    'apellido' => $data['apellido'],
                    'email' => $data['email'],
                    'usuario' => $data['usuario'],
                    'perfil_id' => $data['perfil_id'],
                    'logged_in' => TRUE,
                ];

                $session->set($ses_data);

                session()->setFlashdata('msg', 'Bienvenido!');
                return $this->response->redirect('/primer_proyecto//panel');
                

            }else{
                $session->setFlashdata('msg', 'Password Inconrrecta');
                return $this->response->redirect('/primer_proyecto/login');
            }
        }else{
            $session->setFlashdata('msg', 'No existe mail o es incorrecto');
            return $this->response->redirect('/primer_proyecto/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}
