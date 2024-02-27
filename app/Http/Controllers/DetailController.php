<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function show(Request $request, Product $product){
        $reqHero = false;
        if($product->name == "Joki Rank S-13" || $product->name == "Joki Competitive"){
            $reqHero = true;
        }

        $jasa = $product->jasa;
        $riviews = $product->riview;
        return view('detail.index',[
            'title' => $product->name,
            'product' => $product,
            'jasas' => $jasa,
            'reqHero' => $reqHero,
            'riviews' => $riviews
        ]);
    }
}
