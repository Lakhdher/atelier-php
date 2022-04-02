<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap.min.css">
    <title>Sandwitchs</title>
</head>
<body style="background-image: url(/form/assets/sandwitchs.jpg);background-repeat: no-repeat;background-size:100%;">
    <div class="container" style="background-color: white; margin-top: 50px; padding-bottom: 10px;
     border-radius: 5px; width: 40%; ">
            <form method="post" action="bonjour.php" enctype="multipart/form-data">
                <h2 class="text-center">
                    <strong>Sandwitchs</strong>
                </h2>
                <label class="form-label">Nom:</label>
                <input class="form-control" required type="text" id="nom" size="40" maxlength="40" name="nom" />
                <label class="form-label">Prénom:</label>
                <input class="form-control" type="text" id="prenom" size="40" maxlength="40" required name="prenom" />
                <label class="form-label">CIN:</label>
                <input type="file" name="file" class="form-control" id="cin" placeholder="Password" name="cin">
                <label class="form-label">Le nombre de Sandwichs:</label>
                <input class="form-control" type="number" id="nombre" required pattern="([1-9]|([1][0-9]))|20" name="number" />
                <label class="form-label">Votre adresse:</label>
                <input class="form-control" type="text" id="adresse" required name="adresse"/>
                <label class="form-label">Le type de votre Sandwich:</label>
                <select class="form-select" aria-label="Select!" name="type">
                    <option selected>Open this select menu</option>
                    <option value="Viande">Viande</option>
                    <option value="Poulet">Poulet</option>
                    <option value="Escalope">Escalope</option>
                </select>
                <label class="form-label">Les ingrédients :</label>
                <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="mayonnaise" value="mayonnaise" name="mayonnaise">
                    <label class="form-check-label" for="inlineCheckbox1">mayonnaise</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="Harissa" value="Harissa" name="harissa">
                    <label class="form-check-label" for="inlineCheckbox2">Harissa</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="Salade" value="Salade" name="salade">
                    <label class="form-check-label" for="inlineCheckbox2">Salade</label>
                  </div>
          <div class="mb-3"></div>
          <div class="mb-3">
            <button class="btn btn-primary d-block w-100" type="submit" name="submit" value="submit" onclick="mafonc()">
              Passer la Commande
            </button>
        </form>
    </div>
    <script src="alert.js"></script>
</body>
</html>