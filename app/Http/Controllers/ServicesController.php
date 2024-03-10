<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.dashboard.services.index',[
            'allServices' => Services::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashboard.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['thumbnail'] = $request->file('thumbnail')->storeAs('services',Str::slug($request->title).'.jpg','public');
        Services::create($data);
        return redirect()->route('dashboard.services');        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        return view('pages.dashboard.services.edit',[
            'service' => Services::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $data =$request->all();
        if(!empty($data['thumbnail'])){

            $data['thumbnail'] = $request->file('thumbnail')->storeAs('services',Str::slug($request->title).'.jpg','public');
        }else{
            unset($data['thumbnail']);
        }
        Services::find($id)->update($data);
        return redirect()->route('dashboard.services');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        Services::find($id)->delete();
        return redirect()->back();
    }
}
