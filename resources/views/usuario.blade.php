<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario</h1>
    <form action=" {{ route('usuario') }} " method="POST">
        @csrf {{-- Token de seguridad --}}

        <div>
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" value="{{ old('name')  }}">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <div>
            <label for="email">email</label>
            <input type="text" name="email" id="email" value="{{ old('email') }}">
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <div>
            <label for="email_confirmation">Confirmar email</label>
            <input type="text" name="email_confirmation" id="email_confirmation" value="{{ old('email_confirmation') }}">
            @error('confirmEmail')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <div>
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" value="{{ old('password') }}">
            @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <div>
            <label for="password_confirmation">Confirmar contraseña</label>
            <input type="password" name="password_confirmation" id="password_confirmation" value="{{ old('password_confirmation') }}">
            @error('confirmPassword')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <button type="submit"> Guardar datos </button>
    </form>
</body>
</html>