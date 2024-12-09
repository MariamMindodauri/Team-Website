<?php

function a($value, $link, $class = '') {
    echo "<a href='$link' class='$class'>" . $value . '</a>'; 
}

function img($src) {
    echo '<img src="' . $src . '" alt="images">';
    return $src;
}

function input($type, $placeholder = '', $id = '', $class = '', $required = false) {
    $requiredAttribute = $required ? 'required' : '';
    echo "<input type='$type' placeholder=\"$placeholder\" id=\"$id\" class=\"$class\" $requiredAttribute />";
}

function h1($value, $class = '') {
    echo "<h1 class='$class'>" . $value . '</h1>';
    return $value;
}

function h2($value, $class = '') {
    echo "<h2 class='$class'>" . $value . '</h2>';
    return $value;
}

function h3($value, $class = '') {
    echo "<h3 class='$class'>" . $value . '</h3>';
    return $value;
}

function h4($value, $class = '') {
    echo "<h4 class='$class'>" . $value . '</h4>';
    return $value;
}

function h5($value, $class = '') {
    echo "<h5 class='$class'>" . $value . '</h5>';
    return $value;
}

function p($value, $class = '') {
    echo "<p class='$class'>" . $value . '</p>';
    return $value;
}

function span($value, $class = '') {
    echo "<span class='$class'>" . $value . '</span>';
    return $value;
}

function i($value, $class = '', $aria_hidden = 'false') {
    echo "<i class='$class' aria-hidden='$aria_hidden'>" . $value . '</i>';
    return $value;
}

function ul($value, $class = '') {
    echo "<ul class='$class'>" . $value . '</ul>';
    return $value;
}

function li($value, $class = '') {
    echo "<li class='$class'>" . $value . '</li>';
    return $value;
}

function h2WithSpan($text, $spanText, $spanClass = '', $h2Class = '') {
    echo "<h2 class=\"$h2Class\">$text <span class=\"$spanClass\">$spanText</span></h2>";
}

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

