<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <style>
        body {
            background-color: #009B3A;
            color: #FFFFFF;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        h2 {
            color: #FFCC29;
        }

        button {
            background-color: #009B3A;
            color: #FFFFFF;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #005CAF;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #FFFFFF;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input[type=text], input[type=email], input[type=password] {
            width: calc(100% - 24px); /* Ajuste para o padding */
            padding: 12px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 2px solid #002776;
            border-radius: 4px;
            background-color: #FFFFFF;
            color: #000000; /* Cor preta */
            font-size: 16px;
        }

        input[type=text]:focus, input[type=email]:focus, input[type=password]:focus {
            border-color: #FFCC29;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 6px;
            color: #000000; /* Cor preta */
        }

        a {
            color: #002776;
            text-decoration: none;
        }

        a:hover {
            color: #FFCC29;
        }
    </style>
</head>
<body class="antialiased">
    <div class="container">
        <h2>Formulário de Cadastro</h2>
        <form action="#">
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name"><br><br>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email"><br><br>
            
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password"><br><br>
            
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>
