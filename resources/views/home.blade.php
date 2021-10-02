<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Elequent CRUD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style>
        .marginTop{
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h1>Enter Student Details</h1>
                <form action="{{ route('create') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Enter your name</label>
                        <input type="text" id="name" class="form-control" name="name" placeholder="Enter your Name">
                    </div>
                    <div class="form-group">
                        <label for="city">Enter your City</label>
                        <input type="city" id="city" class="form-control" name="city" placeholder="Enter your City">
                    </div>
                    <div class="form-group">
                        <label for="marks">Enter your Marks</label>
                        <input type="number" id="marks" class="form-control" name="marks" placeholder="Enter your Marks">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
                @if (session()->has('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
            <div class="col-md-6 marginTop">
                <div class="container mt-5">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>City</th>
                                <th>Marks</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $stu)
                            <tr>
                                <td>{{ $stu->id }}</td>
                                <td>{{ $stu->name}}</td>
                                <td>{{ $stu->city }}</td>
                                <td>{{ $stu->marks }}</td>
                                <td>
                                    <a href="{{ url('edit', $stu->id) }}" class="btn btn-info btn-sm">Edit</a>
                                    <a href="{{ url('delete', $stu->id) }}" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>               
            </div>
        </div>
    </div>

    




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

</body>
</html>