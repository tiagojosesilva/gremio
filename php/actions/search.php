 <?php

 $nome=$_POST["cxnome"];
 $pesquisa=$_POST['pesquisar'];

  if(isset($pesquisa)&&!empty($nome))
   {
  $stmt = $con->prepare("SELECT * FROM noticia WHERE id LIKE :letra");
  $stmt->bindValue(':letra', '%'.$nome.'%', PDO::PARAM_STR);
  $stmt->execute();
  $resultados = $stmt->rowCount();

  if($resultados>=1){

  echo "Resultado(s) encontrado(s): ".$resultados."<br /><br />";
  while($reg = $stmt->fetch(PDO::FETCH_OBJ))
   {
     echo $reg->nome." - ";
     echo $reg->email."<br />";
   }
 }
 else
   {
 echo "Essa noticia não existe";
   }
 }
   else{
 echo "Preencha o campo de pesquisa";
 }
 ?>