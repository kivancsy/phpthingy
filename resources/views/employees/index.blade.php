<!
<html lang="en">
<head>
    <meta charset="UTF-8">
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
<a class="btn btn-warning" href="{{route('employees.add')}}">Çalışan Ekle</a>
<table class="table">
    <thead>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Sector</th>
        <th>Floor</th>
        <th>Oluşturulma</th>
        <th>İşlemler</th>
    </tr>
    </thead>
    <tbody>
    @foreach($employees as $n)
        <tr>
            <td>{{$n->id}}</td>
            <td>{{$n->name}}</td>
            <td>{{$n->email}}</td>
            <td>{{$n->getSector->name}}</td>
            <td>{{$n->getSector->floor}}</td>
            <td>{{date('d.m.d/m/y H:i', strtotime($n->created_at))}}</td>
            <td><a class="btn btn-info" href="{{route('employees.detail',[$n->id])}}">Düzenle</a>
                <a class="btn btn-danger btn-sm" href="{{route('employees.delete',[$n->id])}}">Sil</a> </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
