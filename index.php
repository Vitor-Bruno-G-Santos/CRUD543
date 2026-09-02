<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


session_start();

spl_autoload_register(function ($class) {
    $base_dir = __DIR__ . "/";
    $file = $base_dir . str_replace('\\', '/', $class) . '.php';
    
    if (file_exists($file)) {
        require $file;
    }
});

$config = require __DIR__ . '/aplicativo.php';
define('BASE_URL', $config['base_url']);

$router = new Backend\roteador();
require_once __DIR__ . "/Backend/rotas.php";

function mostrarTela(string $caminho, array $data = []) : void
{
    extract($data);

    $viewFile = __DIR__ . '/Frontend/' . $caminho . '/index.php';
    if (!file_exists($viewFile)) {
        http_response_code(404);
        exit('Página não existe');
    }

    require $viewFile;
}
function redirecionar(string $url)
{
    $urlRedirecionamento = (strpos($url, "http") === 0) ? $url : BASE_URL . ltrim($url, "/");
    header("Location: " . $urlRedirecionamento);
    exit;
}

$router->envio();
