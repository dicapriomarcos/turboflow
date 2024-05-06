<?php

function generateGoogleFontsUrl($font) {
    $font_parts = explode(' - ', $font);

    $font_name = str_replace(' ', '+', $font_parts[0]);
    $font_width = $font_parts[1];

    return 'https://fonts.googleapis.com/css2?family=' . $font_name . ':ital,wght@0,' . $font_width . ';1,' . $font_width . '&display=swap';
}