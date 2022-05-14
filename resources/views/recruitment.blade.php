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
        <form class="row g-3" method="POST" action="/recruitment">
            @csrf
            <div class="row g-3">
                <div class="col">
                  <input type="text" class="form-control" placeholder="Департамент" aria-label="Департамент" name="department" required>
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Должность" aria-label="Должность" name="position" required>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Договор" aria-label="Договор" name="contract" required>
                  </div>
            </div>
            <div class="row g-3">
                <div class="col">
                  <input type="text" class="form-control" placeholder="Фамилия" aria-label="Фамилия" id="inputSurname" name="surname" required>
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Имя" aria-label="Имя" id="inputName" name="name" required>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Отчество" aria-label="Отчество" id="inputPatronimic" name="patronymic" required>
                  </div>
            </div>
            <div class="col-12">
              <label for="inputAddress" class="form-label">Адрес</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="Проспект Ленина" name="address" required>
            </div>
            <div class="col-12">
              <label for="inputAddress2" class="form-label">Адрес 2</label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="Квартира" name="address2" required>
            </div>
            <div class="col-12">
                <label for="inputTelefon" class="form-label">Телефон</label>
                <input type="number" class="form-control tel" id="inputTelefon" placeholder="84957716543" name="telefone" required>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary" id="recruitment">Нанять</button>
            </div>
          </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/js/admin_moonbase.js"></script>
</body>
</html>