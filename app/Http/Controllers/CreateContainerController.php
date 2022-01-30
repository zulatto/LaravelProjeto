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

    // public function store(Request $request)
    // {
    //     CreateContainer::create($request->all());

    //     return redirect()->route('container.index')
    //                     ->with('success','Container inserido com sucesso.');
    // }

}
