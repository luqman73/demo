<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = 'Notes';

$notes = $db->query('SELECT * FROM notes WHERE user_id = 1')->get();


// $id = $_GET['id'];
// $query = "SELECT * FROM users WHERE id = ?";
// $posts = $db->query($query, [$id])->fetchAll();

require "views/notes.view.php";