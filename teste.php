<?php

/*
  require './LoginDAO.php';
  $loginDao = new LoginDAO();
  $resultado = $loginDao ->autenticacao2("admin", "admin");
  if(!(empty($resultado))){
  var_dump($resultado);
  }else{
  echo "verificar outra forma";
  }
  require './OrgaoDao.php';
  $orgao = new OrgaoDao();
  $resultado = $orgao->buscarTodos();
  $retorno = array(
  "data"=> $resultado
  );
  echo json_encode($retorno);
  function urlBase(){
  return "http://localhost:8888/AgendaReuniao/";
  }
  include '../AgendaReuniao/includes/endereco.php';
  echo URL_BASE;
 * 
 */

require './OrgaoDAO.php';


$orgaoDao = new OrgaoDao();


$resultado = $orgaoDao->adicionar("teste1");

var_dump($resultado);
