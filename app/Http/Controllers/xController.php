<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class xController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required | max:10',
            'surname' => 'required'
        ]);
    }
}
