<?php
  require_once('functions.php');
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar Motorista</h2>

<form action="edit.php?id=<?php echo $motorista['id']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Nome</label>
      <input type="text" class="form-control" name="motorista['nome']" value="<?php echo $motorista['nome']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">CPF</label>
      <input type="text" id="cpf" class="form-control" name="motorista['cpf']" value="<?php echo $motorista['cpf']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Data de Nascimento</label>
      <input type="text" id="datadenascimento" class="form-control" name="motorista['datanascimento']" value="<?php echo $motorista['datanascimento']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Modelo do carro</label>
      <input type="text" class="form-control" name="motorista['modelocarro']" value="<?php echo $motorista['datanascimento']; ?>">
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-5">
      <label for="campo1">Sexo</label>
      <select name="motorista['sexo']" value="<?php echo $motorista['sexo']; ?>">
        <option value="Masculino">Masculino</option>
        <option value="Feminino">Feminino</option>
      </select>
    </div>
  </div>

  <div class="row">
    <div class="form-group col-md-5">
      <label for="campo1">Status</label>
      <select name="motorista['status']" value="<?php echo $motorista['status']; ?>">
        <option value="Ativo">Ativo</option>
        <option value="Inativo">Inativo</option>
      </select>
    </div>
  </div>

  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>
