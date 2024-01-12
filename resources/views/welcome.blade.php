<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PROTOTIPO AVG_IGECEM</title>

        <style>

        .containerxavg { text-align: center; }



#particles-js {
	height: 100%;
	width: 100%;
    position: fixed;

}

.contenedor {
	width: auto;
	/*max-width: 1200px;*/
    background-size: cover;
    background-position:center;
	margin-left: 30%;
	margin-right: 30%;
/*     margin-top: 15px;  puede servir para un menu*/
    padding: 20px 30px;
    position: relative;
    z-index: 99;
    opacity: .85;
  /*  padding-top:  15%;*/
  top: 200px;
}



.barra-navegacion ul {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.barra-navegacion li {
    list-style: none;
    display: inline-block;
}


.barra-navegacion a {
    text-decoration: none;
    color: #fff;
    font-size: 19px;
    font-family: 'Lato', sans-serif;
    font-weight: 400;
    text-transform: uppercase;
    border-bottom: 1px solid transparent;
    transition: .5s ease;
}

.barra-navegacion a:hover {
    color: #3dff3e;
    border-bottom: 1px solid currentcolor;
}

.contenido-descripcion {
    width: 0%;
    display: flex;
    height: 100%;
    align-items: center;
}



.contenido-descripcion .btn-link {
    display: inline-block;
    padding: 10px 20px;
    margin: 25px 0;
    text-transform: uppercase;
    text-decoration: none;
    color: #000;
    border: 1px solid #000;
    /*animation: parpadeo 2s linear infinite;
    transition: .7s ease;*/
}

.contenido-descripcion .btn-link:hover {
    border: 1px solid #3dff3e;
    animation: none;
}



h1 {font-size: 8em;
  font-weight: 900;
  /*font-size: 130%;*/
}

@media screen and (max-width: 64em) {
h1 {
    font-size: 4em;

  }
}

@media screen and (max-width: 50em) {
h1 {
    font-size: 2em;

  }
}

@media screen and (max-width: 30em){
h1 {
    font-sitze: 2em;

  }
}

        </style>

        <link rel="stylesheet" media="screen" href="css/style.css">
    </head>
    <body class="containerxavg" >
      <div id="particles-js"  ></div>

      <header class="contenedor header">

       <!-- Barra de navegación -->
       <nav class="barra-navegacion">
           <ul>


           </ul>
       </nav>

       <!-- Título y descripción -->
       <div class="contenido-descripcion">
           <div>
             <p>
               <center>
                 <!--x-application-logo class="w-20 h-20 fill-current text-gray-500" /-->
               <img src="{!! asset('images/IGECEM.png') !!}" style="/*width:230px;height:300px;*/ width:115px;height:150px;" />
               </center>
               <br>
               <h1>
                     DICTAVAL IGECEM

               </h1>
               <br>
             <center class="descripcion">

               @if (Route::has('login'))

                       @auth
                           <a href="{{ url('/dashboard') }}" class=" btn-link text-sm text-gray-700 dark:text-gray-500 underline">Inicio</a>
                       @else
                           <a href="{{ route('login') }}" class=" btn-link text-sm text-gray-700 dark:text-gray-500 underline">Iniciar</a>
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                           @if (Route::has('register'))
                               <a href="{{ route('register') }}"   class=" btn-link ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Registro</a>
                           @endif
                       @endauth

               @endif
                </center>
</p>
           </div>
       </div>
   </header>





        <!-- scripts -->
        <script src="js/particles.js"></script>
        <script src="js/app.js"></script>

        <!-- stats.js -->
        <script src="js/lib/stats.js"></script>

    </body>
</html>
