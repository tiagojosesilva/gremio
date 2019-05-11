<?php 
// session_start();
// if (isset($_SESSION['id'])) {
//     header('location: ../index.php');
//     exit();
// } 
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
  <link rel="stylesheet" href="../css/post_noticias.css" />
  <script src="../js/jquery.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

  <script src="../ckeditor/ckeditor.js"></script>

</head>

<body>

  <?php include '../components/header-menu.php' ?>

  <form style="max-width: 800px; margin: 50px auto 300px auto;">
    <div class="container-titulo">
      <input type="text" placeholder="Titulo" class="input">
      <button type="submit" class="botao">Postar</button>
    </div>
    <textarea name="editor1" id="editor1" rows="10" cols="80">
                This is my textarea to be replaced with CKEditor.
            </textarea>
    <script>
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      CKEDITOR.replace('editor1');
    </script>
  </form>

  <?php include '../components/footer.php' ?>
</body>

</html>