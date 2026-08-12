<?php

header("X-Content-Type-Options: nosniff");

header("X-Frame-Options: DENY");

header("Referrer-Policy: strict-origin-when-cross-origin");

header(
    "Content-Security-Policy: default-src 'self'; " .
    "style-src 'self' https://cdn.jsdelivr.net; " .
    "script-src 'self'; object-src 'none';"
);