<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedals;

class ProductsController extends Controller
{
    public function GetDataFromCategory($category)
    {
        
        $categories = array(
            'extras' => '',
            'drums' => '',
            'sticks' => '',
            'pedals' => '',
            'double_pedals' => '',
            'drum_components' => '',
            'bags' => ''
        );

   

        $res = $category::all();

        return view('products', ['arr'=>$res]);
    }
}
