<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Gremio Campus do Amor</title>
  <link rel="stylesheet" href="../css/linearicons.css" />
  <link rel="stylesheet" href="../css/font-awesome.min.css" />
  <link rel="stylesheet" href="../css/magnific-popup.css" />
  <link rel="stylesheet" href="../css/nice-select.css" />
  <link rel="stylesheet" href="../css/owl.carousel.css" />
  <link rel="stylesheet" href="../css/bootstrap.css" />
  <link rel="stylesheet" href="../css/bootstrap-datepicker.css" />
  <link rel="stylesheet" href="../css/themify-icons.css" />
  <link rel="stylesheet" href="../css/main.css" />
  <link rel="stylesheet" href="../css/flex.css">

  <link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">
</head>
<body>
  <?php include '../components/header-menu.php' ?>
  <section class="container my-5 cadastro" >
      <div class="my-5 text-center">
        <span class="h6 d-block">Crie sua conta</span>
      </div>
      <div class="row justify-content-center">
        <form class="col-lg-6" action="../bd/crud/addUser.php" method="POST">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputNome">Nome</label>
              <input type="text" class="form-control" id="inputNome" placeholder="Nome" name="nome">
            </div>
            <div class="form-group col-md-6">
              <label for="inputCPF">Sobrenome</label>
              <input type="text" class="form-control" id="inputCPF" placeholder="Sobrenome" name="sobrenome">
            </div>
            <div class="form-group col-md-12">
              <label for="inputCidade">Cidade</label>
              <input type="text" class="form-control" id="inputCidade" name="cidade">
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail">Email</label>
              <input type="email" class="form-control" id="inputEmail" placeholder="Seu email" name="email">
            </div>
            <div class="form-group col-md-6">
              <label for="inputSenha">Número da matricula</label>
              <input type="text" class="form-control" id="inputSenha" placeholder="Nº da matricula" name="matricula">
            </div>
            <div class="form-group col-md-6">
              <label for="inputNome">Senha</label>

              <input type="password" class="form-control" id="inputNome" placeholder="Senha" name="senha">
            </div>
            <div class="form-group col-md-6">
              <label for="inputCPF">Confirmar senha</label>
              <input type="password" class="form-control" id="inputCPF" placeholder="Confirmar senha" name="confirmarsenha">
            </div>
          </div>
           
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input botao-check">
              Concordo com os <a href="#">Termos e Condições</a>.
            </label>

          </div>
          
          <button type="submit" class="btn btn-primary btn-lg btnSubmit">Criar conta</button>
          

        </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php include '../components/footer.php' ?>
  <script src="../js/senha.js"></script>
</body>
</html>