<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Review;
class MainController extends Controller
{
    // main page
    public function index()
    {
		$categories = Category::with('products')->get();
		$products = Product::with('category')->where
		('recommended', '=', 1)->get();
		return view('main.index', compact ('categories', 'products'));
	}

	public function category(string $slug)
	{
		$category = Category::firstWhere('slug', $slug);
		$products = Product::where('category_id', $category->id)->get();
		return view('shop.category', compact('category', 'products'));
	}
	public function product(string $slug)
	{
		$product = Product::firstWhere('slug', $slug);
		return view('shop.product', compact( 'product'));
	}

	public function getReview(Request $request)
	{
		$review = new Review();
		$review->review = $request->comment;
		$review->user_id = $request->user;
		$review->product_id= $request->product;
		$review->save(); //сохраняет данные модели в Базу Данных


		return back();

	}
 function test()
 {

 }
}




