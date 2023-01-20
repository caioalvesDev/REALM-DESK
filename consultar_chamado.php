<?php require_once "validador_acesso.php" ?>

<?php

  //chamados
  $chamados = array();

  //abrir o arquivo.hd
  $arquivo = fopen(__DIR__.'./arquivo.hd', 'r');

  //enquanto houver registros (linhas) a serem recuperados
  while(!feof($arquivo)) { //testa pelo fim de um arquivo
    //linhas  
    $registro = fgets($arquivo);
    $chamados[] = $registro;
  }

  //fechar o arquivo aberto
  fclose($arquivo);
  
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>REALM-DESK</title>

      <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <style>
      .card-consultar-chamado {
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

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              <strong>Consulta de chamado</strong>
            </div>
            
            <div class="card-body">

              <?php foreach($chamados as $chamado) { ?>
              
                <?php

                  $chamado_dados = explode('#', $chamado);

                  //
                  if($_SESSION['perfil_id'] == 2) {
                    //só vamos exibir o chamado, se ele foi criado pelo usuário
                    if($_SESSION['id'] != $chamado_dados[0]) {
                      continue;
                    }
                  }

                  if(count($chamado_dados) < 3) {
                    continue;
                  }

                ?>
                <div class="card mb-3 bg-light">
                  <div class="card-header">
                  <p class="card-text"><strong><?=$chamado_dados[4]?></strong></p>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><?=$chamado_dados[1]?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?=$chamado_dados[2]?></h6>
                    <p class="card-text"><?=$chamado_dados[3]?></p>
                    

                  </div>
                </div>

              <?php } ?>

              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-danger btn-block" href="home.php">Voltar Para Menu</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>