<?php 
session_start();
if (isset($_SESSION['id'])) {
    header('location: ../index.php');
    exit();
} 
?>
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
  <link rel="stylesheet" href="../css/style.css" />
  <script src="../js/jquery.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

</head>
<body>
  <?php include '../components/header-menu.php' ?>
  <section class="container my-5" >
      <div class="d-flex justify-content-center">
        <form class="col-lg-6" action="" method = "POST">
          <div class="form-row">
            <div class="form-group col-md-6">
              
                <div id="alert_matricula"></div>
                <?php if (isset($_SESSION['cadastrado_sucesso'])) {?>
                  <label style="color: blue"> Cadastrado com sucesso</label>
                <?php } ?>
              <input type="text" id="login" class="form-control" name="matricula" placeholder="matricula">
            </div>
            <div class="form-group col-md-7">
              <input type="password" id="password" class="form-control" name="senha" placeholder="senha">
                <div id="alert_senha"></div>
            </div>                 
            <input type="submit" class="btn btn-success" id="btn-login" value="entrar">
            <input type="submit" class="btn btn-warning" value="Esqueceu a senha?">
          </div>
          </div>       
        </form>      
            </div>
          </div>
        </div>
      </div>
    </section>  
  <?php include '../components/footer.php' ?>
  <?php
    //unset($_SESSION['erroLogin']);
  ?>
  <script>
        $(document).ready(function(){
            $("#btn-login").click(function(e){
                e.preventDefault();
                var matricula = $("input#login").val();
                var senha = $("input#password").val();
                $.ajax({
                    url: "../php/verifLogin.php",
                    type: 'POST',
                    data: {matricula: matricula, senha: senha},
                    success: function(retorno){
                        if(retorno=='senha incorreta'){
                            $("div#alert_login").fadeOut();
                            $("input#login").removeClass('red');
                            $("div#alert_senha").show();
                            $("div#alert_senha").html("Senha incorreta");
                            $("input#password").addClass('red'); 
                        }
                        else if(retorno=='matricula nao existe'){
                            $("div#alert_senha").fadeOut();
                            $("input#password").removeClass('red'); 
                            $("div#alert_matricula").show();
                            $("div#alert_matricula").html("Matrícula não existe");
                            $("input#login").addClass('red');

                        }
                        else{
                            location.reload();
                        }
                    }

                });
            });
        });
  </script>
</body>
</html>