@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => '#'])  
            MCC REFRIGERACIÓN S.R.L
        @endcomponent
    @endslot
    
    ![MCC REFRIGERACIÓN S.R.L](https://mcc-refrigeracion.com/assets/img/mcc-refrigeracion-seo.png)

    {{-- Body --}}
    {{ $slot }}

    {{-- Subcopy --}}
    @isset($subcopy)
        @slot('subcopy')
            @component('mail::subcopy')
                {{ $subcopy }}
            @endcomponent
        @endslot
    @endisset

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            © {{ date('Y') }} [**Codecix**](https://www.codecix.com/ "El mundo digital te espera!"). @lang('Todos los derechos reservados.')
        @endcomponent
    @endslot
@endcomponent
