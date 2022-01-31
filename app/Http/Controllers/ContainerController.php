<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brick\Math\Exception\IntegerOverflowException;
use App\Models\Container;

class ContainerController extends Controller
{
    public function index()
    {
        return view('container.index', ['containers' => Container::all()]);
    }

    public function create(){
        return view('container.create');
    }

    public function store(Request $request )
    {
        Container::create($request->all());

        return redirect()->route('container.index')
        ->with('success','Container inserido com sucesso.');
    }


    public function update(int $id)
    {
        return view('container.edit', ['container' => Container::findOrFail($id)]);
    }

    public function updateCntr(Request $request, int $id)
    {
        Container::findOrFail($id)->update($request->all());
        
        return redirect()->route('container.index');
    }

    public function destroy(int $id)
    {
        Container::destroy($id);
        return redirect()->route('container.index');
    }
}
