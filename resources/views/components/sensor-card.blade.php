<div class="flex items-center border m-4 rounded-xl hover:shadow-lg transition duration-300">
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

            @php
                $measure = $sensor->measures->first();
            @endphp

            @if ($measure)
                @if ($sensor->type == 'temperature')
                    <p>Temp: {{ $measure->val }} {{ $measure->unit }}</p>
                @elseif ($sensor->type == 'humidity')
                    <p>Umidità: {{ $measure->val }} {{ $measure->unit }}</p>
                @else
                    <p>Energia: {{ $measure->val }} {{ $measure->unit }}</p>
                @endif
            @else
                <p>Nessuna misura disponibile</p>
            @endif
        </div>

        <span> Sensor ID: {{ $sensor->id }}</span>

        <div class="card-actions justify-between">
            <a href="{{ route('sensori.show', ['sensor' => $sensor->id]) }}" class="btn btn-secondary rounded-3xl">Mostra
                Dettagli</a>
        </div>
    </div>
</div>
