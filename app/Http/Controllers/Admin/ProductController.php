<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Product;
use App\Product_Images;
use Illuminate\Http\Request;
use carbon\carbon;

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
        $product_image_name = request('product_image_name');
        // dd($product_image_name);
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
        $images = [];
        if($request->hasfile('product_image_name'))
        {
            foreach($product_image_name as $product_image_names) 
            {
                $extension = $product_image_names->getClientOriginalExtension();
                $filename = time().'.'.$extension;
                // dd($filename);
                $product_image_names->move('admin/product_image/',$filename);

                $images[] =['product_id' => $product->id,
                            'image_name' => $filename,
                            'created_by' =>  auth()->user()->id,
                            'updated_by' =>  auth()->user()->id,
                            'created_at' =>  Carbon::now(),
                            'updated_at' =>  Carbon::now()
                           ];
            }
            if(!empty($images)){
                Product_Images::insert($images);
            }
        }

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
        $product_images_name = Product_Images::where('product_id',$id)->get();
        // dd($product_images_name);
        return view('admin.product.edit', compact('product','product_images_name'));
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
        // dd($request->all());
        // dd(request('product_imageoldid'));
       if(!empty(request('product_imageoldid')))
        {
           Product_Images::whereNotIn('id',request('product_imageoldid'))->where('product_id',$id)->delete(); 
            foreach(request('product_imageoldid') as $key=>$value)
            {
                //   dd($value);
                if(isset($request->product_image_name[$key]))
                {
                    $product_image= Product_Images::find($value);
                    $path = public_path()."/admin/product_image/".$product_image->image_name;
                    // for deleteing the old image
                    if(file_exists($path))
                    {
                        unlink($path);
                    }
                    $extension = $request->product_image_name[$key]->getClientOriginalExtension();
                    $filename = time().'.'.$extension;
                    // dd($filename);
                    $request->product_image_name[$key]->move('admin/product_image/',$filename);
                    $product_image->image_name = $filename;
                    $product_image->save();
                    // dd($request->product_image_name[$key]);
                    // unset($request->product_image_name[$key]);
                    
                }
            }
        }
        if(!empty($request->product_image_name))
        {
            foreach($request->product_image_name as $k=>$product_image_names) 
            {
                if(!array_key_exists($k,request('product_imageoldid')))
                {   $extension = $product_image_names->getClientOriginalExtension();
                    $filename = time().'.'.$extension;
                    // dd($filename);
                    $product_image_names->move('admin/product_image/',$filename);

                    $images[] =['product_id' => $id,
                                'image_name' => $filename,
                                'created_by' =>  auth()->user()->id,
                                'updated_by' =>  auth()->user()->id,
                                'created_at' =>  Carbon::now(),
                                'updated_at' =>  Carbon::now()
                            ];
                    }           
            }
            if(!empty($images)){
                Product_Images::insert($images);
            }
        }
        // $requestData = $request->all();
        // $product = Product::findOrFail($id);
        // $product->update($requestData);

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
