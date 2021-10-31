<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use SebastianBergmann\Environment\Console;

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

    public function CreateProductCard(string $category)
    {
        $result[] = DB::table($category)->select('select (image, title, price, is_existing)');

        $products_cards = array(array(
            "type" => $category,
            "data" => ""
        ));

        if(count($result) != 0)
        {
            for ($i = 0; $i < count($result); $i++) {
                $products_cards[$i]["data"] = $result[$i];
            }
        }

        return $products_cards;
    }

    public function SetDefault()
    {
        $products = $this->CreateProductCard("cymbals");
        
        return view('products', ['$items' => $products]);
    }

    public function SetCategory(string $category)
    {
        $result[] = DB::select('select * from (table)', [$category]);
    }

    public function AddFilters()
    {

    }
}
