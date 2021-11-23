<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\Cymbal;
use App\Models\Pedals;
use App\Models\sticks;
use App\Models\Thing;
use SebastianBergmann\Environment\Console;
use Illuminate\Support\Facades\Storage;  
use Illuminate\Support\Facades\Route;
use phpDocumentor\Reflection\PseudoTypes\True_;

class Filters
{
    var $firm = "";
    var $size;
    var $min_price;
    var $max_price;
    var $type;

    protected function __construct($start_price, $end_price)
    {
        $min_price = $start_price;
        $max_price = $end_price;
    }

    
}

class CategoriesController extends Controller
{

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function default()
    {
        $products = Cymbal::all();
        return $products;
    }

    public function SetCategory(string $category)
    {
        $categories = CategoriesController::GetCategory();

        return view('products', ['arr'=>array_chunk($categories[$category]->toArray(), 4)]);
    }

    public function GetCategory()
    {
        $categories = array(
            3 => sticks::all(),
            4 => Cymbal::all(),
            5 => Pedals::all()
        );

        return $categories;
    }
        /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     */
    public function ApplyFilters(Request $request)
    {
       
    }

    public function AddToCard(Request $request)
    {
        $curr = request()->route()->parameters();
        $categories = CategoriesController::GetCategory();
        
        $thing = $categories[$curr['category']]->where('title', $curr['name']);
        $thing = $thing->toArray();
        $tmp = $thing[array_key_first($thing)];

        $obj = new Thing;

        $obj->title = $curr['name'];
        $obj->firm = $tmp['firm'];
        $obj->price = $curr['price'];
        $obj->category = $curr['category'];
        $obj->description = $tmp['description'];
        $obj->image = $tmp['image'];

        $obj->save();

        return view('products', ['arr'=>array_chunk($categories[$curr['category']]->toArray(), 4)]);
    }
}
