<?php
echo "<pre>";
echo "<h3>PHP dotenv Package</h3>";

require_once __DIR__."/vendor/autoload.php";

// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
// $dotenv->load();

// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
// $dotenv->safeLoad();

$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__);
$dotenv->load();

// print_r($_ENV);
// print_r($_SERVER);

echo getenv('APP_PATH');





// https://packagist.org/packages/vlucas/phpdotenv
// 1. You can then load .env in your application with:
// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
// $dotenv->load();

// print_r($_ENV);
// print_r($_SERVER);

// 2. To suppress the exception that is thrown when there is no .env file, you can:
// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
// $dotenv->safeLoad();

// 3. Optionally you can pass in a filename as the second parameter, if you would like to use something other than .env:
// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__, 'myconfig');
// $dotenv->load();


// function getcustomenv($envname)
// {
// 	$env_array = $_ENV;
// 	if (array_key_exists($envname,$env_array)) {
// 		return $env_array[$envname];
// 	} else {
// 		return "ENV var does not exists";
// 	}

// }

// echo getcustomenv('CC_NUMBER');
// var_dump(getcustomenv('CC_NUMBER'));
