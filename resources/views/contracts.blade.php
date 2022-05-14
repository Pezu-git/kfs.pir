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
                <button class="btn btn-primary contract_btn">Заключить договор</button>
            </div>
        </div>
        <form method="POST" action={{route('search_contracts')}} class="header_search">
            @csrf
            <input type="text" class="form-control" name="search">
            <button type="submit" class="btn btn-primary search_btn">Найти</button>
        </form>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr class="table-primary">
                <th>Закзчик</th>
                <th>Предмет договора</th>
                <th>Код договора</th>
                <th>Дата начала работ</th>
                <th>Дата окончания работ</th>
                <th>Номер договора</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contracts as $task)
            <tr class="colabor_table">
                <td><a href='/contract/{{$task->id}}' class='employer'>{{$task->employer}}</a></td>
                <td>{{$task->contract_subject}}</td>
                <td>{{$task->code}}</td>
                <td>{{$task->beginning}}</td>
                <td>{{$task->deadline}}</td>
                <td>{{$task->number}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/js/admin_moonbase.js"></script>
    <script>
        let contractBtn = document.querySelector('.contract_btn');
        let table = document.querySelectorAll('.colabor_table');
        let status = document.querySelectorAll('.status');

        contractBtn.addEventListener('click', () => {
            location = 'http://127.0.0.1:8000/new_contract'
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