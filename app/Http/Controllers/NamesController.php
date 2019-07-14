<?php

namespace App\Http\Controllers;

use App\Models\Name;
use Illuminate\Http\Request;
use App\Http\Requests\NameRequest;

class NamesController extends Controller
{
    public function index()
    {
       //$name = Name::find(1);
       $names = Name::all();
       return view('names', compact('names'));
    }

    /*public function all()
    {
        $names = Name::all();
        return view('names', compact('names'));
    }*/

    public function sendForm(NameRequest $request)
    {
        Name::create($request->all());
        return redirect('/names');
    }
}
