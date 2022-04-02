<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap.min.css">
    <title>Commande</title>
</head>
<body style="background-image: url(/form/assets/sandwitchs.jpg);background-repeat: no-repeat;background-size:100%;">
    <?php
    $file = $_FILES['file'];
    if (isset($file)) {
        $_FILES['file']['name']=uniqid();
    }
    $type = $_POST["type"];
    $avec_mayonnaise = isset($_POST["mayonnaise"]);
    $avec_salade = isset($_POST["salade"]);
    $avec_harissa = isset($_POST["harissa"]);
    $nom = ucfirst($_POST["nom"]);
    $prenom = ucfirst($_POST["prenom"]);
    $nombre = $_POST["number"];
    $adresse = $_POST["adresse"];
    $remise = 0;
    $prix_total = $nombre * 4;
    $prix_final = $prix_total;
    if ($nombre > 10) 
    {
        $remise = $prix_total * 0.1;
        $prix_final = $prix_total - $remise;
    }
    ?>
    <div class="container" style="border-radius:5px ; background-color:white; width:50%">
    <table class="table table-light" style="margin-top:150px; border-radius: 10px;" >
         <thead>
             <tr>
                 <th >Sandwich:</th>
                 <th>Choix: </th>
             </tr>
         </thead>
         <tbody>
             <tr>
             <td>Prenom:</td>
             <td ><?= $prenom ?></td>
             </tr>
             <tr>
             <td>No. de sandwichs</td>
             <td><?= $nombre ?></td>
             </tr>
             <tr>
                 <td>Type du Sandwich</td>
                 <td><?= $type ?></td>
             </tr>
             <tr>
                 <td>Ingredients du Sandwich</td>
                 <td><?php
                     if ($avec_mayonnaise == FALSE && $avec_harissa == FALSE && $avec_salade == FALSE) {
                         echo "RIEN!";
                     } else if ($avec_harissa == TRUE) {
                         echo " Harissa\n";
                     }
                     if ($avec_mayonnaise == TRUE) {
                         echo " Mayonnaise\n";
                     }
                     if ($avec_salade == TRUE) {
                         echo " Salade\n";
                     }
                     ?> </td>
         </tr>
         <tr>
             <td>Montant à payer</td>
             <td><?= "${prix_total} £" ?></td>
         </tr>
         <?php
         if ($nombre > 10) {
             echo "<tr>
            <td >Discount:</td>
			<td>${remise} £</td>
		</tr>";
                                echo "<tr>
        <td >Prix après Remise</td>
        <td>${prix_final} £</td>
    </tr>";
    }
    ?>
</tbody>
</table>
    </div>
    
</body>
</html>