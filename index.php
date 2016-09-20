<?php


require 'functions.php';

require 'Task.php';

$pdo = connect();

$tasks = allTasks($pdo);

require 'index.template.php';

