    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo base_url('Projet-Mr-Rojo/assets/Login.css')?>">
        <title>Examen Web</title>
    </head>
    <body>
        
    <div class="wrapper">
        
        <div class="text-center mt-4 name">
            BIENVENUE
        </div>
        <form class="p-3 mt-3" action="ControlleurLogin/login" method="POST">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="email" id="email" placeholder="Entrez votre email">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="mdp" id="mdp" placeholder="Entrez votre mot de passe">
            </div>
            <button class="btn mt-3">Login</button>
        </form>
        <div class="text-center fs-6">
            <a href="ControlleurLogin/login">Mot de passe oublié? </a> ou <a href="index.php">S'inscrire</a>
        </div>
    </div>

    </body>
    </html>