<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel + PHP-MongoDB</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
</head>

<body class="antialiased">
    <div class="container d-flex min-vh-100 justify-content-center align-items-center">
        <table class="table">
            <thead class="thead table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Imagen</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datos as $dat)
                    <tr>
                        <td>{{ $dat->_id }}</td>
                        <td>{{ $dat->nombre }}</td>
                        <td class="text-end">{{ $dat->precio }}</td>
                        <td class="text-end">{{ $dat->stock }}</td>
                        <td class="text-center"><img src="images/{{ $dat->img }}" width="30" class="img-responsive" /></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
