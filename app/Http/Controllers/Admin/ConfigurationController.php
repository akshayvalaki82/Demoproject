<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Admin\Configuration as configuration;
use Illuminate\Http\Request;

class ConfigurationController extends Controller
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
        // $value = $request->session()->get('key');
        // dd($value);
        if (!empty($keyword)) {
            $configuration = configuration::where('conf_key', 'LIKE', "%$keyword%")
                ->orWhere('conf_value', 'LIKE', "%$keyword%")
                ->orWhere('created_by', 'LIKE', "%$keyword%")
                ->orWhere('modify_by', 'LIKE', "%$keyword%")
                ->orWhere('status', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $configuration = configuration::latest()->paginate($perPage);
        }

        return view('admin.configuration.index', compact('configuration'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.configuration.create');
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
        $configuration = new configuration;
        $configuration->conf_key = request('conf_key');
        $configuration->conf_value = request('conf_value');
        $configuration->status = request('status');
        $configuration->created_by = auth()->user()->id;
        $configuration->modify_by = auth()->user()->id;
        $configuration->save();
        // dd($configuration->created_by);    
        // dd(auth()->user()->id);
        
        // $requestData = $request->all();
        
        // configuration::create($requestData);

        return redirect('admin/configuration')->with('flash_message', 'configuration added!');
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
        $configuration = configuration::findOrFail($id);

        return view('admin.configuration.show', compact('configuration'));
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
        $configuration = configuration::findOrFail($id);

        return view('admin.configuration.edit', compact('configuration'));
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
        $configuration = configuration::find($id);
        $configuration->conf_key = request('conf_key');
        $configuration->conf_value = request('conf_value');
        $configuration->status = request('status');
        // $configuration->created_by = auth()->user()->id;
        $configuration->modify_by = auth()->user()->id;
        $configuration->save();
        // $requestData = $request->all();
        
        // $configuration = configuration::findOrFail($id);
        // $configuration->update($requestData);

        return redirect('admin/configuration')->with('flash_message', 'configuration updated!');
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
        configuration::destroy($id);

        return redirect('admin/configuration')->with('flash_message', 'configuration deleted!');
    }
}
