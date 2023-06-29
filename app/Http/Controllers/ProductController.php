<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $title = "Viet Phan 1";
        // return view("product.index", compact("title"));
        
        // $hao_hao = "Hảo hảo mì tôm chua cay";
        // return view("product.index")->with("title", $hao_hao);

        $my_games = [
            "1" => "League Of Legends",
            "2" => "Fifa 4"
        ];

        return view("product.index", [
            "my_games" => $my_games
        ]);
    }

    public function detail($productName) {
        // return "Product_id = " . $id;
        $product = [
            'vietphan' => "Viet Phan",
            "xaml" => "Xam l"
        ];
        return view("product.index", [
            'products' => $product[$productName]
            ]);
    }
}
