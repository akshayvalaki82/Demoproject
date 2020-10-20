<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Admin\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
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
            $banner = Banner::where('banner_path', 'LIKE', "%$keyword%")
                ->orWhere('created_by', 'LIKE', "%$keyword%")
                ->orWhere('updated_by', 'LIKE', "%$keyword%")
                ->orWhere('status', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $banner = Banner::latest()->paginate($perPage);
        }

        return view('admin.banner.index', compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.banner.create');
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
        $request->validate([
            'banner_path'=>'required|image',
            'status'=>'required',
        ]);
        $banner = new banner;
        if($request->hasfile('banner_path'))
         {
             $file=$request->file('banner_path');
             $extension = $file->getClientOriginalExtension();
             $filename = time().'.'.$extension;
            //  dd($filename);
             $file->move('admin/banner_img/',$filename);
             $banner->banner_path = $filename;
            //  dd($banner->banner_path);
         }    
        // $banner->banner_path = request('banner_path');
        // dd($banner->banner_path);
        $banner->created_by = auth()->user()->id;
        $banner->updated_by = auth()->user()->id;
        $banner->status = request('status');
        $banner->save();
        // dd($banner->banner_path);
        // $requestData = $request->all();
        
        // Banner::create($requestData);

        return redirect('admin/banner')->with('flash_message', 'Banner added!');
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
        $banner = Banner::findOrFail($id);

        return view('admin.banner.show', compact('banner'));
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
        $banner = Banner::findOrFail($id);

        return view('admin.banner.edit', compact('banner'));
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
        // $request->validate([
        //     'banner_path'=>'required|image',
        // ]);
        $banner = Banner::find($id);
        if($request->hasfile('banner_path'))
         {
             $file=$request->file('banner_path');
             $extension = $file->getClientOriginalExtension();
             $filename = time().'.'.$extension;
            //  dd($filename);
             $file->move('admin/banner_img/',$filename);
             $banner->banner_path = $filename;
            //  dd($banner->banner_path);
         }   
        // $banner->created_by = auth()->user()->id;
        $banner->updated_by = auth()->user()->id;
        $banner->status = request('status');
        $banner->save();
        // $requestData = $request->all();
        
        // $banner = Banner::findOrFail($id);
        // $banner->update($requestData);

        return redirect('admin/banner')->with('flash_message', 'Banner updated!');
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
        Banner::destroy($id);

        return redirect('admin/banner')->with('flash_message', 'Banner deleted!');
    }
}
