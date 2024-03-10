<?php

namespace App\Http\Controllers;

use App\Models\Packages;
use App\Models\Services;
use App\Models\Testimonials;
use App\Models\Tickets;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use PHPUnit\Framework\Attributes\Ticket;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home.index', [
            'allServices' => Services::all(),
            'allPackages' => Packages::all(),
            'allTestimonials' => Testimonials::all()
        ]);
    }

    public function about()
    {
        return view('pages.home.about',[
            // 'allImg' => Packages::all(),
            'img1' => Packages::where('id',1)->get(),
            'img2' => Packages::where('id',2)->get()
        ]);
    }

    public function packages()
    {
        return view('pages.home.packages', [
            'allPackages' => Packages::all()
        ]);
    }
    public function package($id)
    {
        return view('pages.home.package', [
            'package' => Packages::find($id)
        ]);
    }

    public function order($id)
    {
        return view('pages.home.order', [
            'package' => Packages::find($id)
        ]);
    }

    public function store_order(Request $request){
        $data = $request->all();
        $data['total'] = $data['price'] * $data['people'];
        $data['slug'] = Str::slug($data['name'].'-'.date('d-m-Y H:i:s'));
        // dd($data);
        Tickets::create($data);
        return redirect()->route('ticket',$data['slug']);
        
    }

    public function ticket($slug){
        // dd(Tickets::where('slug',$slug)->get());
        $data = Tickets::where('slug' , $slug)->get();
        return view('pages.home.ticket',[
            'tickets' => $data
        ]);
    }

    public function gallery(){
        return view('pages.home.gallery',[
            'allPackages' => Packages::all()
        ]);
    }

}
