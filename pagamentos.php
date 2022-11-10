
<?php
    include_once './meno.php';
    require 'conexcao.php';
  $dados=  pagas();

    

?>


<div class="container">
    <form action="pagamentos.php" method="post">
            <div> 
                <label class="form-label">codigo da encomenda:</label>
                <input type="text" class="form-control" name="codigo">
            </div>
            <div>
                <label class="form-label">Valor a pagar:</label>
                <input type="text" class="form-control" name="valor">
            </div>
            <button name="enviar" type="submit" class="btn btn-success mt-3">pagar</button>
    </form>        
</div>

<?php


 $data = updete([':id'  => $_POST['codigo']]);