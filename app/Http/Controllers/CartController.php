<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class CartController extends Controller
{

    public function show() {
        $is_active = 'cart';
        return view('theme.page.cart', compact('is_active'));
    }
}
