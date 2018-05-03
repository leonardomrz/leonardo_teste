<?php
  require_once('functions.php');
  add();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Novo Cliente</h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Nome</label>
      <input type="text" class="form-control" name="cliente['nome']" placeholder="Nome" required>
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">CPF</label>
      <input type="text" id="cpf" class="form-control" name="cliente['cpf']" maxlength="11" placeholder="000.000.000-00" required>
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Data de Nascimento</label>
      <input type="text" id="datadenascimento" class="form-control" name="cliente['datanascimento']" placeholder="0000-00-00" required>
    </div>
  </div>

  <div class="row">
    <div class="form-group col-md-5">
      <label for="campo4">Sexo</label>
      <select name="cliente['sexo']">
        <option value="Masculino">Masculino</option>
        <option value="Feminino">Feminino</option>
      </select>
    </div>


  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>
