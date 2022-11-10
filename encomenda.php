<?php 
    include_once './meno.php';
    session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="./js/bootstrap.min.js">
</head>
<body>
<div>
    <form action="cod_encomendas.php" method="post">

        <div class="container">
            <h3>Encomenda</h3>
            <div>
                <label class="form-label">Cliente codigo:</label>
                <input type="text" class="form-control" name="codigo">
            </div>

            <div>
                <label class="form-label">Bolo:</label>
                <input type="text" class="form-control" name="bolo">
            </div>

            <div>
                <label class="form-label">Data da Encomenda:</label>
                <input type="date" class="form-control" name="data_enc">
            </div>
            <div>
                <label class="form-label">Data da Entrega:</label>
                <input type="date" class="form-control" name="data_entr">
            </div>
            <div>
                <label class="form-label">Endereco da Entrega:</label>
                <input type="text" class="form-control" name="endereco">
            </div>
            <div>
                <label class="form-label">Contacto da Entrega:</label>
                <input type="text" class="form-control" name="contacto">
            </div>
            <div>
                <label class="form-label">Valor a pagar:</label>
                <input type="text" class="form-control" name="valor">
            </div>

            <button name="enviar" type="submit" class="btn btn-success mt-3">Criar</button>
        </div>

    </form>
</div>
    
</body>
</html>

