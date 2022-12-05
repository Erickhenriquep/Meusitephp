<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link rel="stylesheet" href="estiloadmin.css">
    <link rel="stylesheet" href="Assets/css/bootstrap.min.css">

    <title>Login Admin</title>

  </head>


   
<body class="d-flex h-100 text-center text-bg-dark">
    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">Art Music School</h3>
    </div>
  </header>

  <main class="row g-3">
    <h1>Painel Admin</h1>
    <p class="lead"></p>
    <p class="lead">
     <div>
      <form class="form-signin" action="acesso.php" method="post">
      <h1 class="h3 mb-3 font-weight-normal"></h1>
      <label for="inputEmail" class="h3 form-label ">Usuário:</label>
      <div class="h3 mb-3 font-weight-normal">       
          <input type="text" name="login" class="col-3" placeholder="" required autofocus>
      </div>
      <label for="inputPassword" class="h3 form-label">Senha:</label>
      <div class="h3 mb-3 font-weight-normal">      
          <input type="password" name="senha" class="col-3" placeholder="" required>
      </div>
      <button class="btn btn-lg btn-secondary fw-bold border-white bg-dark" type="submit">Entrar</button>
    </form>
    </p>
  </main>
  <!-- JavaScript Bundle with Popper -->
  <script src="Assets/js/jquery-3.6.1.min.js"></script>
  <script src="Assets/js/popper.min.js"></script>
  <script src="Assets/js/bootstrap.min.js"></script>
  </body>
</html>