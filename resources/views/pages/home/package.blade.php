<x-home-layout>
    <div class="bg-[#FBFBFB] py-12 px-2">
        <div class="max-w-6xl mx-auto">
            <div class="md:flex gap-10">
                <div class="w-full md:w-4/6 p-2">
                    <p class="text-teal-400 font-medium mb-3 ">{{ $package->place }}</p>
                    <h2 class="text-2xl font-semibold text-slate-600 mb-2 ">{{ $package->title }}</h2>
                    <div class="flex gap-5 mb-3">
                        <div class="flex gap-2 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>
                            <p class="text-sm">{{ $package->people }} People</p>
                        </div>
                        <div class="flex gap-2 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            <p class="text-sm">{{ $package->duration }} Days</p>
                        </div>
                    </div>
                    <p>Language : <span class="text-slate-500">{{ $package->language }}</span></p>
                    <img src="{{ url('storage/'.$package->banner) }}" alt="" class="w-full my-5 rounded">
                    <p class="text-slate-500">{{ $package->description }}</p>
                </div>
                <div class="w-full md:w-2/6 mt-5 md:mt-0">
                    <div class="card w-full shadow-xl p-4 bg-white">
                        <div class="flex gap-5 justify-between md:items-center">
                            <img src="{{ url('storage/'.$package->thumbnail) }}" alt="" class="w-1/2 rounded-2xl">
                            <div class="w-1/2">
                                <h2 class="text-xl font-semibold text-slate-600">Pesan {{ $package->title }} Sekarang</h2>
                                <img src="/dist/images/Frame 15.png" alt="" class="w-20 my-3">
                                <h3 class="text-xl text-blue-500 font-semibold">Rp. {{ number_format($package->price) }}</h3>
                            </div>
                        </div>
                        <hr class="border border-slate-200 my-4">
                        <p class="text-lg font-semibold text-slate-700 mb-3">Trip Informations</p>
                        <form action="" class="text-sm text-slate-600">
                            @if (Route::has('login'))
                            @auth
                            <a class="btn bg-blue-500 text-white px-6 font-semibold w-full" href="{{ route('order',$package->id) }}">Pesan</a>
                            @else
                            <a class="btn bg-blue-500 text-white px-6 font-semibold w-full"
                                href="{{ route('login') }}">Login</a>
                            @endauth
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-footer class="bg-white"></x-footer>
</x-home-layout>