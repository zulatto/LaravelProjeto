<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brick\Math\Exception\IntegerOverflowException;

class DeleteContainerController extends Controller
{
    public function delete(int $id)
    {
        Container::destroy($id);
        return redirect()->route('index');
    }
}
