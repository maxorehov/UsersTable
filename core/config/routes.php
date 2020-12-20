<?php

return [
    '#^$#' => [
        'controller' => 'Main',
        'action' => 'index'
    ],
    '#^add-user$#' => [
        'controller' => 'AddUser',
        'action' => 'index'
    ],
    '#^add-user/add$#' => [
        'controller' => 'AddUser',
        'action' => 'add'
    ],
        '#^edit-user/edit$#' => [
        'controller' => 'EditUser',
        'action' => 'edit'
    ],
    '#^edit-user#' => [
        'controller' => 'EditUser',
        'action' => 'index'
    ]

];

