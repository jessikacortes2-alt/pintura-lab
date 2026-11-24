<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {
        $nombreProyecto = 'Proyecto 1';

        $descripcion = 'App desarrollada con Laravel para organizar las categorias de productos.';

        $modulos = [
            'Categorías',
            'Productos',
            'Usuarios'
        ];

        return view('inicio', [
            'nombreProyecto' => $nombreProyecto,
            'descripcion' => $descripcion,
            'modulos' => $modulos
        ]);
    }
}
