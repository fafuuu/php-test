<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <ul>
      @foreach ($books as $book)

        <li>{{$book->title}}</li>

      @endforeach
  </ul>
  </body>
</html>
