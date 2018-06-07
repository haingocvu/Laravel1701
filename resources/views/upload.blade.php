<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
    @if(Session::has('message'))
        <div class="alert alert-danger">
            {{Session::get('message')}}
        </div>
    @endif
    <form action="{{route('upload')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="uploadFiles">
        <input type="submit" name="submit" value="upload">
    </form>
</body>
</html>