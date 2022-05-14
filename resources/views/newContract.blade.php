<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/kfs_moonbase.css">
  <title>Document</title>
</head>

<body>
  <div class="rec_container">
    <form class="row g-3" method="POST" action="/create_contract">
      @csrf
      <div class="col-12">
        <label for="number" class="form-label">Номер договора</label>
        <input type="text" class="form-control" aria-label="Номер договора" id="number" name="number" required>
      </div>
      <div class="col-12">
        <label for="employer" class="form-label">Заказчик</label>
        <input type="text" class="form-control" aria-label="Заказчик" name="employer" required>
      </div>
      <div class="col-12">
        <label for="code" class="form-label">Код</label>
        <input type="text" class="form-control" aria-label="Код" id="code" name="code" required>
      </div>
      <div class="col-12">
        <label for="beginning" class="form-label">Дата заключения договора</label>
        <input type="date" class="form-control" aria-label="Дата заключения договора" name="beginning" required>
      </div>
      <div class="col-12">
        <label for="deadline" class="form-label">Срок исполнения договора</label>
        <input type="date" class="form-control" aria-label="Срок исполнения договора" id="deadline" name="deadline" required>
      </div>
      <div class="col-12">
        <label for="contract_subject" class="form-label">Предмет договора</label>
        <input type="text" class="form-control" aria-label="Предмет договора" name="contract_subject" required>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary" id="new_contract">Заключить</button>
      </div>
    </form>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="/js/admin_moonbase.js"></script>
</body>

</html>