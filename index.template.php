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

        <ul>

            <li>//CONDICIONALS

                //Opció1:
                <?php
                    if ($person['married']) {
                            echo "Casat";
                        } else {
                            echo "Solter";
                        }
                ?>

<!--                //Opció2:-->
<!--                --><?//= $person['married'] ? "Casat" . "Solter" ; ?>
            </li>



        </ul>

</body>
</html>