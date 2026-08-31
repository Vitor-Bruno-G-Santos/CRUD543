<?php 
namespace Backend;

use PDO;
use PDOException;

class bancoDados
{

    private static $instacia = null;
    private $conexao;

    private function __construct()
    {
        $db     =  [
            'host'      =>  'localhost',
            'dbname'    =>  'CRUD543',
            'usuario'   =>  'root',
            'senha'     =>  ''
        ];
        try {
            $dsn = "mysql:host={$db['host']};dbname={$db['dbname']};charset=utf8mb4";
            $this->conexao = new PDO($dsn, $db['usuario'], $db['senha']);
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION,);
            $this->conexao->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erro" . $e->getMessage();
        }
    }
    public static function conectar()
    {
        if (self::$instacia === null) {
            self::$instacia = new self;
        }
        return self::$instacia->conexao;
    }
}
