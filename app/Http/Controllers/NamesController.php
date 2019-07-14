<?php

namespace App\Http\Controllers;

use App\Models\Name;
use Illuminate\Http\Request;

class NamesController extends Controller
{
    public function index()
    {
       //$name = Name::find(1);
       $names = Name::all();
       dd($names);
    }
}
