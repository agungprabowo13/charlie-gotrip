<?php

namespace App\Http\Controllers;

use App\Models\Packages;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.dashboard.packages.index',[
            'allPackages' => Packages::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashboard.packages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['thumbnail'] = $request->file('thumbnail')->storeAs('packages',Str::slug($request->title).'.jpg','public');
        $data['banner'] = $request->file('banner')->storeAs('packages',Str::slug('article-'.$request->title).'.jpg','public');
        Packages::create($data);
        return redirect()->route('dashboard.packages');
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
        return view('pages.dashboard.packages.edit',[
            'package' => Packages::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        if(!empty($data['thumbnail'])){
            $data['thumbnail'] = $request->file('thumbnail')->storeAs('packages',Str::slug($request->title).'.jpg','public');
        }else{
            unset($data['thumbnail']);
        }
        if(!empty($data['banner'])){
            $data['banner'] = $request->file('banner')->storeAs('packages',Str::slug('article-'.$request->title).'.jpg','public');
        }else{
            unset($data['banner']);
        }
        Packages::find($id)->update($data);
        return redirect()->route('dashboard.packages');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        Packages::find($id)->delete();
        return redirect()->back();
    }
}
