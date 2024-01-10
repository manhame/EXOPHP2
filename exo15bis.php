<h1>Exercice 15</h1>

<p>Valider email</p>

<?php

$email_a= 'elan@elan-formation.fr';
$email_b= 'contact@elan';

if (filter_var($email_a, FILTER_VALIDATE_EMAIL)) {
    echo "L'adresse email '$email_a' est valide.<br>";
}
if (filter_var($email_b, FILTER_VALIDATE_EMAIL)) {
    echo "L'adresse email '$email_b' est valide.";
}
else { echo "L'adresse '$email_b' est invalide";
}
?>