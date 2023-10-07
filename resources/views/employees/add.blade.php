<!
<html lang="en">
<head>
    <meta charset=",">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- JSS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<div class="row">
    <form class="col-4" style="margin: 50px auto" action="{{route('employees.save')}}"method="POST">
        @if(session()->has('success'))
            <div class="alert alert-success">{{session()->get('success')}}</div>
        @endif
        @csrf
        <input type="hidden" name="employees_id" />
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" >
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <textarea class="form-control" cols="20" rows="5" name="email"></textarea>
        </div>
            <div class="form-group">
                <label for="title">department</label>
                <select class="form-control" name="sector">
                    <option value="">Seçiniz</option>
                    @foreach($sectors as $author)
                        <option value="{{$author->id}}">{{$author->name}}</option>
                    @endforeach
                </select>
            </div>

        <button type="submit" class="btn btn-primary" style="margin-top: 20px ">Kaydet</button>
    </form>
</div>
</body>
</html>
