<?php 
require_once('functions.php'); 
add();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Novo Evento</h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Nome do Evento</label>
      <input type="text" class="form-control" name="event['name']">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">CNPJ / CPF (Responsável)</label>
      <input type="text" class="form-control" name="event['cpf_cnpj']">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Data</label>
      <input type="text" class="form-control" name="event['date']">
    </div>
  </div>
  
  <div class="row">
    <div class="form-group col-md-5">
      <label for="campo1">Endereço</label>
      <input type="text" class="form-control" name="event['address']">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Bairro</label>
      <input type="text" class="form-control" name="event['hood']">
    </div>
    
    <div class="form-group col-md-2">
      <label for="campo3">CEP</label>
      <input type="text" class="form-control" name="event['zip_code']">
    </div>
    
    <div class="form-group col-md-2">
      <label for="campo3">Data de Cadastro</label>
      <input type="text" class="form-control" name="event['created']" disabled>
    </div>
  </div>
  
  <div class="row">
    <div class="form-group col-md-3">
      <label for="campo1">Município</label>
      <input type="text" class="form-control" name="event['city']">
    </div>

    <div class="form-group col-md-1">
      <label for="campo3">UF</label>
      <input type="text" class="form-control" name="event['state']">
    </div>

    <div class="form-group col-md-2">
      <label for="campo2">Telefone (opcional)</label>
      <input type="text" class="form-control" name="event['phone']">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Celular</label>
      <input type="text" class="form-control" name="event['mobile']">
    </div>
  </div>
  
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>