<section class="mt-2 space-y-6">
    <section>
        <header>
            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Aggiungi Token') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('Crea un token per gestire i tuoi sensori tramite API.') }} <span class="text-bold"> ATTENZIONE:
                    Copiare il token, non verrà MAI più mostrato successivamente</span>
            </p>
        </header>


        <form method="post" action="{{ route('profile.addToken') }}" class="mt-6 space-y-6">
            @csrf


            <div>
                <x-input-label for="token" :value="__('Token')" />

                @if (session('token'))
                    <div class="mockup-code">
                        <pre data-prefix=""><code>{{ session('token') }}</code></pre>
                    </div>
                @else
                    <span class="text-xl"> Token già creato!</span>
                @endif
            </div>



            <div class="flex items-center gap-4">
                <x-primary-button>{{ __('Genera Nuovo') }}</x-primary-button>

              
            </div>
        </form>
    </section>

</section>
