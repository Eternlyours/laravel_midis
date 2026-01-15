<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showIndex() {
        return view('home');
    }

    public function showArray() {
        $array = [
            ['id'=>1, 'title'=> 'product 1', 'price'=>500, 'path'=>'resources/images/product1.png'],
            ['id'=>2, 'title'=> 'product 2', 'price'=>5100, 'path'=>'resources/images/product2.png'],
        ];

        return view('array', compact('array'));
    }
}
