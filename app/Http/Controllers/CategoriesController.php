<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class CategoriesController extends Controller
{

    public function categories() {
        $is_active = 'categories';
        return view('theme.page.category.categories', compact('is_active'));
    }

    function getGirls() {
        $cat_title = 'Thời trang bé gái';
        return $this->getCategory($cat_title);
    }
    function getBoys() {
        $cat_title = 'Thời trang bé trai';
        return $this->getCategory($cat_title);
    }
    function getShoes() {
        $cat_title = 'Giày dép';
        return $this->getCategory($cat_title);
    }
    function getAccessories() {
        $cat_title = 'Phụ kiện';
        return $this->getCategory($cat_title);
    }
    function getCategory($cat_title) {
        return view('theme.page.category.category', compact('cat_title'));
    }
}
