<div class="card card-side m-3 bg-gray-300 shadow-xl hover:scale-105">
    <div class="flex items-center">
        @if ($sensor->type == 'temperature')
            <i class="bi bi-thermometer-sun m-4 text-6xl text-gray-700"></i>
        @elseif ($sensor->type == 'humidity')
            <i class="bi bi-droplet-half m-4 text-6xl text-gray-700"></i>
        @else
            <i class="bi bi-lightbulb m-4 text-6xl text-gray-700"></i>
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

            <span> Sensor ID: {{ $sensor->id }}</span>

            <div class="card-actions justify-between">
                <a href="{{ route('sensori.show', ['sensor' => $sensor->id]) }}"
                    class="btn btn-secondary rounded-3xl">Mostra Dettagli</a>
            </div>
        </div>
    </div>
</div>
