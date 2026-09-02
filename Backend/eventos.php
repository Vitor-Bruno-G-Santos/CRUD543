<?php

namespace Backend;

class eventos
{
    public function index()
    {
        $db = bancoDados::conectar();
        $stmt = $db->query("SELECT * FROM eventos");
        $eventos = $stmt->fetchAll();
        mostrarTela('Eventos', ["eventos" => $eventos]);
    }
    public static function deletar()
    {
        $id = $_GET['id'];
        $db = bancoDados::conectar();
        $stmt = $db->prepare("DELETE FROM eventos WHERE id = :id");
        $stmt->execute(['id' => $id]);
        redirecionar('eventos');
    }
    public function cadastrar()
    {
        $db = bancoDados::conectar();
        var_dump($_POST['nome']);
        $stmt = $db->prepare('INSERT INTO eventos(nome, data, capacidade_maxima) VALUES (:n, :d, :c)');
        $stmt->execute([
            'n' => $_POST['nome'],
            'd' => $_POST['data'],
            'c' => $_POST['capacidade_maxima'],
        ]);
        redirecionar('eventos');
    }
    public function atualizar()
    {
        $db = bancoDados::conectar();
        var_dump($_POST['nome']);
        $stmt = $db->prepare('UPDATE eventos SET nome = :n,data = :d,capacidade_maxima = :c WHERE id = :id');
        $stmt->execute([
            'n' => $_POST['nome'],
            'd' => $_POST['data'],
            'c' => $_POST['capacidade_maxima'],
            'id' =>$_POST['id']
        ]);
        redirecionar('eventos');
    }
    public function json(){
        $db = bancoDados::conectar();
        $id = (int) $_GET["id"];
        $stmt = $db->prepare("SELECT * FROM eventos WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $usuarios = $stmt->fetch();
        header("Content-Type: application/json; charset=utf-8");
        echo json_encode($usuarios);
    }


}
