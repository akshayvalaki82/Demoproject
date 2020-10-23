<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Admin\User;
use Illuminate\Http\Request;
use DB;
class UserController extends Controller
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
            $userss =User::where('firstname', 'LIKE', "%$keyword%")
                ->orWhere('lastname', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('password', 'LIKE', "%$keyword%")
                ->orWhere('Confirm_password', 'LIKE', "%$keyword%")
                ->orWhere('status', 'LIKE', "%$keyword%")
                ->orWhere('role', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $userss =User::latest()->paginate($perPage);
        }
        // dd(auth()->user()->id);
        // dd(auth()->id());
        return view('admin.user.index', compact('userss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $roles = DB::table('roles')
                    ->select('id','name')
                    ->get();
        $role_user=[];            
        return view('admin.user.create', compact('roles','role_user'));
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
            'firstname' => 'required|max:10|alpha',
            'lastname' => 'required|max:10|alpha',
            'email' => 'required|email',
            'password' => 'required|min:8|max:12|alpha_num',
            'Confirm_password' => 'required',
            'role'=>'required',
         ]);
        //User::create($requestData);

        $userss = new User;
        $userss->firstname = request('firstname');
        $userss->lastname = request('lastname');
        $userss->email = request('email');
        $userss->password = bcrypt(request('password'));
        $userss->status = request('status');
        $userss->save();
        //  dd(request('role'));   
        $userss->roles()->sync(request('role'));    
        // dd($userss);
        // $requestData = $request->all();
        // // dd($requestData);
        //User::create($requestData);
        

        return redirect('admin/userss')->with('flash_message', 'userss added!');
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
        $userss =User::findOrFail($id);

        return view('admin.user.show', compact('userss'));
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
        // $role_user = DB::table('role_user')->where('user_id', $id);
         $role_user = DB::table('role_user')->where('user_id', $id)->pluck('role_id')->toArray();
        //    dd($role_user);
        $roles = DB::table('roles')
                ->select('id','name')
                ->get();          
        $userss =User::findOrFail($id);
        return view('admin.user.edit', compact('userss','roles','role_user'));
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
        $request->validate([
            'firstname' => 'required|max:10|alpha',
            'lastname' => 'required|max:10|alpha',
            'email' => 'required|email',
            // 'password' => 'min:8|max:12|alpha_num',
            'Confirm_password' => 'same:password',
         ]);
        $user = user::find($id);
        $user->firstname = request('firstname');
        $user->lastname = request('lastname');
        $user->email = request('email');
        $user->status = request('status');
        if(request('password'))
        {
         $user->password =bcrypt(request('password'));
        }
        $user->save();
        $user->roles()->sync(request('role')); 

        $user =User::findOrFail($id);

        return redirect('admin/user')->with('flash_message', 'userss updated!');
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
       User::destroy($id);

        return redirect('admin/user')->with('flash_message', 'userss deleted!');
    }
}
