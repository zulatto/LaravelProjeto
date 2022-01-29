<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brick\Math\Exception\IntegerOverflowException;

class ContainerController extends Controller
{
    public function Container(){
        echo 'Olá';
    }

    // public function index()
    // {
    //     return view('container.index', ['containers' => Container::all()]);
    // }
}
