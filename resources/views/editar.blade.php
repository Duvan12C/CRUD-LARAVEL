<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar producto</title>
</head>
<body>
    <form action="{{ route('productos.update', ['id' => $productos->id]) }}" method="POST">
        @method('PUT')
        @csrf
        <label for="name">Nombre:</label>
        <input type="text" value="{{ $productos->name }}" name="name">
        <br>
        <label for="stock">Stock:</label>
        <input type="number" value="{{ $productos->stock}}" name="stock">
        <br>
        <label for="status">Estado:</label>
        <input type="text" value="{{ $productos->status}}" name="status">
        <br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
