<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index() {
        $products = DB::table('smi_products')->where('status', 0)
            ->orderBy('id', 'desc')
            ->take(6)
            ->get()->jsonSerialize();
        return response($products, Response::HTTP_OK);
    }

    public function find_all() {
        $products = DB::table('smi_products')->where('status', 0)
            ->orderBy('id', 'desc')
            ->take(10)
            ->get();
        return view('theme.page.product.home', compact('products'));
    }

    public function getProduct($id) {
        $product = DB::table('smi_products')->where('id', $id)->first();
        $isDetail = "isDetail";
        $cat_title = '';
        $cat_id = 1;
        if($cat_id == 1) {
            $cat_title = 'Thời trang bé gái';
        } else if($cat_id == 2) {
            $cat_title = 'Thời trang bé trai';
        } else if($cat_id == 3) {
            $cat_title = 'Giày dép';
        } else if($cat_id == 4) {
            $cat_title = 'Phụ kiện';
        }
        return view('theme.page.product.detail', compact('isDetail', 'cat_title', 'product'));
    }
}
