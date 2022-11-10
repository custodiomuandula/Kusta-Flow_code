<?php 
    include './meno.php';

?>
<style>
     
     .container-fluid .container{
            width: 400px;
        }
       
        .container img{
            width: 350px;
        }
        
        .d-flex{
            justify-content: space-evenly;
            flex-wrap: wrap;
        }
        footer{
            background-color: bisque;
            position: relative;
            bottom: 0;
            width: 100%;
        }
</style>

<div class="container-fluid my-5 d-flex">
          <div class="container border m-3">
              <h4>Bolo 1</h4>
              <img src="./bolo1.webp" alt="">
          </div>
          <div class="container border m-3">
            <h4>Bolo 2</h4>
            <img src="./bolo2.jpg" alt="">
        </div>
        <div class="container border m-3">
            <h4>Bolo 3</h4>
            <img src="./bolo3.jpg" alt="">
        </div>
      </div>

      <footer>
          info da empresa
      </footer>
