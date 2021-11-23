<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thing;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\View as Supp;

class CardController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }

    public function GetCount()
    {
        $count = count(Thing::all()->toArray());
        return $count;
    }

    public  function Show()
    {
        $my_things = Thing::all()->toArray();

        $sum = 0;

        foreach($my_things as $thing){
            $sum += $thing['price'];
        }

        return view('card', ['arr'=>array_chunk($my_things, 2), 'sum'=>$sum]);
    }
}
