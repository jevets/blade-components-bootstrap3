<button type="submit" class="btn btn-{{ $type or 'default' }} btn-{{ $size or 'sm' }} {{ $classes or '' }}">
    @isset ($content)
        {{ $content }}
    @else
        @if (isset($icon) || isset($icon_left))
            <i class="fa fa-{{ $icon or $icon_left }}"></i>
        @endif
        {{ $text or '' }}
        @isset ($icon_right)
            <i class="fa fa-{{ $icon_right }}"></i>
        @endisset
    @endif
</button>