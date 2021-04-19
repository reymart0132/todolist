<?php
class config{
  private $user= 'root';
  private $password= 'admin123';
  public $pdo = null;

  public function con(){
    try {
      $this->pdo = new PDO('mysql:host=localhost;dbname=todolist',$this->user,$this->password);
    } catch (PDOException $e) {
      die($e->getMessage());
    }
    return $this->pdo;
  }
}
 ?>
