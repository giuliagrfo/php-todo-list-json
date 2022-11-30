<?php

$tasks = [
    'HTML',
    'CSS',
    'Responsive Design',
    'Javascript',
    'PHP',
    'Laravel'
];

header('Content-Type: application/json');
echo json_encode($tasks);
