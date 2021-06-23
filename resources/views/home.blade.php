<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  


  <h1>Hello World</h1>
  <p>soy {{ $name }}  {{$cognome}}</p>
  @if (count($familia) > 0)
    <ul>
      @foreach($familia as $fami)
      <li>{{$fami}}</li>
      @endforeach
      
    </ul>
  @else
    <h1>no hay integrantes en la familia</h1>
  @endif
</body>
</html>