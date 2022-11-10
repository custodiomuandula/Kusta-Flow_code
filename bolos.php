<?php
    include_once './meno.php';
    require 'conexcao.php';
  $dados=  bolo();

    

?>

<h3>Lista de Bolos</h3>

<table class="table table-borderless">

    <thead>
        <th>Nome</th>
        <th>Tipo</th>
        <th>Tamanho</th>
        <th>Preco</th>
        <th>Decoracao</th>
    </thead>

    <tbody>
        <?php foreach ($dados as $key ) { ?>
            <tr>
            <td><?php echo $key->Nome?></td>
            <td><?php echo $key->nome ?></td>
            <td><?php echo $key->tamanho ?></td>
            <td><?php echo $key->preco ?></td>
            <td><?php echo $key->decoracao ?></td>
            </tr>
            
        <?php } ?>
    </tbody>

</table>

<div class="container-fluid"><a href="./registarBolos.php" class="btn btn-info">Registar Novos Bolos</a></div>

