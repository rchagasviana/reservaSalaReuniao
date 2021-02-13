<?php

session_start();

include './OrgaoDAO.php';

$botao = filter_input(INPUT_POST, 'botaoOrgao', FILTER_SANITIZE_STRING);

//VERIFICA SE O BOTÃO FOI CLICADO  E SE USUÁRIO É UM USUÁRIO ONLINE QUE ESTÁ ENVIANDO OS VALORES
if (($botao) AND ( isset($_SESSION['usuario']))) {


    $nome = filter_input(INPUT_POST, 'nomeOrgao', FILTER_SANITIZE_STRING);
    $id = filter_input(INPUT_POST, 'idOrgaoAtualizar', FILTER_SANITIZE_NUMBER_INT);

    switch ($botao) {
        case 'Adicionar':
            //echo 'Adicionando';
            if (!(empty($nome))) {
                $orgaoDao = new OrgaoDao();
                $resultado = $orgaoDao->adicionar($nome);
                $_SESSION['mensagemAdicionado'] = $resultado;
                header('Location:orgao.php');
            } else {
                $_SESSION['mensagemAdicionadoCampoVazio'] = true;
                header('Location:orgao.php');
            }
            break;
        case 'Atualizar':
            $orgaoDao = new OrgaoDao();
            $resultado = $orgaoDao->atualizar($id, $nome);
            $_SESSION['mensagemAtualizacao'] = $resultado;
            header("Location: orgao.php");
            break;
        case 'Excluir':
            echo 'Excluindo';
            break;
        /* A CONDIÇÃO DEFAULT SERÁ EXECUTADA QUANDO UM USUÁRIO COM ACESSO PERMITIDO MODIFICAR 
          O VALOR DO BOTÃO APENAS NO JAVASCRIPT. ESSA CONDIÇÃO SIMULARIA UM TESTE DE VALIDAÇÃO
         * DO SISTEMA. POR EXEMPLO, UM USUÁRIO COLOCAR COMO VALOR DO ATRUBUTO VALUE UM NOME DIFERENTE DOS MOSTRADOS
         * NOS CASOS ANTERIORES: Adicionar,Atualizar,Excluir
         *          */
        default:
            unset($_SESSION['usuario']);
            header('Location: index.php');
            break;
    }


//CASO A REQUISIÇÃO SEJA FEITA DE FORMA MANUAL SEM O AUXÍLIO DO BOTÃO, AINDA QUE A VARIÁVEL DE SESSÃO EXISTA, 
//O USUÁRIO É ENVIADO PARA PÁGINA INICIAL
} else {
    //CASO O USUÁRIO TENTE ACESSAR A PÁGINA DIRETAMENTE ESTANDO ONLINE,
    // A VARIÁVEL DE SESSÃO É DESTRUÍDA E ELE É DESCONECTADO DO SISTEMA
    if (isset($_SESSION['usuario'])) {
        unset($_SESSION['usuario']);
    }
    header('Location: index.php');
}