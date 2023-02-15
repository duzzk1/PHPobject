<?php 

class Usuario {
  public $nome = 'Sem nome';
  public $idade = 0;
  public $peso= 0;
  public $altura= 0;

  public function showData(){
    echo "Nome: $this->nome";
    echo '<br/>';
    echo "Idade: $this->idade";
    echo '<br/>';
    echo "Peso: $this->peso";
    echo '<br/>';
    echo "Altura: $this->altura";
    echo '<br/>';
  }

  public function getIMC(){
    $imc = $this->peso/($this->altura*$this->altura);
    echo "Seu IMC é $imc";
  }
}





?>

<!DOCTYPE html>
<html lang="pt_br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="post">
    <label for="inp_nome">Nome:</label>
    <input type="text" id="inp_nome" name="inp_nome">
    <label for="inp_idade">Idade:</label>
    <input type="text" id="inp_idade" name="inp_idade">
    <label for="inp_peso">Peso:</label>
    <input type="text" id="inp_peso" name="inp_peso">
    <label for="inp_altura">Altura:</label>
    <input type="text" id="inp_altura" name="inp_altura">
    <input type="submit" value="Enviar" name="enviar" id="enviar">
    <label for="getIMC">Mostrar IMC:</label>
    <input type="checkbox" name="getIMC" id="getIMC">
  </form>
  
  <?php 
  if (isset ($_POST["enviar"])){
    $user = new Usuario;
    $user->nome = $_POST['inp_nome'];
    $user->idade = $_POST['inp_idade'];
    $user->peso = $_POST['inp_peso'];
    $user->altura = $_POST['inp_altura'];
    $user->showData();
  }
  
  if (isset($_POST['getIMC'])){
    $user->getIMC();
  }
  ?>
  
</body>
</html>