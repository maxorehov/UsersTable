<?php

return [
    '#^$#' => [
        'controller' => 'Main',
        'action' => 'index'
    ],
    
    '#^filter$#' => [
        'controller' => 'Main',
        'action' => 'filter'
    ],
        '#^search#' => [
        'controller' => 'Main',
        'action' => 'search'
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

