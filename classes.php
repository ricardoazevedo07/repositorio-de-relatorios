<?php
/**
 *
 */
 require 'dbconnect.php';

class Relatorio
{
  private $nome;
  private $tipo;
  private $categoria;
  private $descricao;

  function __construct($nome,$tipo,$categoria,$descricao)
  {
    $this->nome = $nome;
    $this->tipo = $tipo;
    $this->categoria = $categoria;
    $this->descricao = $descricao;
  }
  function gravar(){
 $query = "INSERT INTO `ined_relatorio`(`nome_relatorio`, `tipo_relatorio`, `categoria_relatorio`, `descricao_relatorio`) VALUES ('$this->nome','$this->tipo','$this->categoria','$this->descricao')";
 echo $query;
 //INSERT INTO `ined_relatorio`(`id_relatorio`, `nome_relatorio`, `tipo_relatorio`, `categoria_relatorio`, `descricao_relatorio`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5])
 $banco = new DBController();
 //Esse if verifica se o banco aceitou o registro
 if ($banco->insertDB($query)) {
   echo "<h1>Relatorio inserido com sucesso</h1>";
   sleep(4);
   header("location:index.php");
 } else {
   echo "<h1>Falha ao inserir relatorio</h1>";
   sleep(4);
   header("location:index.php");
 }
 //echo "Fui Gravado";
  }

  function remover($id){
    $query = "delete from ined_relatorios where id=$id";
    $banco = DBController();
    if ($banco->removeBD($query)) {
      echo "<h1>Relatorio removido com sucesso</h1>";
      sleep(4);
      header("location:relatorios.php");
    } else {
      echo "<h1>Relatorio não removido</h1>";
      sleep(4);
      header("location:relatorios.php");
    }
  }
function exibir(){
  echo " <div class='row'>
      <div class='col s3 m2'>
        <div class='card blue-grey darken-1'>
          <div class='card-content white-text'>
            <span class='card-title'>$this->nome</span>
            <p>$this->descricao</p>
          </div>
          <div class='card-action'>
            <a href='#'>Alterar</a>
            <a href='#'>Excluir</a>
          </div>
        </div>
      </div>
    </div>" ;
}
function listar(){
  $query = "select *from ined_relatorio";
  $banco = new DBController();
  $relats = $banco->selectDB($query);
  foreach ($relats as $relat) {
    $cartao = new Relatorio($relat['nome_relatorio'],$relat['tipo_relatorio'], $relat['categoria_relatorio'], $relat['descricao_relatorio']);
    $cartao->exibir();
  }
}
function buscar($nome){
  $query = "SELECT * FROM `ined_relatorio` WHERE nome_relatorio like '%$nome%'";
  $banco = new DBController();
  $relats = $banco->selectDB($query);
  foreach ($relats as $relat) {
    $cartao = new Relatorio($relat['nome_relatorio'],$relat['tipo_relatorio'], $relat['categoria_relatorio'], $relat['descricao_relatorio']);
    $cartao->exibir();
  }
}
}

//<p><?php echo "$this->$descricao";</p>

 ?>
