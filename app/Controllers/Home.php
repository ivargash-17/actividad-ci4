<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'titulo'  => 'Mi primer proyecto con CodeIgniter 4',
            'mensaje' => 'Hola, esta vista fue renderizada con View Renderer.',
            'curso'   => 'Programación 2',
        ];

        return view('home_view', $data);
    }
}
