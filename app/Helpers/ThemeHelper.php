<?php

namespace App\Helpers;

class ThemeHelper
{
    public static function color($key)
    {
        return config("theme.colors.{$key}");
    }

    public static function gradient($key)
    {
        return config("theme.gradients.{$key}");
    }

    public static function shadow($key)
    {
        return config("theme.shadows.{$key}");
    }
}
