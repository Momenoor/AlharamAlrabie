<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['menu', 'index']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $api_key = config('services.google.maps.key');
        $place_id = config('services.google.maps.place_id');
        $url = sprintf('https://maps.googleapis.com/maps/api/place/details/json?placeid=%s&key=%s', $place_id, $api_key);
        $result = json_decode(Http::get($url)->body())->result;
        $reviews = $result->reviews;

        return view('themeOne::home', compact('reviews'));
    }

    public function menu()
    {
        $order = [
            'بلدي - Baldi',
            'فينو - Feno',
            'الحلو - Sweets',
            'المشروبات - Drinks',
        ];
        $items = Product::where([
            'type' => 'product',
            'is_menu_item' => '1',
        ])->get()->groupBy('category')->sortBy(function ($value) use ($order) {
            return array_search($value[0]->category, $order);
        });

        return view('themeOne::menu', ['product' => $items]);
    }
}
