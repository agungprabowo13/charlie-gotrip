<x-home-layout>
    <div>
        <div class="max-w-4xl mx-auto my-10 px-4 md:px-0">
            <form action="{{ route('store_order') }}" method="post">
                @csrf
                <div class="p-2">
                    <h1 class=" font-semibold text-2xl px-4 py-2 bg-accent text-white rounded">Pemesanan Tiket</h1>
                    <div class="mt-5 shadow rounded p-4">
                        <x-application-logo></x-application-logo>
                        <h2 class="  text-slate-300 mt-2 mb-5 ">Adventure Awaits with Go Trip Travel</h2>
                        <div class="flex justify-beetwen items-center gap-5 mb-3 border p-2 rounded bg-white px-5">
                            <label for="title" class=" w-1/2 font-medium text-slate-600 ">Name</label>
                            <input type="text"
                                class="form-input border-none rounded-lg w-1/2 input-bordered input font-semibold"
                                value="{{ Auth::user()->name }}" name="name" />
                        </div>
                        <div class="flex justify-beetwen items-center gap-5 mb-3 border p-2 rounded bg-white px-5">
                            <label for="title" class=" w-1/2 font-medium text-slate-600 ">Destination</label>
                            <input type="text"
                                class="form-input border-none rounded-lg w-1/2 input-bordered input font-semibold"
                                value="{{ $package->title }}" name="destination" />
                        </div>
                        <div class="flex justify-beetwen items-center gap-5 mb-3 border p-2 rounded bg-white px-5">
                            <label for="date" class=" w-1/2 font-medium text-slate-600 ">Date</label>
                            <input type="date"
                                class="form-input border-none rounded-lg w-1/2 input-bordered input font-semibold"
                                value="{{ $package->title }}" name="date" />
                        </div>
                        <div class="flex justify-beetwen items-center gap-5 mb-3 border p-2 rounded bg-white px-5">
                            <label for="people" class=" w-1/2 font-medium text-slate-600 ">Number of People</label>
                            <input type="number" id="people" value="1" min="1"
                                class="form-input border-none rounded-lg w-1/2 input-bordered input font-semibold"
                                name="people" onchange="getTotal()" />
                        </div>
                        <div class="flex justify-beetwen items-center gap-5 mb-3 border p-2 rounded bg-white px-5">
                            <label for="people" class=" w-1/2 font-medium text-slate-600 ">Price</label>
                            <input type="text" readonly
                                class="form-input border-none rounded-lg w-1/2 input-bordered input font-semibold"
                                value="Rp. {{ number_format($package->price) }}" />
                            <input type="hidden" id="price" value=" {{ $package->price }}" name="price" />
                        </div>
                        <div class="flex justify-beetwen items-center gap-5 mb-3 border p-2 rounded bg-white px-5">
                            <label for="people" class=" w-1/2 font-medium text-slate-600 ">Total</label>
                            <input type="text" id="total" readonly
                                class="form-input border-none rounded-lg w-1/2 input-bordered input font-semibold"
                                value="Rp. {{ number_format($package->price) }}" />
                        </div>
                    </div>
                    <button type="submit" class="btn btn-accent w-full text-white mt-5 font-bold">Order Now</button>
                </div>
            </form>
        </div>
    </div>
    <x-footer></x-footer>
    <script>
        function getTotal() {
            var price = document.getElementById('price').value;
            var people = document.getElementById('people').value;
            var total = document.getElementById('total');

            var totalSemua = price * people;
            total.value = Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR'
            }).format(totalSemua);
        }
    </script>
</x-home-layout>
