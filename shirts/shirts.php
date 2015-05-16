<?php
require_once '../inc/config.php';
require_once ROOT_PATH . 'inc/products.php';
require_once ROOT_PATH . 'inc/partials/partial-list-view.html.php';

// Get current page number form query string. Set to 1 if blank.
if (empty($_GET['pg'])) {
  $current_page = 1;
} else {
  $current_page = $_GET['pg'];
}

// Set invalid query strings like 'foo' to 0 and remove decimals
$current_page = intval($current_page);

$total_products = get_products_count();
$products_per_page = 8;
$total_pages = ceil($total_products / $products_per_page);

// Redirect too-large page numbers to the last shirts page and too-small numbers to the first page.
if ($current_page > $total_pages) {
  header("Location: ./?pg=" . $total_pages);
} elseif ($current_page < 1) {
  header("Location: ./");
}

// Determine the start and end shirt for the first page.
$start = ($products_per_page * ($current_page - 1)) + 1;
$end = $products_per_page * $current_page;
if ($end > $total_products) {
  $end = $total_products;
}

$page_title = "Mike's Full Catalog of Shirts";
$section = 'shirts';
$products = get_products_subset($start, $end);
include ROOT_PATH . 'inc/header.php';
?>

  <div class="section shirts page">

    <div class="wrapper">
    
      <h1>Mike&rsquo;s Full Catalog of Shirts</h1>

      <?php include ROOT_PATH . 'inc/partials/partial-list-navigation.html.php'; ?>

      <ul class="products">
        <?php
          foreach ($products as $product) {
            echo get_list_view_html($product);
          }
        ?>
      </ul>

      <?php include ROOT_PATH . 'inc/partials/partial-list-navigation.html.php'; ?>

    </div>

  </div>

<?php include ROOT_PATH . 'inc/footer.php'; ?>