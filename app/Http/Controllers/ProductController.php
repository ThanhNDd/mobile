<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ProductController extends Controller
{

    public function getProduct($id) {
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
        return view('theme.page.product.detail', compact('isDetail', 'cat_title'));
    }
}
