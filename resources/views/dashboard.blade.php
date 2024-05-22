<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-6">
                @auth
                    Ciao, {{ Auth::user()->name }}! Benvenuto nella tua dashboard!
                @endauth
                <!-- Statistiche -->
                <div class="mb-8">
                    <h3 class="text-lg font-semibold text-gray-600 mb-4">Statistiche</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Totale sensori attivi -->
                        <div class="bg-gray-100 rounded-lg p-4">
                            <div class="flex flex-col gap-2">
                                <label class="text-base font-semibold text-gray-800">Totale sensori attivi:</label>
                                <label class="text-4xl font-bold text-green-800">{{ $sensors }}</label>
                            </div>
                        </div>

                        <!-- Ultima rilevazione -->
                        <div class="bg-gray-100 rounded-lg p-4">
                            <div class="flex flex-col gap-2">
                                <label class="text-base font-semibold text-gray-800">Ultima rilevazione:</label>
                                @if ($latest_sensor_measures)
                                    <label class="text-4xl font-bold text-green-800">
                                        {{ $latest_sensor_measures->created_at }} - (Sensore:
                                        {{ $latest_sensor_measures->sensor->name }})
                                    </label>
                                @else
                                    <label class="text-4xl font-bold text-red-800">Nessuna rilevazione
                                        disponibile</label>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Altre sezioni possono essere aggiunte qui -->

            </div>
        </div>
    </div>
</x-app-layout>
