<?php

use Tabela;

class Vaga{

  /**
   * ID do funcionario
   *
   * @var integer
   */
  public $id;

  /**
   * Nome do funcionario
   *
   * @var string
   */
  public $nome;

  /**
   * Idade do funcionario
   *
   * @var integer
   */
  public $idade;

  /**
   * CPF do funcionario
   *
   * @var string
   */
  public $cpf;

  /**
   * Telefone do funcionario
   *
   * @var string
   */
  public $telefone;

  /**
   * Email do funcionario
   *
   * @var string
   */
  public $email;

  /**
   * Cargo do funcionario
   *
   * @var string
   */
  public $cargo;

  /**
   * Data de registro do funcionario
   *
   * @var string timestamp
   */
  public $data;


  public function cadastrarFuncionario(){
    //DEFINIR DATA
    $this->data = date('Y-m-d H:i:s');

    //INSERIR VAGA NO BANCO
    $obTabela = new Tabela('funcionarios');
    $this->id = $obTabela->insert($values = [
                                                        'nome'     => $this->nome,
                                                        'idade'    => $this->idade,
                                                        'cpf'      => $this->cpf,
                                                        'telefone' => $this->telefone,
                                                        'email'    => $this->email,
                                                        'cargo'    => $this->cargo,
                                                        'data'     => $this->data
                                                    ]);
   //RETORNA SUCESSO
   return true;
  }

}