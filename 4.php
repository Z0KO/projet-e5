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
            <h1 class="titre-plat">Le Chill Chicken</h1>
            <br><br>
            <img src="../images/img4.png" class="image-plat">
            <div class="classement classement45"></div>
            <div class="description-plat">
                <br><br>
                <h3>
                    Ce plat vous permet de découvrir nos produits frais acompagné de boule de poulet.
                </h3>
                <br><br>
                <h3>
                    <strong>Ingrédients :</strong> Poulet mariné en forme de boule acompagné d'une salade, taboulet et riz avec des épices douces afin d'améliorer le goût.</h1>
                </h3>
            </div>
        </section>

        <section class="dessert">
        <h1 class="titre-boisson">Choix de votre boisson (Sans Alcool)</h1>
            <br><br>
            <img src="../images/boisson.png" class="image-plat">
            <br><br><br>
            <img src="../images/boisson1.png" class="image-plat">
            <div class="description-plat">
                <br><br>
                <h2>
                    Vous avez deux choix : Piña colada maison ou Coca-Cola.
                </h2>
            </div>
        </section>

        <section class="dessert">
        <h1 class="titre-plat">Choix de votre dessert</h1>
            <br><br>
            <img src="../images/img_dessert_1.png" class="image-plat">
            <br><br><br>
            <img src="../images/img_dessert_0.png" class="image-plat">
            <div class="description-plat">
                <br><br>
                <h2>
                    Vous avez deux choix : Tiramisu maison ou Fraisier maison.
                </h2>
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
