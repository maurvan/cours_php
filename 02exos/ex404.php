<?php 
    $message = "";

    $selectedPlus = "";
    $selectedMoins = "";
    $selectedMultiple = "";
    $selectedDivise = "";

    if (isset($_POST["compter"])) {
        if (isset($_POST["nombre1"], $_POST["nombre2"])) {
            $nombre1 = $_POST["nombre1"];
            $nombre2 = $_POST["nombre2"];
            $operateur = $_POST["operateur"];

            switch ($operateur) {
                case '+':
                    $selectedPlus = "selected";
                    $message .= $nombre1 + $nombre2;
                    break;
                
                case '-':
                    $selectedMoins = "selected";
                    $message .= $nombre1 - $nombre2;
                    break;

                case '*':
                    $selectedMultiple = "selected";
                    $message .= $nombre1 * $nombre2;
                    break;
                
                case '/':
                    if ($nombre2 == 0) {
                        $message .= "Division par 0";
                    } 
                    else {
                        $selectedDivise = "selected";
                        $message .= $nombre1 / $nombre2;
                    }
                    break;
                    
                default:
                    $message .= "Operateur inconnu";
                    break;
            }
        }
    }
    else {
        $nombre1 = "";
        $nombre2 = "";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex4.04</title>
</head>
<body>
    <h1>Calculatrice</h1>

    <form action="#" method="post">
        <input type="number" name="nombre1" step="any" value="<?php echo $nombre1; ?>">
        <select name="operateur">
            <option value="+" <?= $selectedPlus; ?> >+</option>
            <option value="-" <?= $selectedMoins; ?> >-</option>
            <option value="*" <?= $selectedMultiple; ?> >*</option>
            <option value="/" <?= $selectedDivise; ?> >/</option>
        </select>
        <input type="number" name="nombre2" step="any" value="<?php echo $nombre2; ?>">
        <input type="submit" name="compter" value="="> <?= $message ?>
    </form>
</body>
</html>