<?php
include_once 'vendor/autoload.php';

use App\Services\Database;
use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/.env');

$database = new Database();

echo "<h1>Docker Test</h1>";

var_dump($database->query('SELECT * FROM test'));

?>