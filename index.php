
<?php require 'header.php' ?>
<br><br><br><br>


  <div class="row">
    <div class="col s4">

    </div>
    <div class="col s3">

<form class="" action="index.php" method="post">
  <fieldset class="fieldset1">
    <legend >Informações</legend>

<div class="row">
  <div class="input-field col s8">
    <input id="nome_relatorio" name="nome_relatorio" type="text">
    <label class="active" for="nome_relatorio">Nome do Relatório</label>
    </div>
</div>

<div class="row">
  <div class="input-field col s8">
    <input id="tipo_relatorio" name="tipo_relatorio" type="text">
    <label class="active" for="tipo_relatorio">Tipo</label>
    </div>
</div>

<div class="row">
  <div class="input-field col s8">
    <input id="categoria_relatorio" name="categoria_relatorio" type="text">
    <label class="active" for="nome_relatorio">Categoria</label>
    </div>
</div>


<div class="row">
 <div class="input-field col s8">
  <input id="descricao_relatorio" name="descricao_relatorio" type="text">
  <label class="active" for="descricao_relatorio">Descrição</label>
</div>
</div>
<input class="btn waves-effect waves-light" type="submit" name="action" value="Enviar">
    <button type="reset" name="Cancelar" value="Cancelar" class="waves-effect waves-green btn">
      <i class="tiny material-icons right">cancel</i>Cancelar
    </button>
</div>



</fieldset>
</form>
    </div>
<!-- daqui pra baixo tem  a parte que serio o controler -->

<?php
if (isset($_POST["nome_relatorio"]) && isset($_POST["tipo_relatorio"]) && isset($_POST["categoria_relatorio"]) && isset($_POST["descricao_relatorio"]))
{
  $relatorio = new Relatorio($_POST["nome_relatorio"],$_POST["tipo_relatorio"],$_POST["categoria_relatorio"],$_POST["descricao_relatorio"]);
 //$relatorio->exibir();
 $relatorio->gravar();

}
 ?>

<?php require 'footer.php' ?>
