<?php require_once "validador_acesso.php" ?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>REALM-DESK</title>

    <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <style>
      .card-abrir-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

  <?= include_once './templates/navbar.php' ?>

    <div class="container">    
      <div class="row">

        <div class="card-abrir-chamado">
         
        <?php 
          if(isset($_SESSION['status']) && $_SESSION['status'] === true){
            require_once './templates/success.php';
            unset($_SESSION['status']);
          } else if (isset($_SESSION['status']) && $_SESSION['status'] === false) {
            require_once './templates/danger.php';
            unset($_SESSION['status']);
          }
        ?>
          
          <div class="card">
            <div class="card-header">              
              <strong>Abertura de chamado</strong>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  
                  <form method="post" action="registra_chamado.php">
                    <div class="form-group">
                      <label>Título</label>
                      <input name="titulo" type="text" class="form-control" placeholder="Título">
                    </div>
                    
                    <div class="form-group mt-2">
                      <label>Categoria</label>
                      <select name="categoria" class="form-control">
                        <option disabled  selected >Por Favor, Selecione uma categoria</option>
                        <option>Criação Usuário</option>
                        <option>Impressora</option>
                        <option>Hardware</option>
                        <option>Software</option>
                        <option>Rede</option>
                      </select>
                    </div>
                    
                    <div class="form-group mt-2">
                      <label>Descrição</label>
                      <textarea name="descricao" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="row mt-5">
                      <div class="col-6">
                        <a class="btn btn-lg btn-danger btn-block" href="home.php">Voltar Para Menu</a>
                      </div>

                      <div class="col-6">
                        <button class="btn btn-lg btn-primary btn-block" name ='submit'type="submit">Abrir Chamado</button>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>