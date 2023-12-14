<?php
require_once('../vendor/autoload.php');

$worker = new \App\Worker("Worker", 17, "998998777");
$visitor = new \App\Visitor("Visitor", 18, "122432567");
$builder = new \App\Builder("Builder", 19, "123456789", [1,2,6,7], 10);

$workers = array($worker, $builder);

foreach ($workers as $unit) {
    $unit->sleep();
    $unit->work();
    $unit->eat();
}


//$worker -> doSomething();
//$visitor -> doSomething();
