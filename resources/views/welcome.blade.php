<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Options</title>
    <link rel="stylesheet" href="{{ asset('../css/welcome.css') }}"/>
    <style>
        body{
            width:100%;
            height:100%;
            background-color: black;
            color:white;
            display:flex;
            align-items: center;
            justify-content: center;
            
        }
        a{
            color:white;
            text-decoration: none;
        }
        .options{
            margin-top: 10%;
            font-family:serif;
            font-size: 50px;
        }

    </style>
    
</head>
<body>
    <div class="options">
        <a href="{{ url('/createAcc') }}">Criar Conta</a><br><br><br>
        <a href="{{ url('/auth') }}">Logar Conta</a><br><br><br>
        <a href="{{ url('/getAllTasks') }}">Ver Tasks</a>
    </div>
    </body>

</html>