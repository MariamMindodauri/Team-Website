<?php

function a($value, $link, $class = '') {
    echo "<a href='$link' class='$class'>" . $value . '</a>'; 
};



function img($src) {
    echo '<img src="' . $src . '" alt="images">';
    return $src;
};


function input($type, $placeholder = '', $id = '', $class = '', $required = false) {
    $requiredAttribute = $required ? 'required' : '';
    
    echo "<input type='$type' placeholder=\"$placeholder\" id=\"$id\" class=\"$class\" $requiredAttribute />";
};

function h1($value, $class = '') {
    echo "<h1 class='$class'>" . $value . '</h1>';
    return $value;
};

function h2($value, $class = '') {
    echo "<h2 class='$class'>" . $value . '</h2>';
    return $value;
};

function h3($value, $class = '') {
    echo "<h3 class='$class'>" . $value . '</h3>';
    return $value;
};

function h4($value, $class = '') {
    echo "<h4 class='$class'>" . $value . '</h4>';
    return $value;
};

function h5($value, $class = '') {
    echo "<h5 class='$class'>" . $value . '</h5>';
    return $value;
};

function p($value, $class = '') {
    echo "<p class='$class'>" . $value . '</p>';
    return $value;
};

function span($value, $class = '') {
    echo "<span class='$class'>" . $value . '</span>';
    return $value;
};



function i($value, $class = '', $aria_hidden = 'false') {
    echo "<i class='$class' aria-hidden='$aria_hidden'>" . $value . '</i>';
    return $value;
};

function ul($value, $class = '') {
    echo "<ul class='$class'>" . $value . '</ul>';
    return $value;
};

function li($value, $class = '') {
    echo "<li class='$class'>" . $value . '</li>';
    return $value;
};

function h2WithSpan($text, $spanText, $spanClass = '', $h2Class = '') {
    echo "<h2 class=\"$h2Class\">$text <span class=\"$spanClass\">$spanText</span></h2>";
};

// HEADER FUNCTION
function setheader($navbar1) {
    echo '<div class="hero_area">';
    echo '<header class="header_section">';
    echo '<div class="container-fluid">';
    echo '<nav class="navbar navbar-expand-lg custom_nav-container">';
    echo '<a class="logo" href="' . $navbar1[0]['link'] . '">';
    img('images/logo.png', 'Site logo');
    echo '</a>';
    echo '<span class=""></span>';
    echo '</button>';
    echo '<div class="collapse navbar-collapse" id="navbarSupportedContent">';
    echo '<ul class="navbar-nav">';

    foreach ($navbar1 as $navbar) {
        if ($navbar['name'] == 'logo') {
            continue;
        }

        echo '<li class="nav-item dropdown">';
        a($navbar['name'], $navbar['link'], 'nav-link');
        
        if (isset($navbar['submenu'])) {
            echo '<ul class="submenu">';
            foreach ($navbar['submenu'] as $submenu) {
                echo '<li class="submenu-item">';
                a($submenu['name'], $submenu['link'], 'submenu-link');
                echo '</li>';
            }
            echo '</ul>';
        }

        echo '</li>';
    }

    echo '</ul>';
    echo '</div>';
    echo '</nav>';
    echo '</div>';
    echo '</header>';
    echo '</div>';
}

//section1
function section1($section1) {
    echo '<section class="section1">';
    echo '<div class="section1-background">';
    echo '<img src="images/section-one-background.png" alt="">';
    echo '</div>';
    echo '<div class="section1-content">';
    echo '<p class="section-1">Start nurturing your skin with</p>';
    echo '<h2 class="section-title">Radiant Roots</h2>';
    echo '<p class="section-description">skincare line</p>';
    echo '<p class="section-description-2">Where every formula adds radiance to your skin <br> To nourish, protect, and enhance your beauty.</p>';
    
    echo '</div>'; 
    echo '</section>';
}


//section2

