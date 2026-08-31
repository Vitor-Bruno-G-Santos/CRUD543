<?php

namespace Backend;

class login
{
    public function index()
    {
        mostrarTela('Login');
    }
    public function logar(){
        $email = $_POST['email'];
        
        $senha = $_POST['senha'];


        $db = bancoDados::conectar();
        $stmt = $db->prepare("SELECT senha FROM usuarios WHERE email = :e");
        $stmt->execute(['e' => $email]);
        $verificar = $stmt->fetch();
        var_dump($verificar);
        if ($senha == $verificar['senha']){
            redirecionar('crud');
        }else{
            redirecionar("login");
        }
    }
}
