<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{

    public function checkout(Request $request) {
        $body = $request->body;
        var_dump($body);
        $carts = null;
        if($request->session()->has("cart")) {
            $carts = $request->session()->get("cart");
            var_dump($carts);
        }
        return response()->json($carts);
    }

}
