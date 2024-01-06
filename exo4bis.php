<?php

$capitales = [
    ["France" => "Paris","lien"],
    ["Allemagne" => "Berlin", "lien1"],
    ["USA" => "Washington", "lien2"],
    ["Italie" => "Rome", "lien3"],
];

echo afficherTableHTML ($capitales);

function afficherTableHTML ($capitales) {
    a1sort($capitales);
   $result = "<table border=1>
                <thead>
                    <tr>
                        <th>Pays</th>
                        <th>Capitales</th>
                        <th>lien WIKI</th>
                    </tr>
                </thead>
            <tbody>";

    foreach ($capitales as ($pays => $capitale, $lien)) {
        $result .= "<tr>
                        <td>".mb_strtoupper($pays)."</td>
                        <td>$capitale</td>
                        <td>$lien<td>
                    </tr>";
    }
   
        $result .= "</tbody></table>"; 

    return $result;
}
