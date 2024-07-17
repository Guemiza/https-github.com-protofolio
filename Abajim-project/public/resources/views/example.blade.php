<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Moatez</h1>
    @foreach($Name as $nn)
    <h1>{{$nn->Name}}</h1>
    <h1>{{$nn->created_at}}</h1>
    @endforeach
</body>
</html>