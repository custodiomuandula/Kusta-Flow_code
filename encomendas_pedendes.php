<?php
    include_once './meno.php';
    require 'conexcao.php';
  $dados=  pendetes();

    

?>

<h3>Lista de Emcomenadas penedentes</h3>

<table class="table table-borderless">

    <thead>
         <th>codigo da encomeda</th>
        <th>nome do bolo</th>
        <th>nome do cleiete</th>
        <th>data_encomenda</th>
        <th>Preco</th>
        <th>estado</th>
    </thead>

    <tbody>
        <?php foreach ($dados as $key ) { ?>
            <tr>
             <td><?php echo $key->id?></td>
            <td><?php echo $key->Nome?></td>
            <td><?php echo $key->nome ?></td>
            <td><?php echo $key->data_encomenda ?></td>
            <td><?php echo $key->valor_pagar ?></td>
            <td><?php echo $key->estado ?></td>
            </tr>
            
        <?php } ?>
    </tbody>
  
</table>



