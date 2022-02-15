<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $test = array("a" => "Volvo", "b" => "BMW", "c" => "Toyota");
        return array_reverse($test);
    }
}
