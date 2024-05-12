<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4">
    @foreach ($sensors as $sensor)
        <div class="card card-side shadow-xl bg-gray-300 m-3">
            <div class="flex items-center">
                @if ($sensor->type == 'temperature')
                    <i class="bi bi-thermometer-sun text-gray-700 text-6xl m-4"></i>
                @elseif ($sensor->type == 'humidity')
                    <i class="bi bi-droplet-half text-gray-700 text-6xl m-4"></i>
                @else
                    <i class="bi bi-lightbulb text-gray-700 text-6xl m-4"></i>
                @endif

                <div class="card-body flex flex-col justify-between">
                    <div>
                        <h2 class="card-title">{{ $sensor->name }}</h2>
                        <p>{{ $sensor->description }}</p>

                        @if ($sensor->type == 'temperature')
                            <p>Temp: {{ $sensor->measures->first()->val }} {{ $sensor->measures->first()->unit }}</p>
                        @elseif ($sensor->type == 'humidity')
                            <p>Umidità: {{ $sensor->measures->first()->val }} {{ $sensor->measures->first()->unit }}</p>
                        @else
                            <p>Energia: {{ $sensor->measures->first()->val }} {{ $sensor->measures->first()->unit }}</p>
                        @endif
                    </div>

                    <div class="card-actions justify-end ">
                        <button class="btn btn-secondary rounded-3xl">Mostra Dettagli</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
