<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $file = fopen("libri.txt", "r");

        if ($file == false) {
            exit();

        } else {
            while (feof($file) == false) {
                $record = fgets($file);
                echo $record;
                echo "<br>";
            }
            fclose($file);
        }
    ?>
    
</body>
</html>