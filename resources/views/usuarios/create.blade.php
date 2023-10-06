<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Learn Cartoon - WEB/Registro</title>
    <link rel="stylesheet" href="{{ asset('css/Users/Registro.css') }}">
    <link rel="icon" href="Images/Logo.webp">
    <script src="https://kit.fontawesome.com/5191364857.js" crossorigin="anonymous"></script>

</head>

<body>

    <div class="FormularioR">

        <form action="{{route('usuarios.store')}}" method="POST" enctype="multipart/form-data"
        autocomplete="on" onsubmit="return (validarFormulario())">

        @csrf
            <div class="TituloRegistro">
                <div class="IconoUsuario">
                    <img src="Images/IconoUser.webp">
                    <h2> Registrarse </h2>
                </div>
                <img src="Images/Rama.gif" alt="Imagen de Rama y Mariposa" class="Rama">
            </div>
            <label> Nombre de Usuario </label>
            <input class="Casillas" type="text" name="nombre_usuario" id="nombreUsuario" placeholder="Ingresa tu Nombre de Usuario" required>
            <label> Correo Electrónico </label>
            <input class="Casillas" type="email" name="correo" id="correoElectronico" placeholder="Correo Electrónico" required>
            <label> Contraseña </label>
            <div class="Contraseña">
                <input class="Casillas" type="password" name="contraseña" id="passwordInput" placeholder="Ingrese una Contraseña" required>
                <button type="button" onclick="togglePasswordVisibility()"><img src="Images/SeePassword.webp"></button>
            </div>
            <label> Rol </label>
            <input class="Casillas" name="rol" placeholder="Rol" required>

            <script src="Scripts/Current Date.js"></script>
            <script src="Scripts/ValidarFormulario.js"></script>
            <br>
            <div id="mensajeError" style="display: none; color: red;"> Asegúrese de que la contraseña contenga 6
                caracteres simples, una mayúscula y 1 número.</div>
            <input class="EnviarR" type="submit" value="Registrarme">
            <img src="Images/login-pasto.webp" alt="Imagen de Hierba" class="Pasto">
        </form>
    </div>

</body>

</html>



{{--<form action="{{route('usuarios.store')}}" method="POST" enctype="multipart/form-data">

    @csrf
    <label>
        Nombre:
        <br>
        <input type="text" name="nombre_usuario">
    </label>
    <br>
    <label>
        Correo:
        <br>
        <input type="text" name="correo">
    </label>
    <br>
    <label>
        Contraseña:
        <br>
        <input type="text" name="contraseña">
    </label>
    <br>
    <label>
        Rol:
        <br>
        <input type="text" name="rol">
    </label> --}}
    {{-- <br><br>
    <label >Adjuntar archivo PDF</label>
    <br><br>
    <input type="file" name="urlPdf" class="form-control-file" accept="pdf/*"> --}}
    
    
    {{-- <br><br>
    <button type="submit">Enviar Formulario:</button> --}}
