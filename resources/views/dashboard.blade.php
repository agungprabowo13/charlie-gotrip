<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="diff aspect-[16/9]">
                        <div class="diff-item-1">
                          <div class="bg-primary text-primary-content text-9xl font-black grid place-content-center">GOTRIP</div>
                        </div>
                        <div class="diff-item-2">
                          <div class="bg-base-200 text-9xl font-black grid place-content-center">GOTRIP</div>
                        </div>
                        <div class="diff-resizer"></div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
