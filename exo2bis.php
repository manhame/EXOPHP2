<h1>Exercice 2</h1>

<p>Afficher tableau HTML</p>

<h2>Résultat</h2>

<table border=1>
    <!--en-tête tableau html -->

    <thead>
        <tr>
            <th>Pays</th>
            <th>Capitales</th>
        </tr>
    </thead>
    <!--corps du tableau html-->
    <tbody>
        <tr>
            <td>France</td>
            <td>Paris</td> <!--emet ne fonctionne pas ?-->
        </tr>
    </tbody>
</table>   

<?php

$capitales = [
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "USA" => "Washington",
    "Italie" => "Rome"
];
foreach ($capitales as $pays => $capitale) {
echo "Le pays $pays a pour capitale : $capitale <br>";
}

echo afficherTableHTML ($capitales);

function afficherTableHTML ($capitales) {
    ksort($capitales);
   $result = "<table border=1>
                <thead>
                    <tr>
                        <th>Pays</th>
                        <th>Capitales</th>
                    </tr>
                </thead>
            <tbody>";

    foreach ($capitales as $pays => $capitale) {
        $result .= "<tr>
                        <td>".mb_strtoupper($pays)."</td>
                        <td>$capitale</td>
                    </tr>";
    }

        $result .= "</tbody></table>"; 

    return $result;
}



