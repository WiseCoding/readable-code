<?php

function orderPizza($pizza_type, $person)
{
  $cost = calcCost($pizza_type);
  $address = getAddress($person);

  echo "Creating new order... <br>
    A $pizza_type pizza should be sent to $person. <br>
    The address: $address. <br>
    The bill is €$cost <br>
    Order finished.<br>
    <br>";
}

function getAddress($person)
{
  switch ($person) {
    case 'koen':
      return 'a yacht in Antwerp';
      break;
    case 'manuele':
      return 'somewhere in Belgium';
      break;
    case 'students':
      return 'BeCode office';
      break;
    default:
      return 'unknown';
      break;
  }
}

function totalPrice($total)
{
  return $total;
}

function calcCost($pizza_type)
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

function orderPizzaForAll()
{
  orderPizza('calzone', 'koen');
  orderPizza('marguerita', 'manuele');
  orderPizza('golden', 'students');
}

function makeAllHappy($decision)
{
  if ($decision) {
    orderPizzaForAll();
  }
}

makeAllHappy(true);
