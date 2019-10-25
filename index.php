<?php
declare (strict_types = 1);

require 'classes/FileDB.php';
require 'classes/Drinks/drink.php';
require 'classes/Sandwitch/sandwich.php';
require 'file.php';

$drinks_table = 'drinks';
$sandwitches_table = 'sandwiches';

$cola = new Drink();
$burger = new Sandwitch();

var_dump($cola);
var_dump($burger);

$db = new FileDB('../data/db.txt');
$db->load();

$db->creatTable($drinks_table);
$db->creatTable($sandwiches_table);

$db->save();




