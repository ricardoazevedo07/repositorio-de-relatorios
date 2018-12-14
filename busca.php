<?php require 'header.php'; ?>


<br><br><br><br>
<form class="" action="busca.php" method="post">
  <div class="row">
    <div class="col s4">

    </div>
      <div class="input-field col s4">
        <input value="" id="nome" name="nome" type="text" class="validate">
        <label class="active" for="nome">Nome do relatorio</label>
        <input class="btn waves-effect waves-light" type="submit" name="action" value="Buscar">

            <button type="reset" name="Cancelar" value="Cancelar" class="waves-effect waves-green btn">
              <i class="tiny material-icons right">cancel</i>Cancelar
            </button>
      </div>



      </div>
    </div>


</form>
<?php
if (isset($_POST['nome'])) {
  $c = new Relatorio(" "," "," "," ");
  $c->buscar($_POST['nome']);
}
 ?>






<?php require 'footer.php'; ?>
