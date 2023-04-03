<!DOCTYPE html>
<!-- En tu archivo layout Blade -->
<!-- CSS de Bootstrap -->
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

<!-- JS de Bootstrap -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

<html>

<head>
    <title>Lista de productos</title>
</head>

<body class="bg-dark text-white">
    <h2 class="text-center mt-3">Control Productos</h2>
    <div class="container">
        @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

        <a href="{{ route('productos.create') }}" class="btn btn-success">Nuevo producto</a>
        <table class="table text-white text-center mt-5">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Stock</th>
                    <th>Estado</th>
                    <th>Fecha Ingreso</th>
                    <th>Fecha Actulizacion</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                    <tr>
                        <td>{{ $producto->id }}</td>
                        <td>{{ $producto->name }}</td>
                        <td>{{ $producto->stock }}</td>
                        <td>@if ($producto->status)
                            Activo
                        @else
                            Inactivo
                        @endif</td>
                        <td>{{ $producto->created_at }}</td>
                        <td>{{ $producto->updated_at }}</td>
                        <td>
                            <a href="{{ route('productos.editar', ['id' => $producto->id]) }}"
                                class="btn btn-warning text-white">Editar</a>
                            <form action="{{ route('productos.destroy', ['id' => $producto->id]) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
