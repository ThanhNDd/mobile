<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class BestSellerController extends Controller
{

    public function index() {
        $products = DB::select(DB::raw('select a.id, a.name, a.image, a.retail, b.sku from smi_products as a inner join
                    (select b.product_id, b.sku from smi_orders a left join smi_order_detail b on a.id = b.order_id order by a.created_date desc limit 6) as b
                    on a.id = b.product_id where a.status = 0 limit 6'));
        return response($products, Response::HTTP_OK);
    }

    public function get_all_products() {
        $is_active = 'sales';
        return view('theme.page.sales', compact('is_active'));
    }
}
