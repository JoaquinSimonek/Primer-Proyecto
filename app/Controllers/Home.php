<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo']='pagina principal';
        echo view('front/head(inicio)',$data);
        echo view('front/navbar');
        echo view('front/principal');
        echo view('front/footer(final)');
    }

    public function quiene_somos()
    {
        $data['titulo']='quienes somos';
        echo view('front/head(inicio)',$data);
        echo view('front/navbar');
        echo view('front/quiene_somos');
        echo view('front/footer(final)');
    }
    public function acerca()
    {
        $data['titulo']='acerca de';
        echo view('front/head(inicio)',$data);
        echo view('front/navbar');
        echo view('front/acerca');
        echo view('front/footer(final)');
    }

    public function logi()
    {
        $data['titulo']='login';
        echo view('front/head(inicio)',$data);
        echo view('front/navbar');
        echo view('back/usuario/login');
        echo view('front/footer(final)');
    }
    public function reg()
    {
        $data['titulo']='registrarse';
        echo view('front/head(inicio)',$data);
        echo view('front/navbar');
        echo view('back/usuario/registro');
        echo view('front/footer(final)');
    }
}

