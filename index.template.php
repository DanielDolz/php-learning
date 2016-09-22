<!doctype html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Activitat PHP</title>
</head>
<body>

<ul>
    <?php foreach ($tasks as $task) : ?>
        <?php if ($task->completed) : ?>
            <strike><li><?= $task->description ?></li></strike>
        <?php else : ?>
            <li><?= $task->description ?></li>
        <?php endif; ?>
    <?php endforeach; ?>
</ul>

</body>
</html>