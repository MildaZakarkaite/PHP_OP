<?php

require 'classes/fileDB.php';
require 'file.php';

$db = new FileDB('failas.txt');

$db -> save();
