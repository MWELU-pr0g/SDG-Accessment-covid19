<?php
include 'includes/autoloader.inc.php';

use classes\covidestimator;




function covid19ImpactEstimator($data)
{
  $case1 = new Covidestimator($data);
  return $case1->getOutput();
}



