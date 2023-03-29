 <?php
$destinataire = 'hannequinaymeric@yahoo.fr';
$expediteur   = 'aymeric.hannequin@ac-nantes.fr';
$reponse      = $expediteur;

echo "Ce script envoie un mail au format HTML à $destinataire";
$codehtml=
    '<html><body>'.
    '<h1>Test Email</h1>'.
    '<b><u>Ceci est un document HTML</u></b><br>'.
    'Avec differentes tailles de caractères et '.
    '<font color="red">couleurs</font>'.
    '</body></html>';
mail($destinataire,
     'Email au format HTML',
     $codehtml,
     "From: $expediteur\r\n".
        "Reply-To: $reponse\r\n".
        "Content-Type: text/html; charset=\"UTF-8\"\r\n");
?>
