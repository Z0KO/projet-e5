<?php
// Connexion à la base de données
$cnx = new PDO('mysql:host=127.0.0.1;dbname=welovechicken', 'admin-wlc', 'wlc*@438|_#');

// Vérification si des données ont été envoyées via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $date_reserv = $_POST['date_reserv'];
    $heure_reservation = $_POST['heure_reservation'];

    // Vérification si le nom et le prénom contiennent uniquement des lettres
    if (!preg_match("/^[a-zA-ZÀ-ÿ\s\-']+$/u", $nom . $prenom)) {
        echo "Le nom ou le prénom ne doit contenir que des lettres. Veuillez ressayez !";
        echo "&nbsp &nbsp &nbsp &nbsp";
        echo "<button onclick=\"window.location.href='../pages/reservation.php'\">Cliquer ici, pour retourner à la page précédente.</button>";
    } else {
        try {
            // Requête SQL pour insérer les données dans la base de données avec l'heure d'envoi
            $req = $cnx->prepare('INSERT INTO users (nom, prenom, email, telephone, date_reserv, heure_reservation) VALUES (:nom, :prenom, :email, :telephone, :date_reserv, :heure_reservation)');
            $req->bindParam(':nom', $nom);
            $req->bindParam(':prenom', $prenom);
            $req->bindParam(':email', $email);
            $req->bindParam(':telephone', $telephone);
            $req->bindParam(':date_reserv', $date_reserv);
            $req->bindParam(':heure_reservation', $heure_reservation);

            // Exécution de la requête
            if ($req->execute()) {
                // Alerte -> réservation.
                echo "<script type='text/javascript'>
                        alert('Votre réservation à été prise en compte !');
                        window.location.href = '../pages/reservation.php';
                      </script>";
                exit;
            } else {
                echo "Une erreur s'est produite lors de l'insertion des données.";
            }
        } catch(PDOException $e) {
            echo "Erreur de base de données : " . $e->getMessage();
        }
    }
}