// Section 1
function section1() {
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

// Section 2
function section2() {
    echo '<section class="section2">';
    echo '<div class="section2-content">';
    echo '<h1 class="section2-title">>>REASONS TO SHOP >></h1>';
    echo '<div class="section2-1">';
    echo '<h2 class="section2-1-title">COLLECTING POINTS:</h2>';
    echo '<p class="section2-1-text">On each purchase you collect points which than can be exchanged for discount coupons.</p>';
    echo '</div>';
    echo '<div class="section2-2">';
    echo '<h2 class="section2-2-title">FREE DELIVERY:</h2>';
    echo '<p class="section2-2-text">For every purchase over 55$ shipping is free.</p>';
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

function renderProduct($product) {
    echo '<div class="product">';
    echo '<div class="product-img">';
    echo '<img src="' . $product['img'] . '" alt="' . $product['title'] . '">';
    echo '</div>';
    echo '<div class="product-top">';
    echo '<h2>' . $product['title'] . '</h2>';
    echo '<div class="icons">';
    echo '<img src="images/heart.png" alt="Heart Icon">';
    echo '<img src="images/cart.png" alt="Cart Icon">';
    echo '</div>';
    echo '</div>';
    echo '<div class="product-bottom">';
    echo '<p>' . $product['description'] . '</p>';
    echo '<div class="see-more">';
    echo '<span>see more <i class="bx bx-right-arrow-alt"></i></span>';
    // echo '<img src="images/arrow.png" alt="Arrow Icon">';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}


// Section 3
function section3() {
    echo '<section class="section3">';
    echo '<h1 class="section3-title">BESTSELLERS</h1>';
    echo '<div class="section3-container">';

    foreach ($GLOBALS['products'] as $product) {
        if ($product['title'] == 'Body Lotion' || $product['title'] == 'Cream Gel Cleanser') {
            renderProduct($product);
        }
    }

    echo '</div>';
    echo '</section>';
}



// Section 4
function section4() {
echo '<section class="section4-title">NEW ARRIVALS</section>';
echo '<img src="images/section4-line.png" alt="" class="">';
echo '<div class="section4-up">';
echo '    <div class="section4-serum">';
echo '        <img src="images/first-girl.png" alt="First Girl" class="section4-image">';
        
foreach ($GLOBALS['products'] as $product) {
    if ($product['title'] == 'Serum') {
        echo renderProduct($product);
    }
}

echo '    </div>'; 
echo '</div>';

echo '<div class="section4-down">';
echo '    <div class="section4-cream">';
echo '        <img src="images/second-girl.png" alt="Second Girl" class="section4-image">';

foreach ($GLOBALS['products'] as $product) {
    if ($product['title'] == 'Face Cream-Gel') {
        echo renderProduct($product);
    }
}

echo '    </div>';  
echo '</div>';

}


//Section Five
function section5() {
    echo '<section>';
    echo '<div class="section5">';
    echo '<div class="section5-header">';
    echo '<img src="images/scrab-texture.png" alt="">';
    echo '<h1>WEEKLY SKINCARE TIPS FROM EXPERTS</h1>';
    echo '</div>';
    echo '<div class="section5-data">';
    echo '<div class="section5-img">';
    echo '<img src="images/third-girl.png" alt="">';
    echo '</div>';
    echo '<div class="section5-content">';
    echo '<div class="correct-1">';
    echo '<h2>CORRECT USE OF SERUM</h2>';
    echo '<img src="images/cream-texture-1.png" alt="">';
    echo '</div>';
    echo '<div class="correct-1-content">';
    echo '<p>Apply serum on clean, slightly damp skin for better absorption. Use a few drops, gently patting into your skin without rubbing. Follow with moisturizer to seal it in. Common mistakes include using too much product, skipping moisturizer, and layering incompatible products. Always patch-test and avoid mixing strong actives unless advised.</p>';
    echo '<img src="images/hands1.png" alt="">';
    echo '</div>';
    echo '<div class="correct-2">';
    echo '<img src="images/cream-texture-2.png" alt="">';
    echo '<h2>CORRECT USE OF BODY SCRUB</h2>';
    echo '</div>';
    echo '<div class="correct-2-content">';
    echo '<p>Use body scrubs 1-2 times weekly to exfoliate dead skin, improve texture, and boost circulation. Avoid harsh scrubs on sensitive or inflamed areas. Apply on damp skin with gentle, circular motions. Rinse thoroughly, then moisturise to lock in hydration. Choose scrubs suited to your skin type for best results and avoid these mistakes: Over-exfoliating, Using scrub on dry skin, Scrubbing sensitive areas, Skipping moisturiser, Using harsh scrubs.</p>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</section>'; 
}




// Footer Section 
function setFooter() {
    echo '<footer>';
    echo '<div class="footer">';
        echo '<div class="footer-up">';
    echo '<div class="logo">';
    echo '<a href="#"><img src="images/logo.png" alt=""></a>';
    echo '</div>';
    echo '<div class="footer-nav">';
    echo '<a href="#">ABOUT US</a>';
    echo '<a href="#">SHIPPING INFO</a>';
    echo '<a href="#">JOIN US</a>';
    echo '</div>';
    echo '<div class="footer-icons">';
    echo '<a href="#"><img src="images/insta-icon.png" alt=""></a>';
    echo '<a href="#"><img src="images/tiktok-icon.png" alt=""></a>';
    echo '<a href="#"><img src="images/facebook-icon.png" alt=""></a>';
    echo '</div>';
    echo '</div>';
        echo '<div class="footer-description">';
    echo '<hr style="border: 1px solid black; width: 364px; margin: 0 auto;">';
    echo '<p>© ' . date('Y') . '. Radiant Roots. By Mariam Mindodauri and Giorgi Baramidze.</p>';
    echo '</div>';
    
    echo '</div>';
    echo '</footer>';
}
?>

