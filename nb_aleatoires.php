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
   <?php
   {
       do
       {
           $a=rand(0,50);
           $b=rand(0,50);
           $c=rand(0,50);
       }while ((($a%2!=0)||($b%2==0))||($c%2==0));
       echo("$a $b $c");
   }
   ?>
</body>
</html>
