<?php

$config = [
    'host' => 'mysql.app.host',
    'port' => '3306',
    'driver' => 'mysql',
    'dbname' => 'mysql',
    'username' => 'root',
    'password' => '123456',
];


$dns = $config['driver'] . ':host=' . $config['host'] . ';port=' . $config['port'] . ';dbname=' . $config['dbname'];
$pdo = new PDO($dns, $config['username'],$config['password']);

$users = $pdo->query('select * from user');
foreach($users as $user) {
    echo $user['Host'] . ':' . $user['User'] . PHP_EOL;
}
$pdo = null;

exit(0);