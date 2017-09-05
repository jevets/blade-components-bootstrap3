@component('bs3::alert', ['type' => 'success'])
    {{ $slot or '' }}
@endcomponent
