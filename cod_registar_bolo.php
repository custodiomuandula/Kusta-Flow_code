<?php
require 'conexcao.php';

$sql="insert  into bolo (nome, tipo,tamanho,preco,decoracao)  VALUES (:nome,:tipo,:tamanho,:preco,:decoracao)";

$nome= $_POST['nome'];
$tipo=$_POST['tipo'];
$tamanho=$_POST['tamanho'];
$preco=$_POST['preco'];
$decoracao=$_POST['decoracao'];

$inf =[
'nome'=>$nome,
'tipo'=>$tipo,
'tamanho'=>$tamanho,
'preco'=>$preco,
'decoracao'=>$decoracao

];

insert($sql,$inf);