<?php
require 'Database.php';

$db = new Database();

$db->insertUser('admin', 'admin@test.ru', 'admin');