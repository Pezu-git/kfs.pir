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
            <div class="btn btn-warning"><a href="/">На главную</a></div>
            <div class="recruitment">
                <button class="btn btn-primary recruitment_btn">Нанять сорудника</button>
            </div>
        </div>
        <form method="POST" action={{route('search')}} class="header_search">
            @csrf
            <input type="text" class="form-control" name="search">
            <button type="submit" class="btn btn-primary search_btn">Найти</button>
        </form>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr class="table-primary">
                <th>ID</th>
                <th>Фамилия</th>
                <th>Имя</th>
                <th>Отчество</th>
                <th>Департамент</th>
                <th>Должность</th>
                <th>Статус</th>
                <th>Наличие допуска</th>
                <th>Адрес места жительства</th>
                <th>Контактный телефон</th>
                <th>Иные данные</th>
            </tr>
        </thead>
        <tbody>
            @foreach($colaborators as $worker)
            <tr class="colabor_table">
                <td>{{$worker->id}}</td>
                <td><a href='/card/{{$worker->id}}' class='surname'>{{$worker->surname}}</a></td>
                <td>{{$worker->name}}</td>
                <td>{{$worker->patronymic}}</td>
                <td>{{$worker->department}}</td>
                <td>{{$worker->position}}</td>
                <td class="status">{{$worker->status}}</td>
                <td>{{$worker->clearance}}</td>
                <td>{{$worker->address}}</td>
                <td>{{$worker->telefone}}</td>
                <td>{{$worker->characteristic}}</td>
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