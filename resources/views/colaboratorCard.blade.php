<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/kfs_moonbase.css">
  <title>Card</title>
</head>

<body>
  <h3>{{$card->surname}} {{$card->name}} {{$card->patronymic}}</h3>
  <div class="card_footer">
    <div class="recruitment">
      <button class="btn btn-primary recruitment_btn" onclick="location.href=`{{route('reRecruitment', ['id' =>$card->id])}}`">Нанять сорудника</button>
    </div>
    <div class="dismissal">
      <button class="btn btn-danger dismissal_btn" onclick="location.href=`{{route('dismiss', ['id' =>$card->id])}}`">Уволить сорудника</button>
    </div>
  </div>
  <div class="rec_container">
    <form class="row g-3" method="POST" action="/updateCard">
      @csrf
      <div class="row g-3">
        <div class="col">
          <label for="inputId" class="form-label">ID</label>
          <input type="text" class="form-control" value={{$card->id}} id="inputId" name="id" readonly>
        </div>
        <div class="col">
          <label for="inputSurname" class="form-label">Фамилия</label>
          <input type="text" class="form-control" value={{$card->surname}} id="inputSurname" name="surname">
        </div>
        <div class="col">
          <label for="inputName" class="form-label">Имя</label>
          <input type="text" class="form-control" value={{$card->name}} id="inputName" name="name">
        </div>
        <div class="col">
          <label for="inputPatronimic" class="form-label">Отчество</label>
          <input type="text" class="form-control" value={{$card->patronymic}} id="inputPatronimic" name="patronymic">
        </div>
      </div>
      <div class="col-12">
        <label for="inputDepartment" class="form-label">Департамент</label>
        <input type="text" class="form-control" id="inputDepartment" value={{$card->department}} name="department" required>
      </div>
      <div class="col-12">
        <label for="inputPosition" class="form-label">Должность</label>
        <input type="text" class="form-control" id="inputPosition" value={{$card->position}} name="position" required>
      </div>
      <div class="col-12">
        <label for="inputStatus" class="form-label">Статус</label>
        <input type="text" class="form-control" id="inputStatus" value={{$card->status}} name="status" readonly>
      </div>
      <div class="col-12">
        <label for="inputContract" class="form-label">Договор</label>
        <input type="text" class="form-control tel" id="inputContract" value={{$card->contract}} name="contract">
      </div>
      <div class="col-12">
        <label for="inputClearance" class="form-label">Допуск РСП</label>
        <input type="text" class="form-control" id="inputClearance" value={{$card->clearance}} name="clearance" readonly>
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Адрес</label>
        <input type="text" class="form-control" id="inputAddress" value={{$card->address}} name="address" required>
      </div>
      <div class="col-12">
        <label for="inputTelefon" class="form-label">Номер телефона</label>
        <input type="text" class="form-control" id="inputTelefon" value={{$card->telefone}} name="telefone" required>
      </div>
      <div class="col-12">
        <label for="inputCharacteristic" class="form-label">Характеристика</label>
        <input type="text" class="form-control" id="inputCharacteristic" value="{{$card->characteristic}}" name="characteristic">
      </div>
      <div class="card_btn">
        <div class="update">
          <button class="btn btn-primary update_btn">Сохранить изменения</button>
        </div>

      </div>
    </form>


  </div>
  <script>
    let recBtn = document.querySelector('.recruitment_btn');
    let dismBtn = document.querySelector('.dismissal_btn');
    let id = document.getElementById('inputStatus');
    if (id.value === '0') {
      dismBtn.setAttribute('disabled', true);
      recBtn.removeAttribute('disabled');
    }
    if (id.value === '1') {
      recBtn.setAttribute('disabled', true);
      dismBtn.removeAttribute('disabled');
    }
  </script>
</body>

</html>