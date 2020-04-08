<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    public function boys(Request $request) {
        $row = $request->row;
        $rowperpage = $request->rowperpage;
        $products = $this->getProducts($row, $rowperpage, 0);
        return response($products, Response::HTTP_OK);
    }

    public function girls(Request $request) {
        $row = $request->row;
        $rowperpage = $request->rowperpage;
        $products = $this->getProducts($row, $rowperpage, 1);
        return response($products, Response::HTTP_OK);
    }

    private function getProducts($row, $rowperpage, $type) {
        $products = DB::table('smi_products')->where([['status', '=',0],["social_publish->website", "=", 1],['type', '=',$type]])
            ->orderBy('created_at', 'desc')
            ->offset($row)
            ->limit($rowperpage)
            ->get()->jsonSerialize();
        return $products;
    }

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
