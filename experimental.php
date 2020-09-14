<?php

// fw = for who
function order_pizza($pizzatype, $fw)
{

  $type = $pizzatype;
  echo 'Creating new order... <br>';
  $toPrint = 'A ';
  $toPrint .= $pizzatype;
  $p = calc_cts($type);

  $address = 'unknown';
  if ($fw == 'koen') {
    $address = 'a yacht in Antwerp';
  } elseif ($fw == 'manuele') {
    $address = 'somewhere in Belgium';
  } elseif ($fw == 'students') {
    $address = 'BeCode office';
  }

  $toPrint .=   ' pizza should be sent to ' . $fw . ". <br>The address: {$address}.";
  echo $toPrint;
  echo '<br>';
  echo 'The bill is €' . $p . '.<br>';




  echo "Order finished.<br><br>";
}

function total_price($p)
{
  return $p;
}

function test($p_type)
{
  echo "Test: type is {$p_type}. <br>";
}

function calc_cts($p_type)
{
  $cst = 'unknown';

  if ($p_type == 'marguerita') {
    $cst = 5;
  } else {
    if ($p_type == 'golden') {
      $cst = 100;
    }

    if ($p_type == 'calzone') {
      $cst = 10;
    }

    if ($p_type == 'hawai') {
      throw new Exception('Computer says no');
    }
  }

  return $cst;
}

function order_pizza_for_all()
{
  $test = 0;
  order_pizza('calzone', 'koen');
  order_pizza('marguerita', 'manuele');

  order_pizza('golden', 'students');
}

function make_all_happy($do_it)
{
  if ($do_it) {
    order_pizza_for_all();
  } else {
    // Should not do anything when false
  }
}

make_all_happy(true);
