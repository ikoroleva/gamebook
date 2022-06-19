<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Secret of pyramides</title>
</head>
<body>
   
    @if(isset($illustration))
    <img src="/img/{{$illustration->filename}}" alt="image for chapter">
    @endif
    <br>
    {!! $chapter->text; !!}

    <ul>
    @foreach ($choices as $choice)
            <li><a href="/{{$choice->goto_id}}"> {{$choice->text}} </a></li>
    @endforeach
    </ul>

    
</body>
</html>