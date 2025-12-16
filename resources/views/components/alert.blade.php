<div 
    {{ $attributes->merge([
        "class" => "p-4 rounded-lg border-l-4"
    ]) }}
    style="background: {{ theme_color($type ?? 'info') }}10; border-color: {{ theme_color($type ?? 'info') }}; color: {{ theme_color($type ?? 'info') }}"
>
    <div class="flex items-center gap-3">
        @if ($icon)
            <i class="fas fa-{{ $icon }}"></i>
        @endif
        <div>{{ $slot }}</div>
    </div>
</div>
