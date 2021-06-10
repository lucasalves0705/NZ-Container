<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Category;
use App\Models\Event;
use App\Models\Image;
use App\Models\Product;
use App\Models\Status;
use App\Repositories\Contracts\ProductRepositoryInterface;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
//    protected $repository;
//
//    public function __construct(ProductRepositoryInterface $repository)
//    {
//        $this->repository = $repository;
//    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $products = Product::query()->orderBy('name')->paginate(4);
        $categories = Category::all();

        return view('products.index', compact('products', 'categories'));
    }

    public function productCategory(Category $category)
    {
        DB::enableQueryLog();
        $products = $category->products()->paginate(4);
        $categoryActive = $category->description;

        $categories = Category::all();

        return view('products.index', compact('products', 'categories', 'categoryActive'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function create()
    {
        $categories = Category::all();
        $events = Event::all();

        return view('products.form', compact('categories', 'events'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        if($request->get('id')){
            $product = Product::query()->find($request->id);
        }else {
            $product = new Product();
        }
        $product->fill($request->all());

        $product->status_id = $request->has('status_id')?1:2;

        $product->save();

        if($request->hasFile('image')){
            $imageName = $request->file('image')->store('public/products');

            if($imageName != false){
                $imageName = str_replace('public/', '', $imageName);

                $image = new Image();
                $image->path = $imageName;
                $image->product_id = $product->id;

                $image->save();
            }
        }

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        $events = Event::all();

        return view('products.form', compact('product', 'categories', 'events'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('product.index');
    }
}
