<?php

function order_pizza($pizza_type, $person)
{
  echo 'Creating new order... <br>';
  $toPrint = 'A ';
  $toPrint .= $pizza_type;
  $cost = calc_cost($pizza_type);

  $address = 'unknown';
  if ($person == 'koen') {
    $address = 'a yacht in Antwerp';
  } elseif ($person == 'manuele') {
    $address = 'somewhere in Belgium';
  } elseif ($person == 'students') {
    $address = 'BeCode office';
  }

  $toPrint .=   ' pizza should be sent to ' . $person . ". <br>The address: {$address}.";
  echo $toPrint;
  echo '<br>';
  echo 'The bill is €' . $cost . '.<br>';
  echo "Order finished.<br><br>";
}

function total_price($total)
{
  return $total;
}

function test($pizza_type)
{
  echo "Test: type is {$pizza_type}. <br>";
}

function calc_cost($pizza_type)
{
  switch ($pizza_type) {
    case 'marguerita':
      $cost = 5;
      break;
    case 'golden':
      $cost = 100;
      break;
    case 'calzone':
      $cost = 10;
      break;
    case 'hawai':
      throw new Exception('Computer says no');
      break;
    default:
      $cost = 'unknown';
      break;
  }
  return $cost;
}

function order_pizza_for_all()
{
  order_pizza('calzone', 'koen');
  order_pizza('marguerita', 'manuele');
  order_pizza('golden', 'students');
}

function make_all_happy($decision)
{
  if ($decision) {
    order_pizza_for_all();
  }
}

make_all_happy(true);
