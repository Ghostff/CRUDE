<?php

use PDOConnection\DB as DB;

require 'src/DB.php';
    
DB::Config([
    'debug'     => true,
    'forceDB'   => false,
    'forcTable' => false,
//  'autoFix'   => true (works for Select Query alone)
]);

DB::init('localhost', 'tester', 'root', '');
//DB::setTable('Product');


echo Sql\Find::Product_name('Foo', 'count')->toString();