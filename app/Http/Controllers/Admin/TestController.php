<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function user($userId)
    {
        dump($userId);
    }

    public function many($main, $second)
    {
        return view('users', compact('main'))->withSecondUser($second);
    }
}
