<x-home-layout>
    <div class="bg-[#FBFBFB] py-12 px-2">
        <div class="max-w-6xl mx-auto">
            <div class="">
                <p class="text-teal-400 font-medium mb-3">Travel Packages</p>
                <h2 class="text-2xl font-medium text-slate-600 mb-2">All Travel Packages</h2>
                <p class="text-slate-500 max-w-2xl">Naturally head of the class when it comes to
                    luxury travel planning because we do more homework than anyone else.</p>
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
    <x-footer></x-footer>
</x-home-layout>