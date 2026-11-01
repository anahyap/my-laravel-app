
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Library Management System</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f7fb;
            padding: 40px;
            color: #253047;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        .library-container {
            max-width: 900px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.08);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 15px;
            border-bottom: 1px solid #e5e7eb;
            text-align: left;
        }

        th {
            background: #eaf0ff;
        }

        tr:hover {
            background: #f8faff;
        }

        .empty {
            text-align: center;
            color: #777;
        }
    </style>
</head>

<body>

<div class="library-container">

    <h1>📚 Library Management System</h1>

    <table>
        <thead>
            <tr>
                <th>Book Title</th>
                <th>Author</th>
                <th>Categories</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>

                    <td>
                        {{ $book->author->name }}
                    </td>

                    <td>
                        {{ $book->categories->pluck('name')->join(', ') }}
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="empty">
                        No books found.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

</div>

</body>
</html>
