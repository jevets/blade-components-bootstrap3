@php 
$title   = isset($title) ? $title : null;
$icon    = isset($icon) ? $icon : null;
@endphp 
<div class="panel-heading">
    {{ $slot }} 

    @if ($icon || $title) 
        @component('bs3::panel.title')
            @if ($icon) 
                <i class="fa fa-{{ $icon }}"></i>
            @endif
            {{ $title }} 
        @endcomponent
    @endif
</div>