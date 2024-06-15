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
        <link rel="stylesheet" href="../css/styleapropos.css">
        
            
    </head>
    <body>
                        
        <header>
            <div class="logo">
                <p><span>Bienvenue dans la page&ensp;</span>À propos</p>
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
        
        <section id="apropos-de-nous">
            <h4 class="mini_title">À propos de nous</h4>
            <h2 class="title">Pourquoi nous choisir ?</h2>
            <div class="apropos">
                <div class="left">
                    <img src="../images/img-about-us.png">
                </div>
                <div class="right">
                <h3>Meilleur poulet de France</h3>
                <p>Ici dans notre restaurent, nous proposons le meilleur poulet, nous sommes expert depuis plus de 20 ans dans le poulet.</p>
                <button><a href="#commentaires">Découvrir plus...</a></button>
                </div>
            </div>
        </section>

        <!--Avis-->
        <section id="commentaires" class="commentaire">
            <h4 class="mini_title">Commentaires</h4>
            <h2 class="title">Qu'est-ce qu'on dit de nous?</h2>
            <div class="comments">
                <div class="comment">
                    <div>
                        <img src="../images/img1.png">
                        <h4>Maxime</h4>
                    </div>
                    <p>On a pris une table pour 10 hier soir (17/05/2024), on a reçu un très bon accueil, des employés à l'écoute et surtout souriants. Un bel endroit pour manger du poulet assaisonné à leur façon. A refaire !</p>
                </div>
            
            
                <div class="comment">
                    <div>
                        <img src="../images/img2.png">
                        <h4>Louis</h4>
                    </div>
                    <p>Souvenirs d’un excellent dîner gastronomique entre amis. Des assiettes superbes avec des saveurs incroyables. La cuisine est raffinée avec des produits d’exception. Le service et impeccable.</p>
                </div>

                <div class="comment">
                    <div>
                        <img src="../images/img4.png">
                        <h4>Julie</h4>
                    </div>
                    <p>Excellent accueil de la part de l'équipe, produits de qualité et locaux. J'ai pris le "Chill Chicken" et il porte vraiment bien son nom. Les accompagnements maison sont très bon ! ils proposent des sauces spécifiques pour chaque plat qui sont maison, avec un très bon goût. Je reviendrai !.</p>
                </div>

                <div class="comment">
                    <div>
                        <img src="../images/img5.png">
                        <h4>Arnaud</h4>
                    </div>
                    <p>Bel établissement où l’on se sent tout de suite bien. Le staff est aux petits soins, en plus d’être extrêmement réactif. Le Strng Chicken était délicieux. A essayer pour un bon repas bien sympathique</p>
                </div>

                <div class="comment">
                    <div>
                        <img src="../images/img6.png">
                        <h4>Mélanie</h4>
                    </div>
                    <p>Très bon accueil, service efficace... Et excellente qualité du repas ! On avait choisi ce restaurant un peu pour hasard, mais pas de regret.</p>
                </div>

                <div class="comment">
                    <div>
                        <img src="../images/img9.png">
                        <h4>Hugo</h4>
                    </div>
                    <p>Comme toujours, on a passé un excellent moment dans ce restaurant incontournable de la ville. On se régale avec une carte originale et variée ! Merci beaucoup</p>
                </div>

            </div>

        </section>

        <section id="message">
        <h4 class="petit_titre">Message</h4>
        <h2 class="title">Veuillez remplir pour envoyé un message</h2>
        <form action="../php/message.php" id="clock" method="post">
        <label> Nom</label>
        <input type="text" id="nom" name="nom" placeholder="Saisir votre nom" required>
        <label> Prénom</label>
        <input type="text" id="prenom" name="prenom" placeholder="Saisir votre prénom" required>
        <label> Email</label>
        <input type="email" id="email" name="email" placeholder="Saisir votre email" required>
        <label> Message</label>
        <input type="textarea" id="message" name="message" placeholder="Saisir votre message" required>
        <input type="submit" value="Envoyer">
    </form>
             
        </div>            

        <br> <br>

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
