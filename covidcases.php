
<!DOCTYPE HTML>
<html>
    <head>
        <title>covidcases</title>
    </head>  
<body>
    <h1>Enter the Values to get the <b>estimation</b> of <b>covid19</b>  cases</h1>

<form method="get">
DAY: <input type="text" name="days"><br>
REPORTED CASES: <input type="number" name="cases"><br>
POPULATION: <input type="number" name="population"><br>
TOTAL HOSPITAL BEDS: <input type="number" name="beds"><br>
<input type="submit">
</form>

<p>THE CASES IS:</p>




<?php

if(isset($_GET['submit'])){
    $results=$_GET['days'];
    $results2=$_GET['cases'];
    $results3=$_GET['beds'];

return $results2;
}else {
    echo "invalid input";
}


// $covid = new CovidData();
// echo $covid->hello();

?>
</body>
</html>