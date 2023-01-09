<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>
        <?php
        $word = $_GET["word"];
        $phrase = "$word is a bad word!";
        echo $phrase;
        $length = " The length is " . strlen($phrase);
        echo $length;
        ?>
    </h1>
    <h1>
        <?php
        $new = str_replace("$word", "***", $phrase);
        echo $new;
        $length2 = " The length is " . strlen($new);
        echo $length2
            ?>
    </h1>
</body>

</html>