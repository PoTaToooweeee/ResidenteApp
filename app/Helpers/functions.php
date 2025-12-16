<?php

if (!function_exists("theme_color")) {
    function theme_color($key) {
        return \App\Helpers\ThemeHelper::color($key);
    }
}

if (!function_exists("theme_gradient")) {
    function theme_gradient($key) {
        return \App\Helpers\ThemeHelper::gradient($key);
    }
}

if (!function_exists("theme_shadow")) {
    function theme_shadow($key) {
        return \App\Helpers\ThemeHelper::shadow($key);
    }
}

if (!function_exists("theme_css")) {
    function theme_css() {
        return \App\Helpers\ThemeHelper::cssVariables();
    }
}
