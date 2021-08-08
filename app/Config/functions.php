<?php

/**
 * @return bool
 */
function isMobileDevice(): bool
{
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}

/**
 * @param string $view
 * @param array $data
 * @param boolean $isMail
 * @return mixed
 */
function view(string $view, array $data = [], bool $isMail = false): mixed
{
    extract($data);

    $filename = $isMail ? "public" . DIRECTORY_SEPARATOR . "template" . DIRECTORY_SEPARATOR . "email" . DIRECTORY_SEPARATOR . $view . ".php" : "public" . DIRECTORY_SEPARATOR . "views" . DIRECTORY_SEPARATOR . $view . ".php";

    if (!is_file($filename)) {
        exit('view not found');
    }

    ob_start();
    include $filename;

    if ($isMail) return ob_get_clean();

    exit(ob_get_clean());
}

/**
 * @param string $file
 * @return string
 */
function asset(string $file): string
{
    return getenv('APP_URL') . '/' . "public" . '/' . "assets" . '/' . "{$file}";
}

/**
 * @param mixed $data
 * @return void
 */
function dd(mixed $data): void
{
    echo '<pre>', var_dump($data);
    die;
}

/**
 * @param mixed $data
 * @return void
 */
function pd(mixed $data): void
{
    echo '<pre>', print_r($data, true);
    die;
}

/**
 * @param string $file
 * @return void
 */
function loadCSS(string $file): void
{
    $filePath = dirname(__DIR__) . '/public/assets/css/' . $file;
    $version = filemtime($filePath);
    $style = "<link rel='stylesheet' href='" . asset("css/$file") . "?v=$version' type='text/css'>";
    echo $style;
}

/**
 * @param bool $enable
 * @return void
 */
function errorReporting(bool $enable): void
{
    error_reporting(E_ALL);
    ini_set('display_errors', $enable);
}
