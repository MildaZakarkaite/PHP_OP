<?php

require 'classes/fileDB.php';
require 'file.php';

$db = new FileDB('data/db.txt');

$db->addRow('Vartotojai', ['name' => 'Milda', 'surname' => 'Zakarkaite']);
$db->save();
var_dump($db->getData());
//
//$db->setData(['table' => [['name' =>]]]);
//
//var_dump($db->getData());
//
//$db->getRow('table', 0);
//
//var_dump($db->getRow('table', 0));




//$db->load();
//$db->save();
//Galima tureti kita objekta su kita duonbaze veikiancia tuo paciu principu
//$db_2 = new FileDB('data/users.txt');

