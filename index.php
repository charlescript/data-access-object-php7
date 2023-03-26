<?php

require_once("config.php");

// $sql = new Sql();
// $usuarios = $sql->select("SELECT * FROM tb_usuarios");
// echo json_encode($usuarios);


// Carrega 1 usuário
// $root = new Usuario();
// $root->loadById(4);
// echo $root;

// Carrega lista de usuários
// $lista = Usuario::getList();
// echo json_encode($lista);


// Encontra login no banco de dados
// $search = Usuario::search("Sql");
// echo json_encode($search);


// Carrega usuário usando login e senha
// $usuario = new Usuario();
// $usuario->login("Oracle Database","Especialista");
// echo $usuario;



//Insere usuário através de procedure
// $aluno = new Usuario();
// $aluno->setDeslogin("Google");
// $aluno->setDessenha("Google Docs");
// $aluno->insert();
// echo $aluno;


//Insere usuário através de procedure e com método construtur
// $aluno = new Usuario("Junior","1234567");
// $aluno->insert();
// echo $aluno;



// // Atualiza o usuário
// $user = new Usuario();
// $user->loadById(15);
// $user->update("Halflawren","teste");
// echo $user;


// Deleta usuario
$user = new Usuario();
$user->loadById(15);
$user->delete();

echo $user;
?>