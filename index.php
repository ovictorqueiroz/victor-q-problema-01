<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Usuario 01</title>
</head>
<body>
    <header>
        <h1>COLETANDO DADOS</h1>
    </header>

    <main class="container">
        <div class="profile-image">
            <img src="images/dog-profile.png" alt="">
        </div>

        <h1>Pessoa 01</h1>
        
        <form action="./pages/usuario02.php" method="post">
            <label for="username">Nome</label>
            <input type="text" name="username1">
            
            <label for="">Idade</label>
            <input type="number" name="userage1">
            
            <label for="">Peso (em kg)</label>
            <input type="number" name="userweight1">
            
            <label for="">Altura (em cm)</label>
            <input type="number" name="userheight1">
            
            <input type="submit" value = "Avançar" style="margin-top: 1rem; width: 30%; border-radius: 15px; background-color: #FAB12F">
        </form>
    </main>
</body>
</html>