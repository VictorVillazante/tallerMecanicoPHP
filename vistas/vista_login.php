
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        
        }
        div#formulario{
            display:flex;
            height:50vh;
            width:40vw;
            flex-direction:column;
            background:rgb(88, 88, 88,0.7);
            border-radius:30px;
            box-shadow: 2px 2px 15px 2px black;
        }
        h1,h2{
            text-align:center;
            color:white;
        }
        input{
            display:block;
            text-align:center;
            width:70%;
            margin:0 auto;
            padding:5px;
            margin-bottom:20px;
        }
        input[type="submit"]{
            background-color: rgb(88, 88, 88);
            border: 2px double white;
            color: white;
            cursor:pointer;
            width:40%;
            border-radius:5px;
        }
        input[type="submit"]:hover{
            background-color: white;
            color: rgb(88, 88, 88);
        }
        div#respuesta{
            padding:5px 0;
            display:block;
            text-align:center;
            background-color: rgb(250, 159, 159,0.3);
            width:70%;
            margin:0 auto;
        }
    </style>
</head>
<body>
    <div id="formulario">
        <form form action="#" method="post">
            <h1>Login de usuario</h1>
            <h2>Usuario</h2>
            <input type="text" placeholder="Ingrese usuario:" name="usuario">
            <h2>Contraseña</h2>
            <input type="password" name="contraseña">
            <input type="submit">
        </form>
        <div id="respuesta">
            <?php
                if(!$acierto){
                    echo "No existe el usuario ingresado";
                }
            ?>
        </div>
    </div>
</body>
</html>