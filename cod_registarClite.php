<?php
 
    require 'conexcao.php';
    $sql = "insert into  cliente (nome ,telefone, telefone_alternativo, email,endereco ) VALUES (:nome,:tel,:tel_at,:email,:endereco)";

    $nome = $_POST['nome'];
    $telefone = $_POST['tel'];
    $telefone_alt=$_POST['tel_al'];
    $email=$_POST['email'];
    $endereco=$_POST['endereco'];

    $inf = [
        'nome' => $nome,
        'telefone' => $telefone,
        'telefone_alternativo'=>$telefone_alt,
        'email'=>$email,
        'endereco'=>$endereco
        ];
    
        insert($sql,$inf);

   
?>