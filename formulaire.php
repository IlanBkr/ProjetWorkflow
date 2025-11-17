<?php
// Initialiser les variables avec des valeurs vides par défaut
$nom = '';
$prenom = '';
$email = '';
$message = '';

// Vérifier si le formulaire a été soumis
if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['message'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    if(isset($_POST['submit'])) {
        echo "Formulaire envoyé";
    }
}
?>
<html>
<head>
    <title>Formulaire</title>
</head>
<body>
    <h1>Formulaire</h1>
    <p>Nom: <?php echo $nom; ?></p>
    <p>Prenom: <?php echo $prenom; ?></p>
    <p>Email: <?php echo $email; ?></p>
    <p>Message: <?php echo $message; ?></p>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="formulaire.php" method="post">
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom"><br><br>
        <label for="prenom">Prenom</label>
        <input type="text" name="prenom" id="prenom"><br><br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email"><br><br>
        <label for="message">Message</label>
        <textarea name="message" id="message" rows="4" cols="50"></textarea><br><br>
        <input type="submit" name="submit" value="Envoyer">
    </form>
</body>
</html>