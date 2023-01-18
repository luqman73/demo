<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = 'Note';

$notes = $db->query('SELECT * FROM notes WHERE user_id = :id', ['id' => $_GET['id']])->fetchAll();


require "views/notes.view.php";