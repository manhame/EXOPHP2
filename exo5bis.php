<h1>Exercice 5</h1>

<p>créer fonction formulaire</p>

<h2>Résultat</h2>

<form method="post" action="">
   <input type="text" name="nom" /><br />;
   <input type="text" name="prenom" /><br />;
   <input type="text" name="ville" /><br />;
   <input type="submit" name="valider" value="Vérifier" />;
</form>

<?php

$nomsinput = ["Nom","Prénom","Ville"];
foreach ($nomsinput as $key) {
    $result = 
   " <form method="post" action="">
        <input type="text" name="nom" /><br />;
         <input type="text" name="prenom" /><br />;
         <input type="text" name="ville" /><br />;
         <input type="submit" name="valider" value="Vérifier" />;
    </form>";
}

echo afficherinputs $nomsinput;
    return $result;

