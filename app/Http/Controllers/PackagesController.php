<?php

namespace App\Http\Controllers;

use App\Models\PackageGallery;
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
        return view('pages.dashboard.packages.index', [
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
        Packages::create($data);

        $package = Packages::orderBy('id', 'DESC')->first();

        foreach ($data['image'] as $key => $image) {
            $image_file = $image->storeAs('packages', Str::slug('image-' . $request->title) . '-' . ++$key . '.jpg', 'public');
            PackageGallery::create([
                'package_id' => $package->id,
                'image' => $image_file
            ]);
        }
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
    public function edit($id)
    {
        return view('pages.dashboard.packages.edit', [
            'package' => Packages::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        if (!empty($data['image'])) {
            foreach ($data['image'] as $key => $image) {
                $image_file = $image->storeAs('packages', Str::slug('image-' . $request->title) . '-' . ++$key . '.jpg', 'public');
                PackageGallery::create([
                    'package_id' => $id,
                    'image' => $image_file
                ]);
            }
        }
        Packages::find($id)->update($data);
        return redirect()->route('dashboard.packages');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Packages::find($id)->delete();
        return redirect()->back();
    }
}
