<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $product = Product::where('name', 'LIKE', "%$keyword%")
                ->orWhere('sku', 'LIKE', "%$keyword%")
                ->orWhere('short_description', 'LIKE', "%$keyword%")
                ->orWhere('long_description', 'LIKE', "%$keyword%")
                ->orWhere('price', 'LIKE', "%$keyword%")
                ->orWhere('special_price', 'LIKE', "%$keyword%")
                ->orWhere('special_price_from', 'LIKE', "%$keyword%")
                ->orWhere('special_price_to', 'LIKE', "%$keyword%")
                ->orWhere('quanity', 'LIKE', "%$keyword%")
                ->orWhere('meta_title', 'LIKE', "%$keyword%")
                ->orWhere('meta_description', 'LIKE', "%$keyword%")
                ->orWhere('meta_keywords', 'LIKE', "%$keyword%")
                ->orWhere('created_by', 'LIKE', "%$keyword%")
                ->orWhere('updated_by', 'LIKE', "%$keyword%")
                ->orWhere('status', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $product = Product::latest()->paginate($perPage);
        }

        return view('admin.product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $product = new product;
        $product->name = request('name');
        $product->sku = request('sku');
        $product->short_description = request('short_description');
        $product->long_description = request('long_description');
        $product->price = request('price');
        $product->special_price = request('special_price');
        $product->special_price_from = request('special_price_from');
        $product->special_price_to = request('special_price_to');
        $product->quanity = request('quanity');
        $product->meta_title = request('meta_title');
        $product->meta_description = request('meta_description');
        $product->meta_keywords = request('meta_keywords');
        $product->created_by = auth()->user()->id;
        $product->updated_by = auth()->user()->id;
        $product->status = request('status');
        $product->save();

        // $requestData = $request->all();
        
        // Product::create($requestData);

        return redirect('admin/product')->with('flash_message', 'Product added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('admin.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view('admin.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $product = Product ::find($id);
        // dd($product);
        $product->name = request('name');
        $product->sku = request('sku');
        $product->short_description = request('short_description');
        $product->long_description = request('long_description');
        $product->price = request('price');
        $product->special_price = request('special_price');
        $product->special_price_from = request('special_price_from');
        $product->special_price_to = request('special_price_to');
        $product->quanity = request('quanity');
        $product->meta_title = request('meta_title');
        $product->meta_description = request('meta_description');
        $product->meta_keywords = request('meta_keywords');
        $product->created_by = auth()->user()->id;
        $product->updated_by = auth()->user()->id;
        $product->status = request('status');
        $product->save();
        
        $requestData = $request->all();
        $product = Product::findOrFail($id);
        $product->update($requestData);

        return redirect('admin/product')->with('flash_message', 'Product updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Product::destroy($id);

        return redirect('admin/product')->with('flash_message', 'Product deleted!');
    }
}
