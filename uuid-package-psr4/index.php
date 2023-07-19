<?php
echo "<h4 style='text-align:center;'>PSR-4 Composer Autoloading</h4>";

require_once __DIR__.'/vendor/autoload.php';

// use App\Controllers\PersonController;
// use App\Helpers\PersonHelper;
use Ramsey\Uuid\Uuid;

// // $personController = new PersonController();
// $personController = new \App\Controllers\PersonController();
// echo '<br>';
// $personHelper = new PersonHelper();
// // $personHelper = new \App\Helpers\PersonHelper();
// echo '<br>';
// $personModels = new \App\Models\PersonModel();
// echo '<br>';

$uuid = Uuid::uuid4();
echo $uuid->toString();
// echo $uuid->getFields()->getVersion();