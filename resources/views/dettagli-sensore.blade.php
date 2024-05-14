<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Dettagli -> {{ $sensor->name }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="mockup-code">
                <pre data-prefix="2"><code>Nome -> {{ $sensor->name }}</code></pre>
                <pre data-prefix="2"><code>Descrizione -> {{ $sensor->description }}</code></pre>
                <pre data-prefix="2"><code>Sensor ID -> {{ $sensor->id }}</code></pre>
            </div>
            <div class="mt-4">
                {!! $chart->render() !!}
            </div>
        </div>


    </div>
</x-app-layout>
