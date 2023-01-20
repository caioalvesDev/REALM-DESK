<html>
  <head>
    <meta charset="utf-8" />
    <title>REALM-DESK</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

  <?= include_once './templates/navbar.php' ?>

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
               <strong>Login</strong>
            </div>
            <div class="card-body">
              <form action="valida_login.php" method="post">

              <div class="form-floating mb-3">
                <input name="email" type="email" class="form-control" id="floatingInput" placeholder="nome@exemplo.com">
                <label for="floatingInput">E-mail</label>
              </div>
              <div class="form-floating  mb-3">
                <input name="senha" type="password" class="form-control" id="floatingPassword" placeholder="Senha">
                <label for="floatingPassword">Senha</label>
              </div>

                <!-- <div class="form-group">
                  <input name="email" type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group mt-3">
                  <input name="senha" type="password" class="form-control" placeholder="Senha">
                </div> -->

                <?php if(isset($_GET['login']) && $_GET['login'] == 'erro') { ?>
      
                  <div class="alert alert-danger mt-3" role="alert">
                    Usuário ou senha inválido(s)
                  </div>

                <?php } ?>

                <?php if(isset($_GET['login']) && $_GET['login'] == 'erro2') { ?>

                  <div class="text-danger">
                    Faça login antes de acessar as páginas protegidas
                  </div>
                  
                <?php } ?>
                <div class="d-grid">
                  <button class="btn btn-lg btn-primary  btn-block  mt-2" type="submit">Entrar</button>

                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>