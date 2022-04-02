<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function produit(...$args)
    {
        print_r($args);
        $a=array_search(0,$args);
        while($a)
        {
            unset($args[$a]);
            $a=array_search(0,$args);
        }
        $prod=1;
        foreach($args as $elem)
        {
            $prod=$prod*$elem;
        }
        print($prod);

    }
    produit(2,0,6,0);
    
        ?>
</body>
</html>