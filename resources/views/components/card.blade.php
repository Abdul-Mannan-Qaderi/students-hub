@props(['highlight'=>false])

<div @class(['highlight'=> $highlight, 'card', 'text-left'])>
    {{ $slot }}
    <a {{ $attributes }} class="btn">View Details</a>
</div>