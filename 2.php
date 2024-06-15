<!DOCTYPE html>
<html lang="fr">
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.html to edit this template
-->
<html>
    <head>
        <title>WeLoveChicken</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Mathieu FERRIERE">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/detail">

    </head>
    <body>
                        
    <header>
            <div class="logo">
                <p><span>Bienvenue dans la page&ensp;</span>Détail</p>
            </div>        
            <ul class="menu">  
                <li><a href="../index.php">Accueil</a></li> 
                <li><a href="menu.php">Menu</a></li> 
                <li><a href="apropos.php">À propos</a></li> 
                <li><a href="reservation.php">Réservation</a></li>  
            </ul>

        <!--Menu responsive-->
        <div class="toggle_menu"></div>

        </header>

        <section class="plat">
            <h1 class="titre-plat">Le Chic Gourmand</h1>
            <br><br>
            <img src="../images/img2.png" class="image-plat">
            <div class="classement classement50"></div>
            <div class="description-plat">
                <br><br>
                <h3>
                    Découvrez notre délicieux plat de spaghetti, préparé avec des ingrédients frais et de qualité. 
                    Ce plat est parfait pour un dîner en famille ou entre amis.
                </h3>
                <br><br>
                <h3>
                    <strong>Ingrédients:</strong> Spaghetti, tomates, ail, basilic, huile d'olive, sel, poivre.
                </h3>
            </div>
        </section>

        <script>
    var small_menu = document.querySelector('.toggle_menu')
    var menu = document.querySelector('.menu') 

    small_menu.onclick = function() {
        small_menu.classList.toggle('active');
        menu.classList.toggle('responsive');
}
</script>

    </body>
</html>
