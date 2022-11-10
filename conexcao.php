
<?php
try{
    $conexao = new PDO ("mysql:dbname=bolos; host=localhost:3306","root","");
} catch (PDOException $e){echo "Erro na conexao: ".$e->getMessage();}
catch (Exception $e) {echo "Errro Generico".$e->getMessage();}


function insert($sql, $inf) {
    global $conexao; 


    $stmt = $conexao->prepare($sql);

    return $stmt->execute($inf);

}


function bolo() {
    global $conexao;

    $sql =  "SELECT bolo.Nome,tipo_bolo.nome,bolo.tamanho,bolo.preco,bolo.decoracao FROM bolo JOIN tipo_bolo WHERE tipo_bolo.id=bolo.tipo";

   

    
    $stmt = $conexao->prepare($sql);
      $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_OBJ);
}

function cliente() {
    global $conexao;

     $sql =  "SELECT * FROM  cliente";

   

    
    $stmt = $conexao->prepare($sql);
      $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_OBJ);
}

function confeiteras() {
  global $conexao;

   $sql =  "select * from confeiteira";

 

  
  $stmt = $conexao->prepare($sql);
    $stmt->execute();

  return $stmt->fetchAll(PDO::FETCH_OBJ);
}

function encomeda($nome) {
  global $conexao;

$sql= "SELECT * FROM cliente WHERE cliente.id = :encontrar";
  
  $stmt = $conexao->prepare($sql);
    $stmt->execute($nome);

  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function receita() {
  global $conexao;

$sql= "SELECT receita.id,receita.ingredientes,confeiteira.Nome,receita.modo_preparo, receita.info_adicional,tipo_bolo.nome,receita.data_criacao,receita.data_actualizacao
 FROM receita INNER JOIN tipo_bolo ON receita.tipo = tipo_bolo.id INNER JOIN confeiteira ON receita.confeiteira_id = confeiteira.id;";
  
  $stmt = $conexao->prepare($sql);
    $stmt->execute();

  return $stmt->fetchAll(PDO::FETCH_OBJ);
}

function pendetes() {
  global $conexao;

$sql= "SELECT encomenda.id, cliente.nome,bolo.Nome,encomenda.data_encomenda,encomenda.valor_pagar,encomenda.estado FROM
 encomenda JOIN cliente on cliente.id= encomenda.cliente JOIN bolo on bolo.id=encomenda.bolo WHERE encomenda.estado= 'pendente'";
  
  $stmt = $conexao->prepare($sql);
    $stmt->execute();

  return $stmt->fetchAll(PDO::FETCH_OBJ);
}

function pagas() {
  global $conexao;

$sql= "SELECT encomenda.id, cliente.nome,bolo.Nome,encomenda.data_encomenda,encomenda.valor_pagar,encomenda.estado FROM
 encomenda JOIN cliente on cliente.id= encomenda.cliente JOIN bolo on bolo.id=encomenda.bolo WHERE encomenda.estado= 'concluido'";
  
  $stmt = $conexao->prepare($sql);
   

  return $stmt->fetchAll(PDO::FETCH_OBJ);
}

function updete($dados) {
  global $conexao;

   $sql =  "UPDATE encomenda SET encomenda.estado = 'concluido' WHERE encomenda.id= :id ";  

  $stmt = $conexao->prepare($sql);
    $stmt->execute($dados);

  //return $stmt->fetch(PDO::FETCH_ASSOC);
}

