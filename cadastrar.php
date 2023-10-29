<?php

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/listagem.php';

require_once __DIR__ . '/Vaga.class.php';
require_once __DIR__ . '/Tabela.class.php';

extract($_POST);

if(
    isset($nome) and
    isset($idade) and
    isset($cpf) and
    isset($contato) and
    isset($email) and
    isset($cargo)) {
        $obFuncionario = new Vaga;
        $obFuncionario->nome = $nome;
        $obFuncionario->idade = $idade;
        $obFuncionario->cpf = $cpf;
        $obFuncionario->telefone = $contato;
        $obFuncionario->email = $email;
        $obFuncionario->cargo = $cargo;
        $obFuncionario->cadastrarFuncionario();

        header('location: index.php?status=success');
        exit;
    }