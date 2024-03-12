<x-home-layout>
    <div class="max-w-4xl mx-auto my-10">
        @foreach ($tickets as $ticket)
        <form>
            <div class="p-2">
                <h1 class=" font-semibold text-2xl px-4 py-2 bg-accent text-white rounded">Tiket Anda Berhasil
                    Dibuat</h1>
                <div class="mt-5 shadow rounded p-4">
                    <x-application-logo></x-application-logo>
                    <h2 class="  text-slate-300 mt-2 mb-5 ">Adventure Awaits with Go Trip Travel</h2>
                    <div class="flex justify-beetwen items-center gap-5 mb-3 border p-2 rounded bg-white px-5">
                        <label for="title" class=" w-1/2 font-medium text-slate-600 ">Name</label>
                        <input type="text"
                            class="form-input border-none rounded-lg w-1/2 input-bordered input font-semibold"
                            value="{{ $ticket->name }}" disabled />
                    </div>
                    <div class="flex justify-beetwen items-center gap-5 mb-3 border p-2 rounded bg-white px-5">
                        <label for="title" class=" w-1/2 font-medium text-slate-600 ">Destination</label>
                        <input type="text"
                            class="form-input border-none rounded-lg w-1/2 input-bordered input font-semibold"
                            value="{{ $ticket->destination }}" disabled />
                    </div>
                    <div class="flex justify-beetwen items-center gap-5 mb-3 border p-2 rounded bg-white px-5">
                        <label for="date" class=" w-1/2 font-medium text-slate-600 ">Date</label>
                        <input type="date"
                            class="form-input border-none rounded-lg w-1/2 input-bordered input font-semibold"
                            value="{{ $ticket->date }}" disabled />
                    </div>
                    <div class="flex justify-beetwen items-center gap-5 mb-3 border p-2 rounded bg-white px-5">
                        <label for="people" class=" w-1/2 font-medium text-slate-600 ">Number of People</label>
                        <input type="number"
                            class="form-input border-none rounded-lg w-1/2 input-bordered input font-semibold"
                            name="people" value="{{ $ticket->people }}" disabled />
                    </div>
                    <div class="flex justify-beetwen items-center gap-5 mb-3 border p-2 rounded bg-white px-5">
                        <label for="people" class=" w-1/2 font-medium text-slate-600 ">Price</label>
                        <input type="text"
                            class="form-input border-none rounded-lg w-1/2 input-bordered input font-semibold"
                            value="Rp. {{ number_format($ticket->price) }}" name="price" disabled />
                    </div>
                    <hr class="my-10">
                    <div class="flex justify-beetwen items-center gap-5 mb-3 border p-2 rounded bg-white px-5">
                        <label for="people" class=" w-1/2 font-medium text-slate-600 ">Total Price</label>
                        <input type="text"
                            class="form-input border-none rounded-lg w-1/2 input-bordered input font-semibold"
                            value="Rp. {{ number_format($ticket->total) }}" name="total" />
                    </div>

                </div>
            </div>
        </form>
        {{-- @dd($ticket->id) --}}
        <a href="{{ route('cetak-ticket',$ticket->slug) }}"  target="_blank" class="btn btn-accent text-white">Cetak Tiket</a>
        @endforeach
    </div>

</x-home-layout>