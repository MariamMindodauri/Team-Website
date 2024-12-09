<?php
session_start(); 

// Check if the user is logged in
$logged_in = isset($_SESSION['user_name']) && isset($_SESSION['user_last_name']);

// If logged in, greet the user, else show the login/signup options
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
        'submenu' => $logged_in ? [
            [
                'name' => 'Logout',
                'link' => './logout.php',
            ]
        ] : [
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
// Array of products
$products = [
    [
        'img' => 'images/body-lotion.png',
        'title' => 'Body Lotion',
        'description' => 'For Dry Skin',
    ],
    [
        'img' => 'images/cream-cleanser.png',
        'title' => 'Cream Gel Cleanser',
        'description' => 'For Very Dry And Dehydrated Skin',
    ],
    [
        'img' => 'images/serum.png',
        'title' => 'Serum',
        'description' => 'Anti-Aging',
    ],
    [
        'img' => 'images/hand-cream.png',
        'title' => 'Hand Cream',
        'description' => 'For Dry Skin',
    ],
    [
        'img' => 'images/cleansing-foam.png',
        'title' => 'Cleansing Foam',
        'description' => 'For Oily Skin',
    ],
    [
        'img' => 'images/body-wash.png',
        'title' => 'Body Wash',
        'description' => 'For Dry Skin',
    ],
    [
        'img' => 'images/body-scrub.png',
        'title' => 'Body Scrub',
        'description' => 'For Normal Skin',
    ],
    [
        'img' => 'images/face-cream-gel.png',
        'title' => 'Face Cream-Gel',
        'description' => 'For Extra Dry Skin',
    ]
];
