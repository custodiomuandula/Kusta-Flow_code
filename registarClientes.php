<?php
    include_once './meno.php';
    require 'conexcao.php';

?>


<h2>Registar Novo Cliente</h2>

<div class="container">

    <form action="cod_registarClite.php" method="post">
        <div>
            <label class="form-label">Nome do Cliente:</label>
            <input type="text" class="form-control" name="nome">
        </div>
        <div>
            <label class="form-label">Telefone:</label>
            <input type="text" class="form-control" name="tel">
        </div>
        <div>
            <label class="form-label"> Telefone Alternativo:</label>
            <input type="text" class="form-control" name="tel_al">
        </div>
        <div>
            <label class="form-label">Email:</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div>
            <label class="form-label">Endereco:</label>
            <input type="text" class="form-control" name="endereco">
        </div>

        <button name="enviar" type="submit" class="btn btn-success mt-3">Criar</button>

    </form>

</div>