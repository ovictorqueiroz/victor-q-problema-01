<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        session_start();

        $_SESSION['username1'] = $_POST[ "username1"];
        $_SESSION['userage1'] = $_POST[ "userage1"];
        $_SESSION['userweight1'] = $_POST[ "userweight1"];
        $_SESSION['userheight1'] = $_POST["userheight1"];
        
        ?>
    <link rel="stylesheet" href="../styles/styles-02.css">
    <title>Usuario 02</title>
</head>
<body>
    <header>
        <h1>COLETANDO DADOS</h1>
    </header>

    <main class="container">
        <div class="profile-image">
            <img src="../images/morse-profile.png" alt="">
        </div>

        <h1>Pessoa 02</h1>
        
        <form action="../pages/comparandoDados.php" method="post">
            <label for="username">Nome</label>
            <input type="text" name="username2">
            
            <label for="">Idade</label>
            <input type="number" name="userage2">
            
            <label for="">Peso (em kg)</label>
            <input type="number" name="userweight2">
            
            <label for="">Altura (em cm)</label>
            <input type="number" name="userheight2">
            
            <input type="submit" value="Avançar" style="margin-top: 1rem; width: 30%; border-radius: 15px; background-color: #8FABD4">
        </form>
    </main>
</body>
</html>