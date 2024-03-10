<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Testimonials') }}
            </h2>
            <a href="{{ route('dashboard.testimonials') }}" class="btn btn-warning text-white">Back to Testimonials</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center mt-10 mb-5">
                    {{ __('Create testimonials') }}
                </h2>
                <div class="p-6 text-gray-900">
                    <form action="{{ route('dashboard.testimonials.store') }}" class="mx-auto max-w-2xl"
                        enctype="multipart/form-data" method="post">
                        @csrf
                        <label class="input input-bordered flex items-center gap-2 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                              </svg>
                            <input type="text" name="name" class="grow border-none" placeholder="Name" />
                        </label>
                        <label class="input input-bordered flex items-center gap-2 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5-3.9 19.5m-2.1-19.5-3.9 19.5" />
                              </svg>
                              
                            <input type="text" name="profession" class="grow border-none" placeholder="Profession" />
                        </label>
                        <textarea class="grow textarea textarea-bordered w-full mb-2" name="description"
                            placeholder="Description"></textarea>
                        <input type="file" class="file-input file-input-bordered w-full mb-2" name="thumbnail" />
                        <button class="btn btn-accent text-white" type="submit">Add Testimonials</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>