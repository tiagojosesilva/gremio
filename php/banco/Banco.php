<?php

Class Banco {
  private $pdo;
  
  public function __construct($dbname, $host, $user, $senha) {
  
    try {
      $this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host, $user, $senha);
    
    } catch (PDOException $e) {
      echo "Erro com banco de dados: ".$e->getMessage();
      exit();

    } catch (Exception $e) {
      $this->erro = $e;
      echo "Erro generico: ".$e->getMessage();
      exit();      
    }
  }

  public function buscarPessoa() {
    $dadosUsuarios = array();
    $select = $this->pdo->query("SELECT * FROM USUARIO");
    $dadosUsuarios = $select->fetchAll(PDO::FETCH_ASSOC);
    return $dadosUsuarios;
  }
 
  public function checarEmail($email) {
    $select = $this->pdo->prepare("SELECT ID FROM USUARIO WHERE EMAIL = :email");
    $select->bindValue(":email", $email);
    $select->execute();

    if ($select->rowCount() > 0) {
      return false;
    } else {
      return true;
    }
   
  }

  public function cadastrarUsuario($dados) {
    if($this->checarEmail($dados["EMAIL"])) {
      
      $insert = $this->pdo->prepare("INSERT INTO USUARIO (NOME, SOBRENOME, SENHA, EMAIL) VALUES (:nome, :sobrenome, :senha, :email)");
      $insert->bindValue(":nome", $_POST["NOME"]);
      $insert->bindValue(":sobrenome", $_POST["SOBRENOME"]);
      $insert->bindValue(":senha", $_POST["SENHA"]);
      $insert->bindValue(":email", $_POST["EMAIL"]);
      $insert->execute();
      return true;
    } else {
      echo "usuario ja cadastrado";
      return false;
    }
  }

  public function logar($email, $senha) {
    $select = $this->pdo->prepare("SELECT ID FROM USUARIO WHERE EMAIL = :email AND SENHA = :senha");
    $select->bindValue(":email", $email);
    $select->bindValue(":senha", $senha);  
    $select->execute();
    $merda = $select->rowCount() < 0;
    echo $select->rowCount() ;
    
    if($select->rowCount() > 0) {
      echo "oi";
      $dadosUsuarios = $select->fetch();
      $id = $dadosUsuarios['ID'];
      $usuarioLogado = $this->pdo->prepare("SELECT *  FROM USUARIO WHERE ID = :id ");
      $usuarioLogado->bindValue(":id", $id);
      $usuarioLogado->execute();
      $usuarioLogadoDados = $usuarioLogado->fetchAll(PDO::FETCH_ASSOC);
      
      session_start();
      
      $_SESSION["ID"] = $usuarioLogadoDados[0]["ID"];
      $_SESSION["NOME"] = $usuarioLogadoDados[0]["NOME"];
      $_SESSION["SOBRENOME"] = $usuarioLogadoDados[0]["SOBRENOME"];
      $_SESSION["EMAIL"] = $usuarioLogadoDados[0]["EMAIL"];

      return true;
      $_SESSION["LOG_ERRO"] = "TUDO CERTO =)";

    } else {
      $_SESSION["LOG_ERRO"] = "E-mail ou senha está incorreto";
      return false;
    }
  }
  
}
?>