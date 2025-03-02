@props(['new'=>false])

<div @class(['new'=> $new, 'card'])>
{{ $slot }}
<a {{ $attributes }} class="btn">View details</a>
</div>