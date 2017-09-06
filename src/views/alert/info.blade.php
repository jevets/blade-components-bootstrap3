@component('bs3::alert', ['type' => 'info'])
    {{ $slot or '' }}
@endcomponent
