<?php
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$message = $_POST['message'];
?>
<?php
if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['message'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $message = $_POST['message'];
}
else {
    echo "Veuillez remplir tous les champs";
}
if(isset($_POST['submit'])) {
    echo "Formulaire envoyé";
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
    <form action="traitement.php" method="post">
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom">
        <label for="prenom">Prenom</label>
        <input type="text" name="prenom" id="prenom">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <label for="message">Message</label>
    </form>
    <input type="submit" value="Envoyer">
</body>
</html>