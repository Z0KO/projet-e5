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
        <link rel="stylesheet" href="../css/stylemenu.css">
            
    </head>
    <body>       
        
    <header>
            <div class="logo">
                <p><span>Bienvenue dans la page&ensp;</span>Menu</p>
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
        
        <section id="home">
            <div class="left">
                <h4>Voici notre Menu</h4>
                <h1>Nous sommes spécialiste du poulet !</h1>
                <p>Dans ce menu vous trouverez ceci...</p>
                <button><a href="#menu">Regarder maintenant</a></button>
            </div>
            <div class="right">
                <img src="../images/img1.png">
                <br><br>
                <div style="margin-left: 170px;"><h1>Le prix de ce plat est : 27,95 €</h1></div>
            </div>
        </section>

        <section id="menu">
            <h4 class="mini_title">Nos Menu</h4>
            <h2 class="title">Menu Populaire</h2>
            <div class="plats">
                <div class="plat">
                <img src="../images/img1.png">
                <p>Best Sealer</p>
                <h2>27,95 €</h2>
                <div class="classement classement50"></div>
                <br>
                <p class="stockok">
                <abbr>Disponible</abbr></p>
                <a href="1.php">Détail...</a>
                </div>
            

                <div class="plat">
                <img src="../images/img2.png">
                <p>Le Chic Gourmand</p>
                <h2>31,95 €</h2>
                <div class="classement classement45"></div>
                <br>
                <p class="stockko">
                <abbr data-tip="Plus disponible, veuillez choisir un autre menu :)">Pas Disponible</abbr></p>
                <a href="2.php">Détail...</a>
                </div>

                <div class="plat">
                <img src="../images/img5.png">
                <p>Le Strong Chicken</p>
                <h2>32,95 €</h2>
                <div class="classement classement45"></div>
                <br>
                <p class="stockok">
                <abbr>Disponible</abbr></p>
                <a href="3.php">Détail...</a>
                </div>

                <div class="plat">
                <img src="../images/img4.png">
                <p>Le Chill Chicken</p>
                <h2>24,95 €</h2>
                <div class="classement classement40"></div>
                <br>
                <p class="stockok">
                <abbr>Disponible</abbr></p>
                <a href="4.php">Détail...</a>
                </div>

                <div class="plat">
                <img src="../images/img9.png">
                <p>English Chicken</p>
                <h2>26,95 €</h2>
                <div class="classement classement40"></div>
                <br>
                <p class="stockok">
                <abbr>Disponible</abbr></p>
                <a href="5.php">Détail...</a>
                </div>

                <div class="plat">
                <img src="../images/img6.png">
                <p>Le Veg'Chicken</p>
                <h2>22,95 €</h2>
                <div class="classement classement35"></div>
                <br>
                <p class="stockko">
                <abbr data-tip="Plus disponible, veuillez choisir un autre menu :)">Pas Disponible</abbr></p>
                <a href="6.php">Détail...</a>
                </div>
            </div>
        </section>

        <footer>
        <div class="service_list">
                <div class="service">
                    <img src="../images/clock.png">
                    <h2>Ouverture/Fermeture</h2>
                    <p>11h45 à 14h10</p>
                    <p>18h45 à 23h10</p>
                </div>

                <div class="service">
                    <img src="../images/pin.png">
                    <h2>Adresse</h2>
                    <p>Paris, 75008</p>
                    <p>628, Porte de Louviers</p>
                </div>

                <div class="service">
                    <img src="../images/mail.png">
                    <h2>Notre mail</h2>
                    <p>welovechicken75@gmail.com</p>
                    <p>servicewelovechicken75@gmail.com</p>
                </div>

                <div class="service">
                    <img src="../images/tel.png">
                    <h2>Téléphone</h2>
                    <p>06 38 16 60 37</p>
                    <p>01 12 37 48 20</p>
                </div>
                <hr>      
            </div>   
            <p class="footer_text">Réalisé par <span>WeLoveChicken &nbsp;<a href="https://www.youtube.com/watch?v=0vNs_HfkkKA" target="_blank">\O/</a>&nbsp;</span> | Tous les droits sont réservés.</p>    
        </footer>

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
