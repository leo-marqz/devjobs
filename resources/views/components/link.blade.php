@php
    $classes = "text-sm text-gray-500 hover:text-black";
@endphp

<a {{  $attributes->merge( ['class'=>$classes] )  }}>
    {{ $slot}}
</a>