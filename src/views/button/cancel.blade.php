@include('bs::button', [
    'text' => $text ?? 'Cancel',
    'icon' => isset($icon) ? $icon : 'caret-left',
])
