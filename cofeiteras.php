<?php
    include_once './meno.php';
    require 'conexcao.php';
   $dados= confeiteras();
  

    

?>
<h3>confeiteras</h3>
<table class="table table-borderless">

    <thead>
        <th>Nome</th>
        <th>genero</th>
        <th>telefone</th>
        <th>telefone_alternativo</th>
        <th>email</th>
        <th>website</th>
        <th>endereco</th>
    </thead>

    <tbody>
        <?php foreach ($dados as $key ) { ?>
            <tr>
            <td><?php echo $key->Nome?></td>
            <td><?php echo $key->genero?></td>
            <td><?php echo $key->telefone?></td>
            <td><?php echo $key->telefone_alternativo?></td>
            <td><?php echo $key->email?></td>
            <td><?php echo $key->website?></td>
            <td><?php echo $key->endereco?></td>
            </tr>
           
        <?php } ?>
    </tbody>

</table>
