<?php

namespace App\Http\Controllers;

use App\Models\Testimonials;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.dashboard.testimonials.index', [
            'allTestimonials' => Testimonials::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashboard.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['thumbnail'] = $request->file('thumbnail')->storeAs('testimonials', Str::slug($request->name) . '.jpg', 'public');
        Testimonials::create($data);
        return redirect()->route('dashboard.testimonials');
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
        return view('pages.dashboard.testimonials.edit', [
            'testimoni' => Testimonials::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $data = $request->all();
        if (!empty($data['thumbnail'])) {
            $data['thumbnail'] = $request->file('thumbnail')->storeAs('testimonials', Str::slug($request->name) . '.jpg', 'public');
        } else {
            unset($data['testimonials']);
        }
        Testimonials::find($id)->update($data);
        return redirect()->route('dashboard.testimonials');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Testimonials::find($id)->delete();
        return redirect()->back();
    }
}
