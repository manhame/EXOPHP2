<h1>Exercice 7</h1>

<p>créer fonction pour générer checkbox</p>

<h2>Résultat</h2>

<input type="checkbox" name="choix[]" value="Choix 1" />Choix 1<br/>
<input type="checkbox" name="choix[]" value="Choix 2" />Choix 2<br />
<input type="checkbox" name="choix[]" value="Choix 3" />Choix 3<br />

<?php
if(isset($_POST["choix"]))
{
   foreach($_POST["choix"] as $valeur)
   {
      echo $valeur ."<br>";
   }
}
?>


