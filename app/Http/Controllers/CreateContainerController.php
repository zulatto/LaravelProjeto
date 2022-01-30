<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brick\Math\Exception\IntegerOverflowException;
use Carbon\Carbon;

class CreateContainerController extends Controller
{
    public function Container(){
        return view('container.create');
    }

    // public function createCntr(Request $request)
    // {
    //     $request->request->add(['data_criacao' => Carbon::now('America/Sao_Paulo'), 'data_atualizacao' => Carbon::now('America/Sao_Paulo')]);
        
    //     $container = new Container($request->all());
    //     $container->save();

    //     return redirect()->route('index');
    // }
}
