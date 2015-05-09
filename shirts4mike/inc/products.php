<?php



function get_products_search($search)
{
  $results = array();
  $all = get_products_all();

  foreach ($all as $product) {
    if (stripos($product['name'], $search) !== false || stripos($product['sku'], $search) !== false) {
      $results[] = $product;
    }
  }
  return $results;
}

function get_products_count()
{
  $all = get_products_all();
  $count = count($all);
  return $count;
}

function get_products_subset($position_start, $position_end)
{
  $subset = array();
  $all = get_products_all();
  $position = 0;

  foreach ($all as $product) {
    $position += 1;
    if ($position >= $position_start && $position <= $position_end) {
      $subset[] = $product;
    }
  }
  return $subset;
}

function get_products_all()
{
  $products = array();

  $products[101] = array(
    'name' => "Logo Shirt, Red",
    'price' => 18,
    'paypal' => '4Y6CYFJSXCFKJ'
  );
  $products[102] = array(
    'name' => "Mike the Frog Shirt, Black",
    'price' => 20,
    'paypal' => '5WPWEY6R4LQEA'
  );
  $products[103] = array(
    'name' => 'Mike the Frog Shirt, Blue',
    'price' => 20,
    'paypal' => 'XHXVDVCYL2H7N'
  );
  $products[104] = array(
    'name' => 'Logo Shirt, Green',
    'price' => 18,
    'paypal' => 'N6Y2YW4HLST26'
  );
  $products[105] = array(
    'name' => 'Mike the Frog Shirt, Yellow',
    'price' => 25,
    'paypal' => 'RGCFGEMLGUQSW'
  );
  $products[106] = array(
    'name' => 'Logo Shirt, Gray',
    'price' => 20,
    'paypal' => 'W5C94RN62SM8G'
  );
  $products[107] = array(
    'name' => 'Logo Shirt, Teal',
    'price' => 20,
    'paypal' => 'N8KDHPEN8H9W8'
  );
  $products[108] = array(
    'name' => 'Mike the Frog Shirt, Orange',
    'price' => 25,
    'paypal' => 'QCERCFB6FWFFU',
    'sizes' => array('Large', 'X-Large')
  );
  $products[109] = array(
    'name' => 'Get Coding Shirt, Gray',
    'price' => 20,
    'paypal' => 'NCLLNPCU5FW2U'
  );
  $products[110] = array(
    'name' => 'HTML5 Shirt, Orange',
    'price' => 22,
    'paypal' => 'MY9HFFVB2MWA8'
  );
  $products[111] = array(
    'name' => 'CSS3, Gray',
    'price' => 22,
    'paypal' => 'HRKSEFB67F7UW'
  );
  $products[112] = array(
    'name' => 'HTML5 Shirt, Blue',
    'price' => 22,
    'paypal' => 'E7WKEPNBYEHG4'
  );
  $products[113] = array(
    'name' => 'CSS3 Shirt, Black',
    'price' => 22,
    'paypal' => 'P8J6D387QM446'
  );
  $products[114] = array(
    'name' => 'PHP Shirt, Yellow',
    'price' => 24,
    'paypal' => '4TLBMFZFR9396'
  );
  $products[115] = array(
    'name' => 'PHP Shirt, Purple',
    'price' => 24,
    'paypal' => 'CBMXSEZ5NTUSG'
  );
  $products[116] = array(
    'name' => 'PHP Shirt, Green',
    'price' => 24,
    'paypal' => 'KXZ3RKYJDD9E2'
  );
  $products[117] = array(
    'name' => 'Get Coding Shirt, Red',
    'price' => 20,
    'paypal' => 'J3ZLB9LRLL9JC'
  );
  $products[118] = array(
    'name' => 'Mike the Frog Shirt, Purple',
    'price' => 25,
    'paypal' => '9CU58VK2NM8PS'
  );
  $products[119] = array(
    'name' => 'CSS3 Shirt, Purple',
    'price' => 22,
    'paypal' => 'V2JLL295WHF7C'
  );
  $products[120] = array(
    'name' => 'HTML5 Shirt, Red',
    'price' => 22,
    'paypal' => 'SL8CDLY2PXESC'
  );
  $products[121] = array(
    'name' => 'Get Coding Shirt, Blue',
    'price' => 20,
    'paypal' => '38MPK9GNRZC44'
  );
  $products[122] = array(
    'name' => 'PHP Shirt, Gray',
    'price' => 24,
    'paypal' => 'CRP2DPYVNE89N'
  );
  $products[123] = array(
    'name' => 'Mike the Frog Shirt, Green',
    'price' => 25,
    'paypal' => 'T53VPK2D7G422'
  );
  $products[124] = array(
    'name' => 'Logo Shirt, Yellow',
    'price' => 20,
    'paypal' => 'QDEFNS8U9LATG'
  );
  $products[125] = array(
    'name' => 'CSS3 Shirt, Blue',
    'price' => 22,
    'paypal' => '7NGQ8CENPZK28'
  );
  $products[126] = array(
    'name' => 'Doctype Shirt, Green',
    'price' => 25,
    'paypal' => 'Q4X98PLUQN4KJ'
  );
  $products[127] = array(
    'name' => 'Mike the Frog Shirt, Purple',
    'price' => 20,
    'paypal' => 'A88WURZB2RYKC'
  );
  $products[128] = array(
    'name' => 'Doctype Shirt, Purple',
    'price' => 25,
    'paypal' => 'ELKLL6Q8XDW4U'
  );
  $products[129] = array(
    'name' => 'Get Coding Shirt, Green',
    'price' => 20,
    'paypal' => 'TK23PZ7JCHPKW'
  );
  $products[130] = array(
    'name' => 'HTML5 Shirt, Teal',
    'price' => 22,
    'paypal' => 'P63JKCRYHL3VS'
  );
  $products[131] = array(
    'name' => 'Logo Shirt, Orange',
    'price' => 20,
    'paypal' => '6JSND6XEZHPGU'
  );
  $products[132] = array(
    'name' => 'Mike the Frog Shirt, Red',
    'price' => 25,
    'paypal' => 'X3HW2K35AYFWW'
  );

  foreach ($products as $product_id => $product) {
    $products[$product_id]['sku'] = $product_id;
    $products[$product_id]['img'] = 'img/shirts/shirt-' . $product_id . '.jpg';
    if (!isset($products[$product_id]['sizes'])) {
      $products[$product_id]['sizes'] = array('Small', 'Medium', 'Large', 'X-Large');
    }
  }

  return $products;
}