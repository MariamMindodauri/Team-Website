<?php

$navbar1 = [
    [
        'name' => 'logo',
        'link' => './index.php',
    ], 
    [
        'name' => 'FULL CATALOGUE',
        'link' => './catalogue.php', 
    ],
    [
        'name' => 'ABOUT US',
        'link' => './about.php', 
    ],
    [
        'name' => 'ACCOUNT',
        'link' => './account.php',
        'submenu' => [
            [
                'name' => 'Login',
                'link' => './login.php',
            ], 
            [
                'name' => 'Sign up',
                'link' => './signup.php',
            ]
        ]
    ],
    [
        'name' => 'FAVORITES',
        'link' => './favorites.php',
    ],
    [
       'name' => 'CART',
        'link' => './cart.php', 
    ],
    
];
