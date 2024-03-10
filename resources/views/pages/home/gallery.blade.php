<x-home-layout>
    <div class="container mx-auto px-5 py-2 lg:px-32 lg:pt-12">
        <div class="-m-1 flex flex-wrap md:-m-2">
            @foreach ($allPackages as $item)
            <div class="flex w-1/3 flex-wrap">
                <div class="w-full p-1 md:p-2">
                    <a href="{{ route('package',$item->id) }}">
                        <img alt="gallery" class="block h-full w-full rounded-lg object-cover object-center"
                            src="{{ url('storage/',$item->thumbnail) }}" />
                    </a>
                </div>
            </div>
            @endforeach
            @foreach ($allPackages as $item)
            <div class="flex w-1/3 flex-wrap">
                <div class="w-full p-1 md:p-2">
                    <a href="{{ route('package',$item->id) }}">
                        <img alt="gallery" class="block h-full w-full rounded-lg object-cover object-center"
                            src="{{ url('storage/',$item->banner) }}" />
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <x-footer></x-footer>
</x-home-layout>