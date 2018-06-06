<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <style>
        input, textarea {
            max-width: 40%;
            min-width: 40%;
        }
    </style>
</head>
<body>
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $err)
               <li>{{$err}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{route('post-contact')}}" method="post">
        @csrf
    <input type="text" name="fullname" id="" placeholder="full name" value="{{@old('fullname')}}">
        @if($errors->has('fullname'))
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->get('fullname') as $err)
                    <li>{{$err}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        </br>
    <input type="text" name="title" id="" placeholder="title" value="{{@old('title')}}">
        </br>
    <input type="text" name="email" id="" placeholder="email" value="{{@old('email')}}">
        </br>
    <textarea name="message" rows="10">{{@old('message')}}</textarea>
        </br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>