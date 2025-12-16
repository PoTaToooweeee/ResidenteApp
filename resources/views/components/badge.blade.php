<span 
    {{ $attributes->merge([
        "class" => "inline-block px-3 py-1 rounded-full text-sm font-medium"
    ]) }}
    style="background: {{ theme_color($type ?? 'primary') }}20; color: {{ theme_color($type ?? 'primary') }}"
>
    {{ $slot }}
</span>
