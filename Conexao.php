<?php





/**
 * Description of Conexao
 *
 * @author danielle
 */
require './configuracoes.php';

class Conexao {

    //put your code here
    private static $host = ENDERECO;
    private static $dbName = BASE_DE_DADOS;
    private static $usuario = USUARIO;
    private static $senha = SENHA;
    private static $conexao = null;

   

    public static function conectar() {
        try {
            self::$conexao = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$dbName, self::$usuario, self::$senha);
        } catch (Exception $ex) {
            echo "Erro ao conectar com a base de dados" . $ex->getMessage();
            die;
        }
        return self::$conexao;
    }

    public static function desconetar() {

        return self::$conexao = null;
    }

}
