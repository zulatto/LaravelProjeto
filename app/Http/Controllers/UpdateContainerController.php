<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brick\Math\Exception\IntegerOverflowException;
use Carbon\Carbon;

class UpdateContainerController extends Controller
{
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
}
