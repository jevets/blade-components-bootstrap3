@include('bs::button', [
    'text' => isset($text) ? $text : 'View',
    'icon' => isset($icon) ? $icon : 'eye',
])