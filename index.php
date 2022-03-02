<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <style>
    body {
      background-color: #dae3e9;
    }
    nav {
      display: flex;
      padding-bottom: 20px;
    }
    img {
      cursor: pointer;
    }

    input {
      font-size: 20px;
      border: none;
      width: 90%;
      border-top-left-radius: 40px;
      border-bottom-left-radius: 40px;
      padding-left: 40px;
    }
    ::placeholder {
      color: blue;
    }
    #contenedor > * {
      border: 3px solid black;
      background-color: white;
    }
    #contenedor {
      display: grid;
      height: 100vh;
      grid-template-columns: 50% 1fr;
      grid-template-rows: 40px 1fr 1fr 250px;
      grid-template-areas:
        "grid1 grid1"
        "grid2 grid3"
        "grid4 grid5"
        "grid6 .";
    }

    #grid1 {
      font-size: 25px;
      text-align: center;
      grid-area: grid1;
      background-color: #ff7f27;
      color: white;
    }
    #grid2 {
      grid-area: grid2;
    }
    #grid3 {
      grid-area: grid3;
    }
    #grid4 {
      grid-area: grid4;
    }
    #grid5 {
      grid-area: grid5;
    }
    #grid6 {
      grid-area: grid6;
    }
  </style>
  <body>
    <form action="busqueda.php" id="formulario">
      <nav>
        <!-- le ponemos un nombre "busqueda" al input para poder acceder a este campo desde busqueda.php-->
        <input type="text" name="busqueda" placeholder="Busque algo.." />
        <img onclick="Busqueda()" src="imagenes/Captura.PNG" alt="" />
      </nav>
      <div id="contenedor">
        <div id="grid1">LISTADO DE USUARIOS</div>
        <div id="grid2"></div>
        <div id="grid3"></div>
        <div id="grid4"></div>
        <div id="grid5"></div>
        <div id="grid6"></div>
      </div>
    </form>

    <script>
      //Cuando hacemos click en el icono enviamos la informacion a busqueda.php para posteriormente enviar un resultado
      function Busqueda() {
        formulario = document.getElementById("formulario");

        //comprobamos el usuario no a dejado vacio el input.
        if (formulario.busqueda.value.length == 0) return;

        formulario.submit();
      }
    </script>
  </body>
</html>
