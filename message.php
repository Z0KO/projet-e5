<?php
// Connexion à la base de données
$cnx = new PDO('mysql:host=127.0.0.1;dbname=welovechicken', 'admin-wlc', 'wlc*@438|_#');

// Vérification si des données ont été envoyées via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $texte_message = $_POST['texte_message'];

    // Vérification si le nom et le prénom contiennent uniquement des lettres
    if (!preg_match("/^[a-zA-ZÀ-ÿ\s\-']+$/u", $nom) || !preg_match("/^[a-zA-ZÀ-ÿ\s\-']+$/u", $prenom)) {
        echo "Le nom ou le prénom ne doit contenir que des lettres. Veuillez ressayer !";
        echo "&nbsp &nbsp &nbsp &nbsp";
        echo "<button onclick=\"window.location.href='../pages/apropos.php'\">Cliquer ici, pour retourner à la page précédente.</button>";
    } else {
        try {
            // Requête SQL pour insérer les données dans la base de données avec l'heure d'envoi
            $req = $cnx->prepare('INSERT INTO message (nom, prenom, email, texte_message, created_at) VALUES (:nom, :prenom, :email, :texte_message, NOW())');
            $req->bindParam(':nom', $nom);
            $req->bindParam(':prenom', $prenom);
            $req->bindParam(':email', $email);
            $req->bindParam(':texte_message', $texte_message);

            // Exécution de la requête
            if ($req->execute()) {
                // Alerte -> message.
                echo "<script type='text/javascript'>
                        alert('Votre message a bien été envoyé !');
                        window.location.href = '../pages/apropos.php';
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