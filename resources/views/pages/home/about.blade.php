<x-home-layout>
    <section class="bg-white">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="font-light  text-slate-500">
                <p class="text-teal-400 font-semibold mb-3">About Us</p>
                <h2 class="mb-4  tracking-tight text-4xl font-bold text-slate-600">"Embrace Adventure with Go Trip Travel!"
                </h2>
                <p class="mb-4">
                    Go Trip Travel is your ultimate partner for unforgettable adventures. With a passion for exploration
                    and a commitment to exceptional service, we specialize in crafting personalized travel experiences
                    tailored to your desires.
                </p>
                <p class="mb-4">
                    Whether you're seeking a thrilling escapade in the mountains, a serene retreat by the beach, or an
                    immersive cultural journey through vibrant cities, we have the expertise to make your dreams a
                    reality.
                </p>
                <p class="mb-4">
                    Our team of experienced travel professionals meticulously plan every detail of your trip, from
                    transportation and accommodations to activities and dining options, ensuring a seamless and
                    stress-free experience from start to finish.
                </p>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-8">
                @foreach ($img1 as $item)
                <img class="w-full rounded-lg" src="{{ url('storage',$item->thumbnail) }}" alt="office content 1">
                @endforeach
                @foreach ($img2 as $item)
                <img class="mt-4 w-full lg:mt-10 rounded-lg" src="{{ url('storage',$item->thumbnail) }}"
                    alt="office content 2">
                @endforeach
            </div>

        </div>
    </section>
    <x-footer></x-footer>
</x-home-layout>