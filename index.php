<?php

use PDOConnection\DB as DB;

require 'DB.php';
    
DB::Config([
    'debug' => true,
    'forceDB' => false,
    'forcTable' => false
]);
DB::init('localhost', 'tester', 'root', '');

$query = new Query\Insert('Product');
$query->title = 'Shirt';
$query->price = 2.55;
$query->date = date('Y-m-d');
