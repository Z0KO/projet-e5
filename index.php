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
        <link rel="stylesheet" href="css/style">
        <link rel="stylesheet" href="css/style2">
            
    </head>
    <body>       
        
    <header>

    <div class="logo">
        
                <p><span>Bienvenue dans la page&ensp;</span>Accueil</p>
            </div> 
       
            <ul class="menu">  
                <li><a href="index.php">Accueil</a></li> 
                <li><a href="./pages/menu.php">Menu</a></li> 
                <li><a href="./pages/apropos.php">À propos</a></li> 
                <li><a href="./pages/reservation.php">Réservation</a></li>  
            </ul>

        <!--Menu responsive-->
        <div class="toggle_menu"></div>

        </header>

    <section class="heure">
        <script>
        function afficherHeure() {
            var date = new Date();
            var heure = date.getHours();
            var minutes = date.getMinutes();
            var secondes = date.getSeconds();
            // Ajouter un zéro devant les chiffres pour la mise en page
            heure = (heure < 10 ? "0" : "") + heure;
            minutes = (minutes < 10 ? "0" : "") + minutes;
            secondes = (secondes < 10 ? "0" : "") + secondes;
            // Format : HH:MM:SS
            var temps = heure + ":" + minutes + ":" + secondes;
            // Afficher l'heure dans l'élément ayant l'ID "heure"
            document.getElementById("heure").innerText = temps;
            // Actualiser l'heure toutes les secondes
            setTimeout(afficherHeure, 1000);
            }
            // Appeler la fonction pour afficher l'heure de la page
            window.onload = afficherHeure;
        </script>
            <div class="hour"><h1><p>L'heure actuelle est : <span id="heure"></span></p></h1></div>
        </section>
        <br><br><br>

        <section class="texte_boite">
            <h2>Salutation Chez WeLoveChicken,</h2>
                <p>
                    Venez découvrir une expérience culinaire de poulet unique chez WeLoveChicken. <br><br>
                    Où la passion pour la gastronomie rencontre une ambiance chaleureuse et accueillante. <br><br>
                    Nous nous engageons à utiliser les ingrédients les plus frais pour vous offrir des plats délicieux et innovants. <br><br>
                    Venez savourer nos spécialités et laissez-vous emporter par une aventure gustative inoubliable. <br><br>
                </p>
        </section>

        <section class="texte_boite_mid">
            <h2>Plat du jour</h2>
            <p>Best Sealer</p>
            <a href="pages/1.php">
            <img class="taille_mid" src="images/img1.png" alt="Plat du jour"></a>
            <div class="classement classement50"></div><br>
            <p>Le prix de ce plat est : 27,95 €</p>
        </section>

        <section class="texte_boite_end">
            <h2>Plat du soir</h2>
            <p>English Chicken</p>
            <a href="pages/5.php">
            <img class="taille_mid" src="images/img9.png" alt="Plat du jour"></a>
            <div class="classement classement40"></div><br>
            <p>Le prix de ce plat est : 26,95 €</p>
        </section>
        
        <br><br><br>
        <footer>
        <div class="service_list">
                <div class="service">
                    <img src="images/clock.png">
                    <h2>Ouverture/Fermeture</h2>
                    <p>11h45 à 14h10</p>
                    <p>18h45 à 23h10</p>
                </div>

                <div class="service">
                    <img src="images/pin.png">
                    <h2>Adresse</h2>
                    <p>Paris, 75008</p>
                    <p>628, Porte de Louviers</p>
                </div>

                <div class="service">
                    <img src="images/mail.png">
                    <h2>Notre mail</h2>
                    <p>welovechicken75@gmail.com</p>
                    <p>servicewelovechicken75@gmail.com</p>
                </div>

                <div class="service">
                    <img src="images/tel.png">
                    <h2>Téléphone</h2>
                    <p>06 38 16 60 37</p>
                    <p>01 12 37 48 20</p>
                </div>
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
