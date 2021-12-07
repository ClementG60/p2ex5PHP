<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
        $gender = "Homme";
        if ($gender != "Homme") {
            echo 'C\'est une développeuse !!!';
        } else {
            echo 'C\'est une développeur !!!';
        }
        ?>
    </p>
</body>
</html>