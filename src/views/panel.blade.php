@php
$type    = isset($type) ? $type : 'default';
$heading = isset($heading) ? $heading : null;
$icon    = isset($icon) ? $icon : null;
$title   = isset($title) ? $title : null;
$body    = isset($body) ? $body : null;
$footer    = isset($footer) ? $footer : null;
@endphp

<div class="panel panel-{{ $type }}">

    @if ($heading || $icon || $title)
        @component('bs::panel.heading')
            {{ $heading }}
            @slot('icon', $icon)
            @slot('title', $title)
        @endcomponent
    @endif

    {{ $slot }}

    @if ($body)
        @component('bs::panel.body')
            {{ $body }}
        @endcomponent
    @endif

    @if ($footer)
        @component('bs::.panel.footer')
            {{ $footer }}
        @endcomponent
    @endif

</div>
