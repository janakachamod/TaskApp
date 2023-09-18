<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="text-center">
            <h1>Task Manage</h1>
        </div>
        <diV class="row">
            <div class="col col-md-12 p-4 mt-3">
            @foreach($errors->all() as $error)
                    <div class="alert alert-danger" type="alert">
                        {{$error}}
                    </div>
                    @endforeach
                <form method="post" action="/savetask">
                    {{csrf_field()}}
                  
                <input type="text" class="form-control" name="task" placeholder="insert your daily tasks"/><br/>
                <input type="submit" class="btn btn-outline-primary" value="save"/>
                <input type="submit" class="btn btn-outline-warning" value="cancel"/>
                </form>
               
            </div>
            <table class="table table-dark my-3">
                <th>Id</th>
                <th>task</th>
                <th>iscompleted</th>
                <th>action</th>
                @foreach($tasks as $task)
                <tr>
                    <td>{{$task->id}}</td>
                    <td>{{$task->task}}</td>
                   
                    <td>
                        @if($task->iscompleted)
                        <button class="btn btn-primary ">completed</button>
                        @else
                        <button class="btn btn-warning">not-completed</button>
                        @endif
                    </td>
                    <td>
                        <a href="/markascompleted/{{$task->id}}" class="btn btn-primary">mark As compleated</a>
                    </td>

                </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>
</html>