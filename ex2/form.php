<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap.min.css">
    <title>Form</title>
</head>
<body>
<div class="container" style="margin-top: 50px;">
<form action="valid.php" method="post" style="width: 40%;">
    <h2 class="visually-hidden">Login Form</h2>
    <h1>Le cours PHP </h1>
    <h1> <label for="title">PHP: </label>
    </h1>
    <div>
        <fieldset>
            <div class="sondage"><input type="radio" id="bon" value="bon" class="custom-control-input" name="customRadio" checked="">
            <label class="form-label custom-control-label" for="bon">Bon</label></div>
            <div class="sondage"><input type="radio" id="moyen" value="moyen" class="custom-control-input" name="customRadio" checked="">
            <label class="form-label custom-control-label" for="moyen">Moyen</label></div>
            <div class="sondage"><input type="radio" id="mauvais" value="mauvais" class="custom-control-input" name="customRadio" checked="">
            <label class="form-label custom-control-label" for="mauvais">Mauvais</label></div>
        </fieldset>
    </div>
    <div class="mb-3">
      <button name="submit" value="Submit" class="btn btn-primary d-block w-100" type="submit">Soumettre</button>
</div>
<?php
setcookie("vote",)
?>
</form>
</body>
</html>