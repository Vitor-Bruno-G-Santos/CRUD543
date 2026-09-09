<?php

namespace Backend;

class setor
{
    public function index()
    {
        $db = bancoDados::conectar();
        $stmt = $db->query("SELECT * FROM setores");
        $setores = $stmt->fetchAll();
        mostrarTela('Setor', ['setores' => $setores]);
    }
    public static function deletar()
    {
        $id = $_GET['id'];
        $db = bancoDados::conectar();
        $stmt = $db->prepare("DELETE FROM setores WHERE id = :id");
        $stmt->execute(['id' => $id]);
        redirecionar('eventos');
    }
    public function cadastrar()
    {
        $db = bancoDados::conectar();
        var_dump($_POST['nome']);
        $stmt = $db->prepare('INSERT INTO setores(nome, capacidade_setor) VALUES (:n, :c)');
        $stmt->execute([
            'n' => $_POST['nome'],
            'c' => $_POST['capacidade_setor'],
        ]);
        redirecionar('eventos');
    }
    public function atualizar()
    {
        $db = bancoDados::conectar();
        var_dump($_POST['nome']);
        $stmt = $db->prepare('UPDATE setores SET nome = :n,capacidade_setor = :c WHERE id = :id');
        $stmt->execute([
            'n' => $_POST['nome'],
            'c' => $_POST['capacidade_setor'],
            'id' =>$_POST['id']
        ]);
        redirecionar('eventos');
    }
    public function json(){
        $db = bancoDados::conectar();
        $id = (int) $_GET["id"];
        $stmt = $db->prepare("SELECT * FROM setores WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $usuarios = $stmt->fetch();
        header("Content-Type: application/json; charset=utf-8");
        echo json_encode($usuarios);
    }


}
