<?php

namespace Backend;

class crud
{
    public function index()
    {
        $db = bancoDados::conectar();
        $stmt = $db->query("SELECT * FROM usuarios");
        $usuarios = $stmt->fetchAll();
        mostrarTela('Crud', ['usuarios' => $usuarios]);
    }
    public static function deletar()
    {
        $id = $_GET['id'];
        $db = bancoDados::conectar();
        $stmt = $db->prepare("DELETE FROM usuarios WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }
    public function cadastrar()
    {
        $db = bancoDados::conectar();
        var_dump($_POST['nome']);
        $stmt = $db->prepare('INSERT INTO usuarios(nome, email, senha, cpf, perfil) VALUES (:n, :e, :s, :c, :p)');
        $stmt->execute([
            'n' => $_POST['nome'],
            'e' => $_POST['email'],
            's' => $_POST['senha'],
            'c' => $_POST['cpf'],
            'p' => $_POST['perfil'],
        ]);
        redirecionar('crud');
    }
    public function atualizar()
    {
        $db = bancoDados::conectar();
        var_dump($_POST['nome']);
        $stmt = $db->prepare('UPDATE usuarios SET (nome = :n,email = :e,senha = :s,cpf = :c,perfil = :p) WHERE id = :id');
        $stmt->execute([
            
            'n' => $_POST['nome'],
            'e' => $_POST['email'],
            's' => $_POST['senha'],
            'c' => $_POST['cpf'],
            'p' => $_POST['perfil'],
            'id' => $_POST['id']
        ]);
        redirecionar('crud');
    }
}
