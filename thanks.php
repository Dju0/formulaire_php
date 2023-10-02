<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nom = $_POST["user_nom"];
  $prenom = $_POST["user_prenom"];
  $email = $_POST["user_email"];
  $telephone = $_POST["user_telephone"];
  $sujet = $_POST["user_sujet"];
  $message = $_POST["user_message"];
  
  $errors = array();

  // Validation du nom et prénom
  if (empty($nom) || empty($prenom)) {
    $errors[] = "Le nom et le prénom sont obligatoires.";
  }

  // Validation de l'e-mail
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "L'adresse e-mail n'est pas valide.";
  }

  // Validation du téléphone (ne vérifie que s'il n'est pas vide)
  if (empty($telephone)) {
    $errors[] = "Le numéro de téléphone est obligatoire.";
  }

  // Vérification s'il y a des erreurs
  if (empty($errors)) {
    echo "Merci $prenom $nom de nous avoir contacté à propos de \"$sujet\".<br>";
    echo "Un de nos conseillers vous contactera soit à l'adresse $email ou par téléphone au $telephone dans les plus brefs délais pour traiter votre demande :<br>";
    echo $message;
  } else {
    // Affichage des erreurs
    echo "Des erreurs ont été trouvées lors de la soumission du formulaire :<br>";
    foreach ($errors as $error) {
      echo "- $error<br>";
    }
  }
} else {
  echo "Erreur : Le formulaire n'a pas été soumis.";
}
?>
