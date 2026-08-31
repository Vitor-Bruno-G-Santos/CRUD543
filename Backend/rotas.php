<?php

$router->adicionar("GET", "/", "login@index");
$router->adicionar("GET", "/login", "login@index");
$router->adicionar("POST", "/logar", "login@logar");
$router->adicionar("GET", "/crud", "crud@index");
$router->adicionar("GET", "/deletar", "crud@deletar");
$router->adicionar("POST", "/cadastrar", "crud@cadastrar");
