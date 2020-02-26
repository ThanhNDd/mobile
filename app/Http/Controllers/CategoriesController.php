<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class CategoriesController extends Controller
{

    public function categories() {
        $title = "allCategory";
        return view('theme.page.product.detail', compact('title'));
    }

    function getGirls() {
        return $this->getCategory(1);
    }
    function getBoys() {
        return $this->getCategory(2);
    }
    function getShoes() {
        return $this->getCategory(3);
    }
    function getAccessories() {
        return $this->getCategory(4);
    }
    function getCategory($id) {
        $cat_title = '';
        if($id == 1) {
            $cat_title = 'Thời trang bé gái';
        } else if($id == 2) {
            $cat_title = 'Thời trang bé trai';
        } else if($id == 3) {
            $cat_title = 'Giày dép';
        } else if($id == 4) {
            $cat_title = 'Phụ kiện';
        }
        return view('theme.page.category.category', compact('cat_title'));
    }
}