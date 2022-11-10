<?php
    include_once './meno.php';
    require 'conexcao.php';
   $dados= cliente();
  

    

?>
<h3>Lista de Clientes</h3>
<table class="table table-borderless">

    <thead>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Telefone Alternativo</th>
        <th>Email</th>
        <th>Endereco</th>
    </thead>

    <tbody>
        <?php foreach ($dados as $key ) { ?>
            <tr>
            <td><?php echo $key->nome?></td>
            <td><?php echo $key->telefone?></td>
            <td><?php echo $key->telefone_alternativo?></td>
            <td><?php echo $key->email?></td>
            <td><?php echo $key->endereco?></td>
            </tr>
           
        <?php } ?>
    </tbody>

</table>

<div class="container-fluid"><a href="./registarClientes.php" class="btn btn-info">Registar Novos Clientes</a></div>

