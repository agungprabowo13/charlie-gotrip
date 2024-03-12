<x-home-layout>
    {{-- Start Hero --}}
    <div class="bg-[#FBFBFB]">
        <div class="hero min-h-screen max-w-6xl mx-auto px-2 md:px-0">
            <div class="hero-content flex-col lg:flex-row gap-20">
                <img src="{{ url('dist/images/header-image.png') }}" class="w-3/4" />
                <div>
                    <p class="text-teal-400 font-medium mb-5">Book Now</p>
                    <h1 class="text-5xl font-bold text-slate-700">Let’s Enjoy Your trip with goTrip</h1>
                    <p class="py-6 text-slate-500">Thinking of taking a break from every day’s busy life? Planning to go
                        out of the country with your loved ones to have some fun and quality time in a const-effective
                        way?</p>
                    <button class="btn bg-blue-500 text-white">Book Now</button>
                </div>
            </div>
        </div>
    </div>
    {{-- End Hero --}}
    {{-- Start Services --}}
    <div class="bg-white py-24 px-2">
        <div class="max-w-6xl mx-auto">
            <div class="text-center">
                <p class="text-teal-400 font-medium mb-3">3 steps for the perfect trip</p>
                <h2 class="text-3xl font-semibold text-slate-500  mb-2">Find Travel Perfection</h2>
                <p class="max-w-2xl mx-auto text-slate-500 px-8 md:px-0">Naturally head of the class when it comes to luxury travel
                    planning because we do more
                    homework than anyone else.</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mt-14 px-10 md:px-0">
                @foreach ($allServices as $service)
                <div class="px-4 py-10 rounded border border-slate-100 text-center">
                    <img src="{{ url('storage',$service->thumbnail) }}" alt="" class="mx-auto mb-5">
                    <h3 class="text-slate-600 text-xl font-medium mb-3">{{ $service->title }}</h3>
                    <p class="text-slate-400">{{ $service->description }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    {{-- End Services --}}
    {{-- Start Packages --}}
    <div class="bg-[#FBFBFB] py-24 px-8 md:px-2">
        <div class="max-w-6xl mx-auto">
            <div class="text-left">
                <p class="text-teal-400 font-medium mb-2 md:mb-3">Location</p>
                <h2 class="text-3xl font-semibold text-slate-500 mb-2">Suggested location</h2>
                <p class="max-w-2xl text-slate-500">Naturally head of the class when it comes to luxury travel planning
                    because we do more homework than anyone else.</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mt-14">
                @foreach ($allPackages as $package)
                <a href="/package/{{ $package->id }}">
                    <div style="background-image: url({{ url('storage',$package->thumbnail) }});"
                        class="relative min-h-[500px] bg-cover rounded-xl">
                        <div
                            class="w-3/4 flex text-white p-4 justify-between rounded bottom-4 right-0 left-0 mx-auto bg-black/30 min-h-[100px] absolute backdrop-blur-xl ">
                            <div>
                                <h2 class="font-semibold text-lg">{{ $package->title }}</h2>
                                <p class="text-slate-300 text-sm">{{ $package->place }}</p>
                            </div>
                            <div class="">
                                <img src="{{ url('dist/images/Frame 15.png') }}" alt="" class="mb-3">
                                <p>Rp. {{ number_format($package->price) }}</p>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
    {{-- End Packages --}}
    {{-- Start Testimoni --}}
    <div class="py-24 px-8" id="testimonials">
        <div class="max-w-6xl mx-auto">
            <div class="text-center">
                <p class="text-teal-400 font-medium mb-3">Testimoni</p>
                <h2 class="text-3xl font-semibold text-slate-500 mb-2">What our says about us</h2>
                <p class="max-w-2xl text-slate-500 mx-auto">See and discover what adventurers tell us about their
                    journey with us, we always listen to whatever experience they have to say</p>
            </div>
            <!-- Slider main container -->
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    @foreach ($allTestimonials as $testimoni)
                    <div class="swiper-slide">
                        <div class="mt-10 mx-auto ">
                            <img src="{{ url('storage',$testimoni->thumbnail) }}" alt="" class="mx-auto mb-5">
                            <div class=" text-center py-10">
                                <img src="{{ url('dist/images/petik.png') }}" alt="" class="mx-auto mb-5">
                                <p
                                    class="max-w-2xl mx-auto mb-4 text-slate-500  px-10 border border-slate-100 py-10 rounded">
                                    &ldquo;
                                    {{ $testimoni->description}}
                                    &rdquo;
                                </p>
                                <h class="font-semibold">{{ $testimoni->name }}</h>
                                <p class="text-slate-500">{{ $testimoni->profession }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev scale-50" id="tombol-prev"></div>
                <div class="swiper-button-next scale-50 " id="tombol-next"></div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </div>
    {{-- End Testimoni --}}
    {{-- Start Footer --}}
    <x-footer>
    </x-footer>
    {{-- End Footer --}}
</x-home-layout>