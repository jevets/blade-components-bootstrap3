<ol class="breadcrumb">
    @foreach ($items as $item)
        @include('bs3::breadcrumbs.item', [
            'url' => $item['url'] ?? null,
            'slot' => $item['text'],
            'last' => $loop->last,
        ])
    @endforeach
</ol>
