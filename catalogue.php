<?php
include('functions.php');
include('data.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Radiant Roots</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lancelot&family=Elsie+Swash+Caps:wght@400;900&family=Hepta+Slab:wght@1..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

<?php
    // Call the navbar header (ensure this is working correctly)
    setheader($navbar1); 
?>

<!-- Render catalogue -->
<section class="catalogue">
    <div class="catalogue-container">
        <?php
            // Loop through all products and render them
            foreach ($products as $product) {
                renderProduct($product); // Call renderProduct function for each product
            }
        ?>
    </div>
</section>

</body>
</html>
