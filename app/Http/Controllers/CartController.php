<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class CartController extends Controller
{

    public function show()
    {
        $is_active = 'cart';
        return view('theme.page.cart', compact('is_active'));
    }

    public function index(Request $request) {
        $cart = '';
//        $request->session()->forget('cart');
        if($request->session()->has("cart")) {
            $carts = $request->session()->get("cart");
            $cart = count($carts);
        }
        return $cart;
    }

    public function store(Request $request)
    {
        $body = $request->body;
        $body = $body[0];
        $carts = array();
        if($request->session()->has("cart")) {
            $carts = $request->session()->get("cart");
            $is_exists = false;
            foreach ($carts as $key => $c) {
                if($c["id"] == $body["id"]
                    && $c["color"] == $body["color"]
                    && $c["size"] == $body["size"]) {
                    $cart = $carts[$key];
                    $cart["qty"] = $cart["qty"] + 1;
                    $carts[$key] = $cart;
                    $is_exists = true;
                }
            }
            if(!$is_exists) {
                $cart = array();
                $cart["id"] = $body["id"];
                $cart["name"] = $body["name"];
                $cart["price"] = $body["price"];
                $cart["image"] = $body["image"];
                $cart["color"] = $body["color"];
                $cart["size"] = $body["size"];
                $cart["qty"] = 1;
                array_push($carts, $cart);
            }
            $request->session()->forget('cart');
        } else {
            $cart = array();
            $cart["id"] = $body["id"];
            $cart["name"] = $body["name"];
            $cart["price"] = $body["price"];
            $cart["image"] = $body["image"];
            $cart["color"] = $body["color"];
            $cart["size"] = $body["size"];
            $cart["qty"] = 1;
            array_push($carts, $cart);
        }
        $request->session()->put('cart', $carts);
        return response()->json($carts);
    }

}
