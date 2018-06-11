<?php
$db = require __DIR__ . '/db.php';
// test database! Important not to run tests on production or development databases
$db['dsn'] = sprintf('mysql:host=%s;dbname=%s', getenv('DBHost'), getenv('DBName'));

return $db;
