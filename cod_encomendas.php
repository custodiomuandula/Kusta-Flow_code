<?php
session_start();
require 'conexcao.php';
$sql= " insert into  encomenda (cliente,bolo,data_encomenda,data_entrega,endereco_entrega,contacto_entrega,valor_pagar ) 
VALUES  (:cliente,:bolo,:data_encomenda,:data_entrega,:endereco_entrega,:contacto_entrega,:valor_pagar)";

$cleinte=$_POST['codigo'];
$bolo=$_POST['bolo'];
//$nome=$_POST['nome'];
$data_encomenda=$_POST['data_enc'];
$data_entrega=$_POST['data_entr'];
$endreco_entrega=$_POST['endereco'];
$contacto_entrega=$_POST['contacto'];
$valor_pagar=$_POST['valor'];

$inf=[
    'cliente'=>$cleinte,
    'bolo'=>$bolo,
    'data_encomenda'=>$data_encomenda,
    'data_entrega'=>$data_entrega,
    'endereco_entrega'=>$endreco_entrega,
    'contacto_entrega'=>$contacto_entrega,
    'valor_pagar'=>$valor_pagar
];

insert($sql,$inf);

          

        //   $data = encomeda([':encotrar'=> $cleinte]);

         

        //     print_r($data);
           
        //    if($nome == encomeda([':encotrar'=> $cleinte])){

         
         
        //     echo $nome;


        //    } 
           
        
         
            
       


            



// $dados=cliente();

// if(isset($_post['enviar'])){

//  $cleinte=$_POST['Cliente'];
// $bolo=$_POST['bolo'];
// $data_encomenda=$_POST['data_enc'];
// $data_entrega=$_POST['data_entr'];
// $endreco_entrega=$_POST['endereco'];
// $contacto_entrega=$_POST['contacto'];
// $valor_pagar=$_POST['valor'];

//     $cleinte=$_POST['cliente'];
//     $cleinte_id="";
//     foreach($dados as $key){
//         if($key->nome == $cleinte){
//            $cleinte_id=$key->id;


//         }
        

//     }

    
// $sql= " insert into  encomenda (cliente,bolo,data_encomenda,data_entrega,endereco_entrega,contacto_entrega,valor_pagar ) 
// valus (:cliente,:bolo,:data_encomenda,:data_entrega,:endereco_entrega,:contacto_entrega,:valor_pagar)";

// $inf=[
//     'cliente'=>$cleinte,
//     'bolo'=>$bolo,
//     'data_encomenda'=>$data_encomenda,
//     'data_entrega'=>$data_entrega,
//     'endereco_entrega'=>$endreco_entrega,
//     'contacto_entrega'=>$contacto_entrega,
//     'valor_pagar'=>$valor_pagar
// ];

//            insert($sql,$inf);

// }






