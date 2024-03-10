<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Services') }}
            </h2>
            <a href="{{ route('dashboard.services') }}" class="btn btn-warning text-white">Back to Services</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center mt-10 mb-5">
                    {{ __('Edit services') }}
                </h2>
                <div class="p-6 text-gray-900">
                    <form action="{{ route('dashboard.services.update',$service->id) }}" class="mx-auto max-w-2xl"
                        enctype="multipart/form-data" method="post">
                        @csrf
                        @method('PUT')
                        <img src="{{ url('storage/'.$service->thumbnail) }}" alt=""
                            class="aspect-video img-cover mt-5 mb-3">
                        <input type="file" class="file-input file-input-bordered mb-5" name="thumbnail" />
                        <br>
                        <label class="input input-bordered flex items-center gap-2 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-4 h-4 opacity-70">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                            </svg>
                            <input type="text" name="title" class="grow border-none" placeholder="Title"
                                value="{{ $service->title }}" />
                        </label>
                        <textarea class="grow textarea textarea-bordered w-full mb-2" name="description"
                            placeholder="Description"> {{ $service->description }}</textarea>
                        <button class="btn btn-accent text-white" type="submit">Update Service</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>