<?php

session_start();


require './LoginDAO.php';

//CAPTURAR A VARIÁVEL DO BOTÃO DE ENTRAR PARA TER CERTEZA QUE FOI BOTÃO QUE FOI CLICADO E ENVIOU OS DADOS DO FORMULÁRIO
$btLogin = filter_input(INPUT_POST, 'btLogin', FILTER_SANITIZE_STRING);

//Verifica se os dados foram enviados pelo botão como name btLogin

if ($btLogin) {
    $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

    if (!(empty($usuario)) AND ! (empty($senha))) {
        //FAZER BUSCA NA BASE DE DADOS
        $loginDao = new LoginDAO();
        //O MÉTODO DE AUTENTICAÇÃO1 APENAS VERIFICA SE OS VALORES EXISTEM E SEU RETORNO É TRUE OU FALSE.
        //O MÉTODO DE AUTENTICAÇÃO2 VERIFICA SE OS VALORES EXISTEM E RETORNA UM ARRAY NOME DO USUÁRIO E CARGO CORRESPONDENTE PARA O USUÁRIO E SENHA
        //CORRESPONDENTE

        $resultado = $loginDao->autenticacao2($usuario, $senha);

        if (!(empty($resultado))) {

            foreach ($resultado as $valor) {
                $_SESSION['usuario'] = $valor['nomeUsuario'];
                $_SESSION['cargo'] = $valor['cargo'];
            }

            //$_SESSION['usuario'] = $usuario;
            header('Location: administracao.php');
        } else {
            //USUÁRIO NÃO EXISTE NA BASE DE DADOS OU OS DADOS PESQUISADOS ESTÃO INCORRETOS
            $_SESSION['mensagem'] = '0';
            header('Location: index.php');
        }
    } else {
        //OS CAMPOS ESTÃO EM BRANCO
        $_SESSION['mensagem'] = "1";
        header('Location: index.php');
    }
} else {
    $_SESSION['mensagem'] = 'Botão não clicado';
    header('Location:index.php');
}