<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <div class="container">
            <div class="left-section"></div>
            <div class="right-section"></div>
          </div>
          
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="estilo.css">  
        <title>Cadastrar</title>
       
        <nav>
            <ul>
              <li><a href="#home">Home</a></li>
            </ul>
          </nav>         
    <body>
        <h1>Cadastrar Usuário</h1>
        <form method="POST" action="processa.php">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name"><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email"><br><br>
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password"><br><br>
            <input type="submit" value="Submit">
        </form>

    </body>
</html>