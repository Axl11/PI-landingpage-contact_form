<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Axl Coronado - Formulario</title>
    <link rel="stylesheet" type="text/css" href="assets/css/estilos.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/estilos.css')}}">
</head>
<body>
    <header>
        <div class="nav">
            <img src="{{asset('images/logo_udg.png')}}" id="logo_udg" alt="logo udg">
            <h2>Universidad de Guadalajara</h2>
        </div>
        <nav>
            <a class="navigation" href="index.html">Página Principal</a>
            <a class="navigation" href="formulario.html">Formulario</a>
        </nav>
    </header>

    <div class="main_div">
        <h1>Contacto</h1>

        <section id="formulario">
            <h2>Registro de Formulario</h2>
            <form action="formulario.html" method="get">
                <div class="form">
                    <label for="nombre" class="bold">Nombre:<br/><input type="text" id="nombre" name="nombre" placeholder="Escribe tu nombre" value="{{ $nombre }}" required></label><br/>
                </div>

                <div class="form">
                    <label for="correo" class="bold">Correo electrónico:<br/><input type="mail" id="correo" name="correo" placeholder="alguien@example.com" value="{{ $email }}" required></label><br/>
                </div>

                <div class="form">
                <label for="comentario" class="bold">Comentario:<br/><textarea id="comentario" name="comentario" cols="50" rows="15" placeholder="Escribe aquí tu comentario..."></textarea>  </label><br/>
                </div>

                <div id="div_button">
                    <input type="submit" value="Enviar">
                </div>
            </form>
        </section>
    </div>

    <footer>
        <p>Autor: Bryan Axl Coronado Cabrera</p>
        <p><a href="mailto:bryan.coronado6352@alumnos.udg.mx" id="mailto">bryan.coronado6352@alumnos.udg.mx</a></p>
        <div>
            <p>&#169 Todos los derechos reservados</p>
        </div>
    </footer>
</body>
</html>