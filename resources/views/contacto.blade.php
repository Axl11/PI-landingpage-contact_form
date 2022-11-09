<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELITE-SI - Contacto</title>
    <link rel="stylesheet" type="text/css" href="assets/css/estilos.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/estilos.css')}}">
</head>
<body>
    <header>
        <div class="nav">
            <img src="{{asset('images/logo/elite-si_marca.png')}}" id="logo_udg" alt="logo udg">
            <h2>ELITE-SI</h2>
        </div>
        <nav>
            <a class="navigation" href="/landingpage">Página Principal</a>
            <a class="navigation" href="#">Formulario</a>
        </nav>
    </header>

    <div class="main_div">
        <h1>Contacto</h1>

        <section id="formulario">
            <h2>Registro de Formulario</h2>
            <form action="/recibe-form-contacto" method="post">
                @csrf

                <div class="form">
                    <label for="nombre" class="bold">Nombre:<br/><input type="text" id="nombre" name="nombre" placeholder="Escribe tu nombre" value="{{ $nombre ??'' }} {{old('nombre')}}"></label><br/>
                </div>
                @error('nombre')
                    <i>{{ $message }}</i>
                @enderror

                <div class="form">
                    <label for="correo" class="bold">Correo electrónico:<br/><input type="mail" id="correo" name="correo" placeholder="alguien@example.com" value="{{ $email ??'' }} {{old('correo')}}"></label><br/>
                </div>
                @error('correo')
                    <i>{{ $message }}</i>
                @enderror

                <div class="form">
                <label for="comentario" class="bold">Comentario:<br/><textarea id="comentario" name="comentario" cols="50" rows="15" placeholder="Escribe aquí tu comentario..." value="{{ old('comentario') }}"> {{old('comentario')}} </textarea>  </label><br/>
                </div>
                @error('comentario')
                    <i>{{ $message }}</i>
                @enderror

                <div id="div_button">
                    <input type="submit" value="Enviar">
                </div>
            </form>
        </section>
    </div>

    <footer>
        <p>Autor: ELITE-SI</p>
        <p><a href="#" id="mailto">elite@si.com.mx</a></p>
        <div>
            <p>&#169 Todos los derechos reservados</p>
        </div>
    </footer>
</body>
</html>