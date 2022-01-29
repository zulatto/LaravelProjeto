<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brick\Math\Exception\IntegerOverflowException;
use Carbon\Carbon;

class ContainerController extends Controller
{
    public function index()
    {
        return view('container.index', ['containers' => Container::all()]);
    }

    public function create()
    {
        return view('container.create');
    }

    // public function createCntr(Request $request)
    // {
    //     $request->request->add(['data_criacao' => Carbon::now('America/Sao_Paulo'), 'data_atualizacao' => Carbon::now('America/Sao_Paulo')]);
        
    //     $container = new Container($request->all());
    //     $container->save();

    //     return redirect()->route('index');
    // }

    public function update(int $id)
    {
        return view('container.edit', ['container' => Container::findOrFail($id)]);
    }

    // public function updateCntr(Request $request, int $id)
    // {
    //     $request->request->add(['data_atualizacao' => Carbon::now('America/Sao_Paulo')]);

    //     Container::findOrFail($id)->update($request->all());
        
    //     return redirect()->route('index');
    // }

    public function delete(int $id)
    {
        Container::destroy($id);
        return redirect()->route('index');
    }
}
