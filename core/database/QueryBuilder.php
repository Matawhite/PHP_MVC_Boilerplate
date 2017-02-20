<?php

class QueryBuilder
{
  protected $pdo;

  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }

  public function selectAll($table)
  {
    $statement = $this->pdo->prepare("select * from {$table}");

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS);
  }

  public function insert($table, $parameters)
  // consider using map over implode for an easier read 

  {
    $sql = sprintf(
      'insert into %s (%s) values (%s)',
      //arguement 1
      $table,
      //arguement 2
      implode(', ', array_keys($parameters)),
      //arguement 3
      ':' . implode(', :', array_keys($parameters))
    );

    try{
      $statement = $this->pdo->prepare($sql);

      $statement->execute($parameters);
    }catch(Exception $e){
      die('Whoops something went wrong');
    }
  }
}
