<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modul 2 - latihan 1</title>
    <style>
        .kotak {
            background-color: salmon ;
            width: 40px;
            height: 40px;
            border: 2px solid black;
            text-align: center;
            line-height: 40px;
            display: inline-block;
            margin-bottom: 2px;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body> 
    <?php 
    for ($i = 1; $i <=5; $i++) {
        for ($j = 1; $j <= $i; $j++) { ?>
            <div class="kotak"><?php  echo $j ?></div>
    <?php } ?>
    <div class="clear"></div>
    <?php } ?>
</body>
</html>