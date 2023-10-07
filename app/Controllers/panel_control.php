<?php
namespace App\Controllers;
Use CodeIgniter\Controller;

class panel_control extends BaseController
{
    public function index()
    {
        $session = session();
        $nombre=$session->get('usuario');
        $perfil=$session->get('perfil_id');

        $data['perfil_id']=$perfil;

        $data['titulo']='panel del usuario';
        echo view('front/head(inicio)',$data);
        echo view('front/navbar');
        echo view('back/usuario/usuario_logueado');
        echo view('front/footer(final)');
    }
}