<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <!-- component -->
                <div class="m-4 flex">
                    <div class="container mx-8 flex flex-col gap-4">
                        <label class="text-lg font-semibold tracking-wider text-gray-600">Statistiche</label>
                        <div
                            class="flex h-auto w-full flex-row justify-between divide-x divide-solid divide-gray-400 rounded-lg bg-gray-100 py-4">
                            <div class="relative flex flex-1 flex-col gap-2 px-4">
                                <label class="text-base font-semibold tracking-wider text-gray-800">Totale sensori
                                    attivi:</label>
                                <label class="text-4xl font-bold text-green-800">{{ $sensors }}</label>

                            </div>
                            <div class="relative flex flex-1 flex-col gap-2 px-4">
                                <label class="text-base font-semibold tracking-wider text-gray-800">Ultima rilevazione:

                                </label>
                                <label
                                    class="text-4xl font-bold text-green-800">{{ $latest_sensor_measures->created_at }}
                                    - (Sensore: {{ $latest_sensor_measures->sensor->name }})</label>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
