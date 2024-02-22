<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2c</title>

    <style>
        body {
            font-size: 0;
        }

        .kotak {
            width: 50px;
            height: 50px;
            background-color: lightblue;
            border: 1px solid #444;
            display: inline-block;
            line-height: 50px;
            text-align: center;
            font-size: .8rem;
            font-family: arial;
        }


    </style>
</head>
<body>
    
        <?php 
        for ($i = 10; $i > 0; $i--) { ?>
        <?php
        for ($j = 1; $j <= $i; $j++) { ?>
            <div class="kotak"><?= $j; ?></div>
            <?php
        } ?>
        <br>
        <?php } ?>

</body>
</html>