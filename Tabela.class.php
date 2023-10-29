<?php

use PDO;
use PDOException;

class Tabela{

    /**
     * Nome do local do banco de dados
     * @var string HOST
     */
  const HOST = 'localhost';

  /**
   * Nome do banco de dados
   * @var string NAME
   */
  const NAME = 'wolpert_empresa';

  /**
   * Usuario para acessar o banco de dados
   * @var string USER
   */
  const USER = 'root';

  /**
   * Senha do usuario para acessar o banco de dados
   * @var string PASS
   */
  const PASS = 'toor';

  /**
   * Nome da tabela que sera manipulada
   * @var string $table
   */
  private $table;

  /**
   * Instancia de conexao com o banco de dados
   * @var PDO
   */
  private $connection;

  public function __construct($table){
    $this->table = $table;
    $this->setConnection();
  }

  public function setConnection(){
    try{
      $this->connection = new PDO('mysql:host='.self::HOST. ';dbname='.self::NAME, self::USER, self::PASS);
      $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
      die('ERROR: ' .$e->getMessage());
    }
  }

  public function executarSQL($query, $params = []){
    try{
      $statement = $this->connection->prepare($query);
      $statement->execute($params);
      return $statement;
    } catch(PDOException $e){
      'ERROR: ' .$e->getMessage();
    }
  }

  public function insert($values){
    //DADOS DA QUERY
    $fields = array_keys($values);
    $binds  = array_pad([], count($fields), '?');

    //MONTA A QUERY
    $query = 'INSERT INTO '.$this->table.' ('.implode(',', $fields).') VALUES ('.implode(',', $binds).')';

    //EXECUTA A QUERY
    $this->executarSQL($query, array_values($values));
    
    //RETORNA O ID INSERIDO
    return $this->connection->lastInsertId();
  }

}