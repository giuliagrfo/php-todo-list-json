<?php

$tasks = [
    'HTML',
    'CSS',
    'Responsive Design',
    'Javascript',
    'PHP',
    'Laravel'
];

if (isset($_POST["newToDo"])) {
    $new_todo = $_POST["newToDo"];
    $newToDo = [
        "name" => $new_todo,
        "done" => false,
    ];
    $todo[] = $newToDo;
}

header('Content-Type: application/json');
echo json_encode($tasks);
