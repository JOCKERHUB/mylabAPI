<x-app-layout>
    <x-slot name="header">
        <div class="flex h-10 items-center justify-between">
            <h2 class="text-3xl font-semibold leading-tight text-gray-800">
                Sensori
            </h2>
            <div class="p-6">
                <a href="/aggiungi-sensore" class="btn btn-secondary rounded-3xl">Aggiungi nuovo sensore</a>
            </div>
        </div>
    </x-slot>

    <div class="py-4">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-lg text-gray-900">
                    <h1 class="text-center text-2xl">I Miei Sensori</h1>
                </div>
                <div class="mb-4 grid grid-cols-3 ">
                    @foreach ($sensors as $sensor)
                        @include('components.sensor-card')
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
