<?php
// TODO: remove $type from order pizza function

function order_pizza($pizza_type, $person)
{
  $type = $pizza_type;
  echo 'Creating new order... <br>';
  $toPrint = 'A ';
  $toPrint .= $pizza_type;
  $cost = calc_cost($type);

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
  $cst = 'unknown';

  if ($pizza_type == 'marguerita') {
    $cost = 5;
  } else {
    if ($pizza_type == 'golden') {
      $cost = 100;
    }

    if ($pizza_type == 'calzone') {
      $cost = 10;
    }

    if ($pizza_type == 'hawai') {
      throw new Exception('Computer says no');
    }
  }

  return $cost;
}

function order_pizza_for_all()
{
  $test = 0;
  order_pizza('calzone', 'koen');
  order_pizza('marguerita', 'manuele');

  order_pizza('golden', 'students');
}

function make_all_happy($decision)
{
  if ($decision) {
    order_pizza_for_all();
  } else {
    // Should not do anything when false
  }
}

make_all_happy(true);
