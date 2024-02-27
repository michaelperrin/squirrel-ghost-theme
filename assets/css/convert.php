<?php
// Read the content of the CSS file
$content = file_get_contents('screen.css');

// Find all rem values and convert them
$content = preg_replace_callback('/(\d*\.?\d+)rem/', function ($matches) {
    return round(floatval($matches[1]) * 0.625, 1) . 'rem';
}, $content);

// Write the new content back to the CSS file
file_put_contents('screen.css', $content);
