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
        <link rel="stylesheet" href="../css/stylereservation.css">

    </head>
    <body>
                        
    <header>
            <div class="logo">
                <p><span>Bienvenue dans la page&ensp;</span>Réservation</p>
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
        
        <section id="reservation">
    <h4 class="mini_title">Réservation</h4>
    <h2 class="title">Veuillez remplir ce formulaire pour réserver une place.</h2>
    <form action="../php/traitement_reservation.php" id="clock" method="post">
        <label> Votre nom</label>
        <input type="text" id="nom" name="nom" placeholder="Saisir votre nom" required>
        <label> Votre prénom</label>
        <input type="text" id="prenom" name="prenom" placeholder="Saisir votre prénom" required>
        <label> Votre email</label>
        <input type="email" id="email" name="email" placeholder="Saisir votre email" required>
        <label> Date de réservation</label>
        <input type="date" id="date_reservation" name="date_reservation" required>
        <label> Heure de réservation</label>
        <input type="time" id="heure_reservation" name="heure_reservation" required>
        <input type="submit" value="Valider la réservation">
    </form>

    <script>
        document.getElementById('clock').addEventListener('submit', function(event) {
            var heureReservation = document.getElementById('heure_reservation').value;
            var heure = parseInt(heureReservation.split(':')[0]);
            var minute = parseInt(heureReservation.split(':')[1]);

            // Vérifier si l'heure sélectionnée est dans les plages autorisées
            if (!((heure == 11 && minute >= 45) || (heure == 12 && heure < 12 || (heure == 13 && minute <= 30)) || (heure == 18 && minute >= 45) || (heure >= 19 && (heure < 22 || (heure == 22 && minute <= 30))))) {
                event.preventDefault(); // Empêcher la soumission du formulaire
                alert('Veuillez choisir une heure comprise entre 11h45 et 13h30 ou entre 18h45 et 22h30.');
            }
        });
    </script>
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
