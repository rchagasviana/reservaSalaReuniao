<?php

/**
 * Description of LoginDAO
 *
 * @author Rafael Viana
 */
include './Conexao.php';

class LoginDAO {

    //put your code here
    private static $conexao = null;

    public function __construct() {
        self::$conexao = Conexao::conectar();
    }

    public function __destruct() {
        self::$conexao = Conexao::desconetar();
    }

    public function autenticacao($usuario, $senha) {
        $usuarioEncontrado = false;
        $sql = "SELECT usuario,senha FROM usuarios WHERE usuario=? AND senha=?";

        $resultadoSql = self::$conexao->prepare($sql);
        $resultadoSql->bindParam(1, $usuario, PDO::PARAM_STR);
        $resultadoSql->bindParam(2, $senha, PDO::PARAM_STR);
        $resultadoSql->execute();

        if ($resultadoSql->rowCount() > 0) {
            $usuarioEncontrado = true;
        }
        return $usuarioEncontrado;
    }

    public function autenticacao2($usuario, $senha) {

        $valores = array();

        $sql = "SELECT usuario,senha,nomeUsuario,cargo FROM usuarios WHERE usuario=? AND senha=?";
        
        
        $resultadoSql = self::$conexao->prepare($sql);
        $resultadoSql->bindParam(1, $usuario, PDO::PARAM_STR);
        $resultadoSql->bindParam(2, $senha, PDO::PARAM_STR);
        $resultadoSql->execute();

        if ($resultadoSql->rowCount() > 0) {
            //retorna um array
            $valores = $resultadoSql->fetchAll(PDO::FETCH_ASSOC);
        }

        return $valores;
    }

}
