<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brick\Math\Exception\IntegerOverflowException;

class ContainerController extends Controller
{
    public function Container(){
        return view('container.index');
    }

    // public function index()
    // {
    //     return view('container.index', ['containers' => Container::all()]);
    // }
}
