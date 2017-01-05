<?php
include('Db.php');

echo Db::getTest();

echo '<br />';

Db::getInstance();

echo Db::getTest();