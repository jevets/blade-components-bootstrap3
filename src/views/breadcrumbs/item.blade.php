<li>
    @if ($last)
        {{ $slot }}
    @else
        <a href="{{ $url or '#' }}">
            {{ $slot or '' }}
        </a>
    @endif
</li>
