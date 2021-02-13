<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OrgaoDao
 *
 * @author danielle
 */
require './Conexao.php';

class OrgaoDao {

    //put your code here
    private static $conexao = null;

    public function __construct() {
        self::$conexao = Conexao::conectar();
    }

    public function __destruct() {
        self::$conexao = Conexao::desconetar();
    }

    public function adicionar($nome) {
        $orgaoAdicionado = false;

        $sql = "INSERT INTO orgao (nome)VALUES(?)";
        $resultadoSql = self::$conexao->prepare($sql);
        $resultadoSql->bindParam(1, $nome, PDO::PARAM_STR);
        $resultadoSql->execute();

        if ($resultadoSql->rowCount() > 0) {
            $orgaoAdicionado = true;
        }

        return $orgaoAdicionado;
    }

    public function buscarTodos() {

        $valores = array();
        $sql = "SELECT * FROM orgao ";
        $resultadoSql = self::$conexao->prepare($sql);
        $resultadoSql->execute();

        if ($resultadoSql->rowCount() > 0) {
            //retorna um array
            $valores = $resultadoSql->fetchAll(PDO::FETCH_ASSOC);
        }

        return $valores;
    }

    public function atualizar($id, $nome) {
        $orgaoAtualizado = false;
        //É IMPORTANTE LEMBRAR QUE O RETORNO NUNCA SERÁ FALSE. ISSO ACONTECE PORQUE O COMANDO UPDATE É EXCECUTADO MESMO 
        //QUE UM ID NÃO EXISTA E O RETORNO É VERDADEIRO, PORÉM ZERO LINHAS SÃO AFETADAS 

        $sql = "UPDATE orgao SET nome=? WHERE idOrgao=?";
        $resultadoSql = self::$conexao->prepare($sql);
        $resultadoSql->bindParam(1, $nome, PDO::PARAM_STR);
        $resultadoSql->bindParam(2, $id, PDO::PARAM_INT);
        $resultadoSql->execute();

        if ($resultadoSql->rowCount() > 0) {
            $orgaoAtualizado = true;
        }
        return $orgaoAtualizado;
    }

}
