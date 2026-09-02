<?php


// Rota login
$router->adicionar("GET", "/", "login@index");
$router->adicionar("GET", "/login", "login@index");
$router->adicionar("POST", "/logar", "login@logar");
// Rota CRUD pessoa
$router->adicionar("GET", "/crud", "crud@index");
$router->adicionar("GET", "/deletar", "crud@deletar");
$router->adicionar("POST", "/cadastrar", "crud@cadastrar");
$router->adicionar("POST", "/atualizar", "crud@atualizar");
$router->adicionar("GET", "/json", "crud@json");

// Rota CRUD eventos
$router->adicionar("GET", "/eventos", "eventos@index");
$router->adicionar("GET", "/eventos/deletar", "eventos@deletar");
$router->adicionar("POST", "/eventos/cadastrar", "eventos@cadastrar");
$router->adicionar("POST", "/eventos/atualizar", "eventos@atualizar");
$router->adicionar("GET", "/eventos/json", "eventos@json");


// Rota CRUD eventos
$router->adicionar("GET", "/setor", "setor@index");
$router->adicionar("GET", "/setor/deletar", "setor@deletar");
$router->adicionar("POST", "/setor/cadastrar", "setor@cadastrar");
$router->adicionar("POST", "/setor/atualizar", "setor@atualizar");
$router->adicionar("GET", "/setor/json", "setor@json");