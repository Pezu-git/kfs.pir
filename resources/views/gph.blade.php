<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/kfs_moonbase.css">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Colaborators</title>
</head>

<body>
  <div class="header_menu">
    <div class="header_btn">
      <div class="recruitment">
        <div class="btn btn-warning"><a href="/">На главную</a></div>
        <button class="btn btn-primary recruitment_btn">Заключить договор</button>
      </div>
    </div>
    <form method="POST" action="/find_recrut" class="header_search">
      @csrf
      <input type="text" class="form-control" name="search">
      <button type="submit" class="btn btn-primary search_btn">Найти</button>
    </form>


  </div>
  <table class="table table-bordered">
    <thead>
      <tr class="table-primary">
        <th>ID</th>
        <th>Код объекта</th>
        <th>Предмет договора</th>
        <th>Фамилия работника</th>
        <th>Имя работника</th>
        <th>Отчество работника</th>
        <th>Дата закключения договора</th>
        <th>Номер договора</th>
      </tr>
    </thead>
    <tbody>
      @foreach($contracts as $task)
      <tr class="colabor_table">
        <td><a href='/gph/{{$task->id}}' class='employer'>{{$task->id}}</a></td>
        <td>{{$task->code}}</td>
        <td>{{$task->contract_subject}}</td>
        <td>{{$task->surname}}</td>
        <td>{{$task->name}}</td>
        <td>{{$task->patronymic}}</td>
        <td>{{$task->beginning}}</td>
        <td>{{$task->number}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="/js/admin_moonbase.js"></script>
  <script>
    let recBtn = document.querySelector('.recruitment_btn');
    let table = document.querySelectorAll('.colabor_table');
    let status = document.querySelectorAll('.status');

    recBtn.addEventListener('click', () => {
      location = 'http://127.0.0.1:8000/recruitmentPage'
    })


    for (let i = 0; i < status.length; i++) {
      if (status[i].innerText === '1') {
        table[i].classList.toggle('table-success');
      } else {
        table[i].classList.toggle('table-danger');
      }
    }
  </script>
</body>

</html>