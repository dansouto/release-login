<?php

// CONEXÃO COM BANCO DE DADOS -> PERSONALITE_ARUAN
try {

    $pdo = new PDO("mysql:dbname=personalite_aruan; host=localhost", "root","root");
   
} 

catch (PDOException $e) {
    echo "Erro com o banco de dados". $e->getMessage();//
}   
catch (Exception $e){
    echo "Erro genérico". $e->getMessage();;
}
?>