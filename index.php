<?php
/**
 * Root entry point: detects the visitor's preferred language
 * (Accept-Language header) and redirects to /en/, /es/ or /fr/.
 * Bots without header -> English (x-default).
 */
$supported = ['en', 'es', 'fr'];
$target = 'en';
$best = 0.0;

$accept = strtolower($_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? '');
if ($accept !== '' && preg_match_all('/([a-z]{2})(?:-[a-z0-9]+)?\s*(?:;\s*q=([0-9.]+))?/', $accept, $m, PREG_SET_ORDER)) {
    foreach ($m as $match) {
        $code = $match[1];
        $q = isset($match[2]) && $match[2] !== '' ? (float) $match[2] : 1.0;
        if (in_array($code, $supported, true) && $q > $best) {
            $best = $q;
            $target = $code;
        }
    }
}

header('Vary: Accept-Language');
header('Location: /' . $target . '/', true, 302);
exit;
