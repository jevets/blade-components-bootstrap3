@component('bs3::alert', ['type' => 'danger'])
    {{ $slot or '' }}
@endcomponent
