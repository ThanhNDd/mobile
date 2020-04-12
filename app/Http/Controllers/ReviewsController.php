<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use App\Mail\SendEmailReviews;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ReviewsController extends Controller
{

    public function getAllReviews($product_id) {
        $product = DB::table('smi_products')->where('id', $product_id)->first();
        $reviews = DB::table('smi_reviews')->where('product_id', $product_id)
            ->orderBy('created_date', 'desc')
            ->get()->jsonSerialize();
        $avg = DB::table("smi_reviews")->selectRaw('CAST(AVG(rating) AS DECIMAL(10,1)) as rating_avg')->where('product_id', $product_id)->get();
        $rating_avg = $avg[0]->rating_avg;
        return view('theme.page.product.reviews', compact('product', 'reviews', 'rating_avg'));
    }

    public function all($product_id) {
        $reviews = DB::table('smi_reviews')->where([['product_id', '=', $product_id]])
            ->orderBy('created_date', 'desc')
            ->get()->jsonSerialize();
        return response($reviews, Response::HTTP_OK);
    }

    public function show($product_id) {
        $reviews = DB::table('smi_reviews')->where([['product_id', '=', $product_id]])
            ->orderBy('created_date', 'desc')
            ->take(3)
            ->get()->jsonSerialize();
        return response($reviews, Response::HTTP_OK);
    }

    public function store(Request $request)
    {
        $body = $request->body;
        $data = $body[0];
        DB::beginTransaction();
        try {
            if (!empty($data['name']) &&
                !empty($data['phone']) &&
                !empty($data['content']) &&
                !empty($data['rating']) &&
                !empty($data['product_id'])) {

                DB::table('smi_reviews')->insert(
                    [
                        'name' => $data['name'],
                        'phone' => $data['phone'],
                        'email' => $data['email'],
                        'content' => $data['content'],
                        'rating' => (integer)$data['rating'],
                        'product_id' => (integer)$data['product_id']
                    ]
                );

//                Mail::to('thanhit228@gmail.com')->send(new SendEmailReviews());

                DB::commit();
                return response()->json(201);
            } else {
                throw new Exception ("Invalid input data");
            }
        } catch (Exception $e) {
            DB::rollback();
            return response()->json($e);
        }
    }
}
