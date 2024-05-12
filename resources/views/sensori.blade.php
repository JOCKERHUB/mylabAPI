<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center h-10">
            <h2 class="font-semibold text-3xl text-gray-800 leading-tight">
                Sensori
            </h2>
            <div class="p-6">
                <a href="/aggiungi-sensore" class="btn btn-secondary rounded-3xl">Aggiungi nuovo sensore</a>
            </div>
        </div>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 text-lg">
                    <h2>I Miei Sensori</h2>
                </div>

                @foreach ($sensors as $sensor)
                    @include('components.sensor-card')
                @endforeach

            </div>
        </div>
    </div>
</x-app-layout>
