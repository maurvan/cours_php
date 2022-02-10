<?php 
    $stockCoca = 0;
    $stockEau = 2;
    $message = "";

    $selectedEau = "";
    $selectedCoca = "";

    if (isset($_POST["commander"]))
    {
        if (isset($_POST["choixBoisson"]))
        {
            $choixBoisson = $_POST["choixBoisson"];
            switch ($choixBoisson) {
                case 'Eau':
                    $selectedEau = "selected";
                    if ($stockEau > 0)
                    {
                        $message .= "Voici votre Eau";
                        // mettre à jour le stock
                        // ca DOIT être une ligne différente
                        $stockEau--;
                    }
                    else
                        $message .= "Il n'y a plus d'Eau";
                    break;
                case 'Coca':
                    $selectedCoca = "selected";
                    if ($stockCoca > 0)
                    {
                        $message = "Voici votre Coca";
                        // mettre à jour le stock
                        $stockCoca--;
                    }
                    else
                        $message .= "Il n'y a plus de Coca";
                    break;
                default:
                    $message .= "Erreur: Choix inconnu";
                    break;
            }
            $message .= "<br>Il reste $stockEau eau et $stockCoca coca";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex4.03</title>
</head>
<body>
    <h1>Distributeur de boissons 🥤</h1>
    <form action="#" method="post">
        <label for="choixBoisson">Choissisez votre boisson:</label>
        <select name="choixBoisson" id="boissons">
            <option value="Eau" <?= $selectedEau; ?> >Eau</option>
            <option value="Coca" <?= $selectedCoca; ?> >Coca</option>
        </select>
        <input type="submit" name="commander" value="Commander">
    </form>

    <?= $message ?> 
</body>
</html>