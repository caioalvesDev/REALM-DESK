<style>

  /* body > nav{
    background-color: #0c114d;
  }
  */
  .nav-link{
    color: white;
  } 

</style>


<nav  class="navbar navbar-dark bg-black">
      <div class="container">
      <a class="navbar-brand" href="home.php">
        <img src="logo2.png" width="30" height="30" class="d-inline-block align-top" alt="">
        REALM-DESK
      </a>
      
      <?php if (isset($_SESSION['autenticado'])) {?>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="logoff.php">SAIR</a>
          </li>
        </ul>
      <?php } ?>
      </div>
</nav>