<?php

namespace Backend;

class roteador
{
    private $rotas = [];

    public function adicionar($metodo, $uri, $funcao): void
    {
        $this->rotas[] = [
            'metodo'    => $metodo,
            'uri'       => $uri,
            'funcao'    => $funcao
        ];
    }
    public function envio(): bool
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $uri = str_replace(BASE_URL, '/', $uri);
        $metodo = $_SERVER['REQUEST_METHOD'];

        foreach ($this->rotas as $rota) {
            if ($rota['metodo'] === $metodo && $rota['uri'] === $uri) {
                [$classeController, $metodoController] = explode('@', $rota['funcao']);
                $classeController = 'Backend\\' . $classeController;
                if (class_exists($classeController)) {
                    $controller = new $classeController;
                    if (method_exists($controller, $metodoController)) {
                        $controller->$metodoController();
                        http_response_code(200);
                        return (true);
                    } else {
                        http_response_code(500);
                        exit("Função não encontrada");
                    }
                } else {
                    http_response_code(500);
                    exit('Classe não encontrada');
                }
            } else {
                continue;
            }
        }
        http_response_code(404);
        exit("404 Not Found");
    }
}
