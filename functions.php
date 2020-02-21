<?php

function fahrenheitToCelsius($temp)
{
  return ($temp - 32) * .5555;
}

function celsiusToFahrenheit($temp)
{
  return ($temp * 1.8) + 32;
}
?>