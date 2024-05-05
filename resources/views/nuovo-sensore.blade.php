

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Aggiungi nuovo sensore
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h4 class="mb-2">Scegli modello sensore: </h4>
    <select class="select select-bordered w-full max-w-xs">
        <option selected>Umidità</option>
        <option>Temperatura</option>
        <option>Consumo Elettrico</option>
    </select>
    <h4 class="mb-2 mt-2">Inserisci il nome del sensore: </h4>
    <input type="text" placeholder="Inserisci il nome del sensore" class="input input-bordered input-secondary w-full max-w-xs" />
    <button class="btn btn-accent mx-2">Crea!</button>

                    

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
