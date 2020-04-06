<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class SaleController extends Controller
{

    public function index() {
        $products = DB::table('smi_products')
            ->where([['status', 0],['social_publish->website',1]])
            ->orderBy('discount', 'desc')
            ->orderBy('id', 'desc')
            ->take(10)
            ->get()->jsonSerialize();
        return response($products, Response::HTTP_OK);
    }

    public function get_all_products() {
        $is_active = 'sales';
        return view('theme.page.sales', compact('is_active'));
    }
}
