<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function show() {
        $products = DB::table('smi_products')->where('status', 0)
            ->orderBy('id', 'desc')
            ->take(10)
            ->get();
        $is_active = 'home';
        return view('theme.page.home', compact('is_active', 'products'));
    }
}
