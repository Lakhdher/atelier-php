<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>tableau</title>
</head>
<body>
<div class="container" style="margin-top:50px">
    <Table class="table table-light table-stripped">
        <tr class="table-warning">
            <td> X </td>
        <?php
    for($i=1;$i<10;$i++)
    {
        ?>
        <td>
        <?php
        echo$i;
        ?>
        </td>
        <?php
    }
    ?>
        </tr>
    <?php
    for($i=1;$i<10;$i++)
    {
        ?>
        <tr>
            <td class="table-warning">
                <?php
                echo $i;
                ?>
            </td>
            <?php
        for($j=1;$j<10;$j++)
        {
            ?>
            <td>
            <?php
            echo($i*$j);
            ?>
            </td>
            <?php
        }
        ?>
        </tr>
        <?php
    }
    ?>
 
   </Table>

    </div>
</body>
</html>