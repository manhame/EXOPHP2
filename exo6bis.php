<h1>Exercice 6</h1>

<p>Alimenter une liste déroulante<p>

    <select>
      <option selected="selected">Sélectionner une valeur</option>

      <?php
      $alimenterListeDeroulante = ["Monsieur", "Madame", "Mademoiselle"];
      
      // Parcourir le tableau
      foreach($civilité as $value){
      ?>
      <option value="<?php echo strtolower($value); ?>"><?php echo $value; ?></option>
      <?php
      }
      ?>
    </select>
