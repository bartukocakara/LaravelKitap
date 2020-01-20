<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DenemeController extends Controller
{
    public function index($name = null, $surname = null)
    {
        echo $name." ".$surname;
    }

    public function create()
    {   
        echo "Deneme create";
    }
}
