<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Books</title>
</head>

<body>

    <h1>Library Books</h1>

    <ul>
        @foreach ($books as $book)
            <li>{{ $book->toString() }}</li>
        @endforeach
    </ul>

</body>
</html>