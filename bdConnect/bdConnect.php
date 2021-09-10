<?php

function bdConnect (){
    
  $servidor = '127.0.0.1';
  $porta = '3306';
  $banco = 'goip';
  $usuario = 'root';
  $senha = '0000000';

  $conn = new PDO("mysql:host=$servidor;port=$porta;dbname=$banco;charset=utf8", $usuario, $senha, array(PDO::ATTR_PERSISTENT => true));
        return $conn;
   }
 
?>



<?php
try {
    $hostname = "127.0.0.1";
    $dbname = "goip";
    $username = "root";
    $pw = "0000000";
    $pdo = new PDO ("mysql:host=$hostname;dbname=$dbname","$username","$pw",array(PDO::ATTR_PERSISTENT => true));
    return $conn;
 }  catch (PDOException $e) {
    echo "Erro de Conexão " . $e->getMessage() . "\n";
    exit;
  }
      $query = $pdo->prepare("select * FROM goip");
      $query->execute();

      for($i=0; $row = $query->fetch(); $i++){
        echo $i." - ".$row['id']."<br/>";
      }

      unset($pdo);
      unset($query);
?>
~       