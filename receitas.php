<?php
    include_once './meno.php';
    require 'conexcao.php';
  $dados=  receita();

    

?>

<h3>Lista de Receitas</h3>

<table class="table table-borderless">

    <thead>
        <th>Nome</th>
        <th>ingredientes</th>
         <th>confeiteira</th>
        <th>modo_preparo</th>
        <th>tipo</th>
        <th>data_criacao</th>
        <th>data_actualizacao</th>
       
    </thead>

    <tbody>
        <?php foreach ($dados as $key ) { ?>
            <tr>
            <td><?php echo $key->nome?></td>
            <td><?php echo $key->ingredientes ?></td>
            <td><?php echo $key->Nome ?></td>
            <td><?php echo $key->modo_preparo ?></td>
            <td><?php echo $key->nome?></td>
            <td><?php echo $key->data_criacao?></td>
            <td><?php echo $key->data_actualizacao?></td>
            </tr>
            
        <?php } ?>
    </tbody>

</table>
