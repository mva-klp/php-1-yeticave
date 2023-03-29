<?php
function format_price($price)
{
  $price = ceil($price);
  if ($price > 1000) {
    $price = number_format($price, 0, '', ' ');
  }
  return $price . ' ₽';
}

function get_time_left($exp_date)
{
  $current_datetime = date_create("now");
  $final_date = date_create($exp_date);
  if ($final_date > $current_datetime) {
    $diff = date_diff($current_datetime, $final_date);
    $hours = str_pad($diff->h + $diff->days * 24, 2, "0", STR_PAD_LEFT);
    $minutes = str_pad($diff->i, 2, "0", STR_PAD_LEFT);
    return ['hours' => $hours, 'minutes' => $minutes];
  } else {
    return ['hours' => '00', 'minutes' => '00'];
  }
}
