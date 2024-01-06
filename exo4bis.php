<?php

$capitales = [
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "USA" => "washington",
    "Italie" => "Rome"
];

echo afficherTableHTML ($capitales);

function afficherTableHTML ($capitales) {
    asort($capitales);
   $result = "<table border=1>
                <thead>
                    <tr>
                        <th>Pays</th>
                        <th>Capitales</th>
                        <th>lien WIKI</th>
                    </tr>
                </thead>
            <tbody>";

    foreach ($capitales as $pays => $capitale) {
        $result .= "<tr>
                        <td>".mb_strtoupper($pays)."</td>
                        <td>".ucfirst($capitale)."</td>
                        <td><a href='https://fr.wikipedia.org/wiki/$capitale' target='_blank'>Lien</a></td>
                    </tr>";
    }
   
        $result .= "</tbody></table>"; 

    return $result;
}
