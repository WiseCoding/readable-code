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
      return 5;
    case 'golden':
      return 100;
    case 'calzone':
      return 10;
    case 'hawai':
      throw new Exception('Computer says no');
    default:
      return 'unknown';
  }
}

function orderPizzaForAll()
{
  orderPizza('calzone', 'koen');
  orderPizza('marguerita', 'manuele');
  orderPizza('golden', 'students');
}

orderPizzaForAll();