function section2($section2) {
    echo '<section class="section2">';

    echo '<div class="section2-content">';

    echo '<h1 class="section2-title">>>REASONS TO  SHOP >></h2>';

    echo '<div class="section2-1">';
    echo '<h2 class="section2-1-title">COLLECTING POINTS:</h2>';
    echo '<p class="section2-1-text">On each purchase you collect points which than can be exchanged for discount coupons.</p>';
    echo '</div>'; 

    echo '<div class="section2-2">';
    echo '<h2 class="section2-2-title">FREE DELIVERY:</h2>';
    echo '<p class="section2-2-text">For every purchase over  55$ shipping is free.</p>';
    echo '</div>'; 

    echo '<div class="section2-3">';
    echo '<h2 class="section2-3-title">CRUELTY FREE PRODUCTION:</h2>';
    echo '<p class="section2-3-text">Our skincare products are crafted without harming animals. Products are both effective and kind, giving you peace of mind with every use.</p>';
    echo '</div>'; 

    echo '<div class="section2-4">';
    echo '<h2 class="section2-4-title">CHARITY:</h2>';
    echo '<p class="section2-4-text">5% of our sales is donated to charity therefore with each product you purchase you are helping to make a positive impact on the lives of those in need.</p>';
    echo '</div>'; 

    echo '<div class="section2-5">';
    echo '<h2 class="section2-5-title">BENEFITS FOR SHARING WITH FRIENDS:</h2>';
    echo '<p class="section2-5-text">After following link you shared, If your friend registers and than purchases a product on our website, you automatically get 10% discount on every product.</p>';
    echo '</div>'; 
    
    echo '</div>'; 
    echo '</section>';
}

// section3
function section3($section3) {
    echo '<section class="section3">';
    
    // Corrected <h1> closing tag
    echo '<h1 class="section3-title">BESTSELLERS</h1>';

    echo '<div class="section3-container">';

    // Bestseller 1
    echo '<div class="bestseller1">';
    echo '<div class="bestseller1-img">';
    echo '<img src="images/body-lotion.png" alt="">';
    echo '</div>';
    
    echo '<div class="bestseller1-bottom">';
    echo '<div class="product-text">';
    echo '<h2 class="product-title">Body Lotion</h2>';
    echo '<p class="description">For Dry Skin</p>';
    echo '</div>';

    echo '<div class="product-more">';
    echo '<div class="product-more-icons">';
    echo '<img src="images/heart.png" alt="">';
    echo '<img src="images/cart.png" alt="">';
    echo '</div>';
    echo '<div class="product-seemore">';
    echo '<p class="bestseller1-text">see more</p>';
    echo '<img src="images/arrow.png" alt="">';
    echo '</div>';
    echo '</div>';
    echo '</div>';


    echo '</div>'; // Close bestseller1

    // Bestseller 2
    echo '<div class="bestseller2">';
    echo '<div class="bestseller2-img">';
    echo '<img src="images/cream-cleanser.png" alt="">';
    echo '</div>';


    echo '<div class="bestseller1-bottom">';
    echo '<div class="product-text">';
    echo '<h2 class="product-title">Cream Gel Cleanser</h2>';
    echo '<p class="description">For Very Dry And Dehydrated Skin</p>';
    echo '</div>';

    echo '<div class="product-more">';
    echo '<div class="product-more-icons">';
    echo '<img src="images/heart.png" alt="">';
    echo '<img src="images/cart.png" alt="">';
    echo '</div>';
    echo '<div class="product-seemore">';
    echo '<p class="bestseller2-text">see more</p>';
    echo '<img src="images/arrow.png" alt="">';
    echo '</div>';

    echo '</div>';
    echo '</div>';

    echo '</div>'; // Close bestseller2

    echo '</div>'; // Close section3-container
    echo '</section>';



// Section 4 Function
function section4($section4) {
    // Start the section
    echo '<section class="section4">';
    
    // Section Title
    echo '<h1 class="section4-title">NEWLY ADDED</h1>';
    
}

}

