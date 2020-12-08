
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cadastro</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h2>Cadastro de Pessoas</h2>
    <form action="gravar.php" method="post">
   
  <div class="form-group">
    <label for="exampleFormControlInput1">Nome:</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name ="nome" placeholder="fulano">
  </div>

 <div class="form-group">
    <label for="exampleFormControlInput1">Nascimento:</label>
    <input type="date" class="form-control" id="exampleFormControlInput1" name ="nascimento" placeholder="fulano">
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Sexo</label>
    <select class="form-control" id="exampleFormControlSelect1" name="sexo">
      <option>Masculino</option>
      <option>Feminino</option>
    </select>
  </div>

 <div class="form-group">
    <label for="exampleFormControlInput1">Altura:</label>
    <input type="number" step="any" class="form-control" id="exampleFormControlInput1" name ="altura" placeholder="fulano">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Peso:</label>
    <input type="number" class="form-control" id="exampleFormControlInput1" name ="peso" placeholder="fulano">
  </div>

<button type="submit" class="btn btn-dark">Salvar</button>

</form>


</body>
</html>

