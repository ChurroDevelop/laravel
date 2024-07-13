<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar usuario</title>
</head>
<body>
    <form action="{{ route('actualizar.usuario', $user->id) }}" method="POST">
        @csrf {{-- Token de seguridad --}}
        <div>
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" value="{{ $user->name }}">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <br>
        {{-- <div>
            <label for="emai">Correo electronico</label>
            <input type="text" name="email" id="email" value="{{ $user->email  }}">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <br> --}}
        <button type="submit">
            Modificar
        </button>
    </form>
    
</body>
</html>