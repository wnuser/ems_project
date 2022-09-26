<?php

return [
    
    'ROLES' => [
        'ADMIN' => [
            'ROLE' => 1,
            'TYPE' => 1,
            'TITLE' => 'Admin',
            'ACCESS' => [1,2,14],
            'OPR'    => [1,2,3,4,5] 
        ],
        'SUBADMIN' => [
            'ROLE' => 2,
            'TYPE' => 2,
            'TITLE' => 'Sub Admin',
            'ACCESS' => [1,3,4,5,6,7,8,11,10,12,13,14],
            'OPR'    => [1,2,3] 
          ],
        'CUSTOMER' => [
            'ROLE' => 3,
            'TYPE' => 2,
            'TITLE' => 'Customer',
            'ACCESS' => [3,4,5,6,8,10,12,13,11,14],
            'OPR'    => [1,2,3] 
          ]
     
        ],

    'OPTIONS' => [
        'ADMIN' => 1,
        'SUBADMIN' => 2,
        'CUSTOMER' => 3
    ], 

    'ROLE_TITLES' => [
        1 => 'ADMIN',
        2 => 'SUB ADMIN',
        3 => 'Customer'
    ],




];





?>