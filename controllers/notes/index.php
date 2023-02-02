<?php

$config = require base_path('config.php');
$db = new Database($config['database']);

$notes = $db->query('SELECT * FROM notes WHERE user_id = 1')->get();


// $id = $_GET['id'];
// $query = "SELECT * FROM users WHERE id = ?";
// $posts = $db->query($query, [$id])->fetchAll();

view("notes/index.view.php", [
    'heading' => 'My Notes',
    'notes' => $notes
]);