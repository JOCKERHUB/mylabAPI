<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Aggiungi nuovo sensore
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('sensori.addSensor') }}" method="POST" class="space-y-4">
                        @csrf
                        <div class="flex flex-col">
                            <label class="font-semibold text-gray-700">Nome</label>
                            <input name="name" class="form-input mt-1 block w-full rounded-3xl" type="text"
                                placeholder="Dai un nome al tuo sensore">
                        </div>
                        <div class="flex flex-col">
                            <label class="font-semibold text-gray-700">Descrizione</label>
                            <input name="description" class="form-input mt-1 block w-full rounded-3xl" type="text"
                                placeholder="Inserisci la descrizione">
                        </div>
                        <div class="flex flex-col">
                            <label class="font-semibold text-gray-700">Fornitore</label>
                            <input name="vendor" class="form-input mt-1 block w-full rounded-3xl" type="text"
                                placeholder="Inserisci il fornitore">
                        </div>
                        <div class="flex flex-col">
                            <label class="font-semibold text-gray-700">Tipo</label>
                            <h4 class="mb-2">Scegli modello sensore: </h4>
                            <select name="type" class="form-select mt-1 block w-full rounded-3xl">
                                <option value="humidity" selected>Umidità</option>
                                <option value="temperature">Temperatura</option>
                                <option value="energy">Consumo Elettrico</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-accent mx-2 rounded-3xl">Crea!</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
