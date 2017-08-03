<a href="{{ $url or '#' }}" class="btn btn-{{ $type or 'default' }} btn-{{ $size or 'sm' }} {{ $classes or '' }}" title="{{ $title or 'Edit This' }}">

    @isset ($content)
        {{ $content }}
    @else
        @if (isset($icon))
            <i class="fa fa-{{ $icon or $icon_left }}"></i>
        @endif
        {{ $text or '' }}
    @endif
</a>
