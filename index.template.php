<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
<!--        <ul>-->
<!--            --><?php
//            foreach ($names as $x) {
//                echo "<li>$x</li>";
//            }
//            ?>
<!--        </ul>-->

        <ul>
            <?php foreach ($person as $feature => $featureValue) : ?>
                <li>
                    <strong><?=$feature?></strong> : <small><?=$featureValue?></small>
                </li>
            <?php endforeach; ?>
        </ul>
    </h1>
</body>
</html>