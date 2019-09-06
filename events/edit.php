<?php 
require_once('functions.php'); 
edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar Evento</h2>

<form action="edit.php?id=<?php echo $event['id']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Nome do Evento</label>
      <input type="text" class="form-control" name="event['name']" value="<?php echo $event['name']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">CNPJ / CPF (Responsável)</label>
      <input type="text" class="form-control" name="event['cpf_cnpj']" value="<?php echo $event['cpf_cnpj']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Data</label>
      <input type="text" class="form-control" name="event['date']" value="<?php echo $event['birthdate']; ?>">
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-5">
      <label for="campo1">Endereço</label>
      <input type="text" class="form-control" name="event['address']" value="<?php echo $event['address']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Bairro</label>
      <input type="text" class="form-control" name="event['hood']" value="<?php echo $event['hood']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">CEP</label>
      <input type="text" class="form-control" name="event['zip_code']" value="<?php echo $event['zip_code']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Data de Cadastro</label>
      <input type="text" class="form-control" name="event['created']" disabled value="<?php echo $event['created']; ?>">
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-3">
      <label for="campo1">Município</label>
      <input type="text" class="form-control" name="event['city']" value="<?php echo $event['city']; ?>">
    </div>

    <div class="form-group col-md-1">
      <label for="campo3">UF</label>
      <input type="text" class="form-control" name="event['state']" value="<?php echo $event['state']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo2">Telefone</label>
      <input type="text" class="form-control" name="event['phone']" value="<?php echo $event['phone']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Celular</label>
      <input type="text" class="form-control" name="event['mobile']" value="<?php echo $event['mobile']; ?>">
    </div>
  </div>

  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-secondary">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>