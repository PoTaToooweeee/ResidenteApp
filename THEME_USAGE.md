# Global Theme Color System - Usage Guide

## Overview
The Residente App now includes a centralized global color theme system that can be used throughout all Blade templates and views.

## Configuration File
**Location**: `config/theme.php`

Contains:
- **Colors**: Primary, secondary, success, warning, danger, info, light, dark, etc.
- **Gradients**: Pre-built gradient definitions
- **Shadows**: Predefined shadow effects

## Helper Functions

### 1. `theme_color($key)`
Get a color from the theme configuration.

**Usage in Blade:**
```blade
<div style="color: {{ theme_color('primary') }}">
    Green text
</div>

<div style="background: {{ theme_color('secondary') }}">
    Yellow background
</div>
```

### 2. `theme_gradient($key)`
Get a gradient from the theme configuration.

**Usage:**
```blade
<div style="background: {{ theme_gradient('primary') }}">
    Green gradient background
</div>
```

### 3. `theme_shadow($key)`
Get shadow effects from the theme configuration.

**Usage:**
```blade
<div style="box-shadow: {{ theme_shadow('primary') }}">
    Element with primary shadow
</div>
```

## Reusable Components

### Button Component
**Location**: `resources/views/components/button.blade.php`

**Usage:**
```blade
<x-button type="primary" icon="arrow-right">
    Get Started
</x-button>

<x-button type="secondary" icon="sign-in-alt">
    Sign In
</x-button>

<x-button type="success">
    Success Action
</x-button>
```

### Badge Component
**Location**: `resources/views/components/badge.blade.php`

**Usage:**
```blade
<x-badge type="primary">New</x-badge>
<x-badge type="warning">Pending</x-badge>
<x-badge type="danger">Alert</x-badge>
```

### Alert Component
**Location**: `resources/views/components/alert.blade.php`

**Usage:**
```blade
<x-alert type="success" icon="check-circle">
    Operation completed successfully!
</x-alert>

<x-alert type="warning" icon="exclamation-triangle">
    Please review before proceeding.
</x-alert>

<x-alert type="danger" icon="times-circle">
    An error has occurred.
</x-alert>
```

## Available Colors

| Key | Value | Usage |
|-----|-------|-------|
| primary | #22C55E | Main brand color (Green) |
| primary-dark | #16A34A | Darker shade for hover states |
| primary-light | #86EFAC | Lighter shade for backgrounds |
| secondary | #EAB308 | Accent color (Yellow) |
| secondary-dark | #CA8A04 | Darker secondary |
| secondary-light | #FACC15 | Lighter secondary |
| success | #10B981 | Success messages |
| warning | #F59E0B | Warning messages |
| danger | #EF4444 | Error messages |
| info | #3B82F6 | Info messages |
| light | #F5F7FA | Light backgrounds |
| dark | #1A1F2E | Dark text |
| white | #FFFFFF | White |
| black | #000000 | Black |

## Adding New Colors

1. Open `config/theme.php`
2. Add to the colors array:
```php
'custom-color' => '#YOUR_HEX_COLOR',
```
3. Use it in templates:
```blade
<div style="color: {{ theme_color('custom-color') }}">
    Custom colored text
</div>
```

## Best Practices

1. **Always use theme colors** instead of hardcoding hex values
2. **Use components** for consistent UI elements (buttons, badges, alerts)
3. **Maintain the config file** as the single source of truth for colors
4. **Test in both light and dark modes** when adding new styles
5. **Use semantic color names** (primary, success, danger) over descriptive ones

## Configuration Access

You can also access the config directly:
```blade
{{ config('theme.colors.primary') }}
{{ config('theme.gradients.primary') }}
{{ config('theme.shadows.lg') }}
```
