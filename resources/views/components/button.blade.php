<button 
    {{ $attributes->merge([
        "class" => "btn btn-primary"
    ]) }}
    style="background: {{ theme_color($type ?? 'primary') }}"
>
    @if ($icon)
        <i class="fas fa-{{ $icon }}"></i>
    @endif
    {{ $slot }}
</button>
