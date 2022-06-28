<?php
require_once 'vendor/autoload.php';


use App\model\Model;
use App\model\UserModel;

$model = new UserModel();
$user = $model;
echo "<pre>";
print_r($user->load(3));
echo "<br>";
//var_dump($user->find("fabricio@teste.com"));
print_r($user->find("fabricio@teste.com"));
