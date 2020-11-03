<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin\Coupon ;
use DB;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coupon = DB::select('CALL GetAllCouponData');
        // $coupon = Coupon::all();
        // dd($coupon);
         return view('admin.coupon.index',compact('coupon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.coupon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Coupon = new Coupon;
        $Coupon->code = request('code');
        $Coupon->percent_off = request('percent_off');
        $Coupon->no_of_uses = request('no_of_uses');
        $Coupon->created_by = auth()-> user()->id;
        $Coupon->updated_by = auth()-> user()->id;
        // dd(request('code'));
        $Coupon->save();
        return redirect('admin/coupon');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cid = $id;
        $coupon = DB::select('call GetCouponDataId(?)',[$id]);
        //  dd($coupon);
        // $coupon = Coupon::findorfail($id);
        return view('admin/coupon/show',compact('coupon'));   
        // dd($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($id);
        $coupon = Coupon::findorfail($id);
        return view('admin/coupon/edit',compact('coupon'));  
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($id);
        $Coupon = Coupon:: find($id);
        $Coupon->code = request('code');
        $Coupon->percent_off = request('percent_off');
        $Coupon->no_of_uses = request('no_of_uses');
        $Coupon->created_by = auth()-> user()->id;
        $Coupon->updated_by = auth()-> user()->id;
        // dd(request('code'));
        $Coupon->save();
        return redirect('admin/coupon');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Coupon::destroy($id);

        return redirect('admin/coupon')->with('flash_message', 'configuration deleted!');
    }
}
