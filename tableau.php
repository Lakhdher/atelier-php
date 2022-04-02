<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container" style="margin-top: 50px;">
        <table class="table table-light">
            <tr class="table table-dark">
                <td>
                    <p>Nom Constante</p>
                </td>
                <td>
                    <p>Valeur</p>
                </td>
            </tr>
    <?php
    $cartes =get_defined_constants();
    foreach ($cartes as $nom_constante => $valeur) {
        ?>
        <tr>
            <td>
                <?php
                echo $nom_constante;
                ?>
            </td>
            <td>
            <?php
                echo $valeur;
                ?>
            </td>
        </tr>
        <?php
    }
    ?>
    </table>
</div>
</body>
</html>