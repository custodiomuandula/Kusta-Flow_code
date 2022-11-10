<?php
    include_once './meno.php';
?>


<h2>Registar Novo Bolos</h2>

<div class="container">

    <form action="cod_registar_bolo.php " method="post">
    <div>
            <label for="" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome">
        </div>
    <div>
            <label for="" class="form-label">Tipo de Bolo:</label>
            <select name="tipo" id="" class="form-select">
                <option value="tipo1"></option>
                <option value="tipo1">1</option>
                <option value="tipo1">2</option>
                <option value="tipo1">3</option>
                <option value="tipo1">4</option>
            </select>
        </div>

        <div>
            <label for="" class="form-label">Tamanho do bolo:</label>
            <select name="tamanho" id="" class="form-select">
                <option value="">pequeno</option>
                <option value="">medio</option>
                <option value="">grande</option>
            </select>
        </div>

        <div>
            <label for="" class="form-label">Preco</label>
            <input type="number" class="form-control" name="preco">
        </div>
        <div>
            <label for="" class="form-label">Decoracao:</label>
            <input type="text" class="form-control" name="decoracao">
        </div>
        </div>

        <button name="enviar" type="submit" class="btn btn-success mt-3">Criar</button>

    </form>

</div>