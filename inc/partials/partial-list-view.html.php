<?php

function get_list_view_html($product)
{
  $output = '';
  $output .= "<li>";
  $output .= '<a href="' . BASE_URL . 'shirts/' . $product['sku'] . '/">';
  $output .= '<img src="' . BASE_URL . $product['img'] . '">';
  $output .= '<p>View Details</p>';
  $output .= '</a>';
  $output .= '</li>';

  return $output;
}