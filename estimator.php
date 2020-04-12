<?php

/*{
region: {
name: "Africa",
avgAge: 19.7,
avgDailyIncomeInUSD: 5,
avgDailyIncomePopulation: 0.71
},
periodType: "days",
timeToElapse: 58,
reportedCases: 674,
population: 66622705,
totalHospitalBeds:13999999999
}
{
data: {}, // the input data you got
impact: {}, // your best case estimation
severeImpact: {} // your severe case estimation

}*/

class Region
{
    public $continent = "Africa";
    public $avgAge = 19.7;
    public $avgDailyIncome = 5;
    public $avgDailyIncomePopulation = 0.71;

    function __constructor(
        $nameContinent = "",
        $averageAge = "",
        $averageDailyIncome = "",
        $averageDailyIncomePopulation = ""
    ) {
        $this->continent = $nameContinent;
        $this->avgAge = $averageAge;
        $this->avgDailyIncome = $averageDailyIncome;
        $this->avgDailyIncomePopulation = $averageDailyIncomePopulation;
    }
}


class CovidData
{

    public  $periodType = "days";
    public $timeToElapse = 58;
    public $reportedCases = 674;
    public $population = 66622705;
    public $totalHospitalBeds = 1380614;


    function __construct($reportedCases)
    {
        $this->reportedCases = $reportedCases;
    }





    function currentInfected()
    {
        echo "TODAYS REPORTED CASES:" ."<br>";
        return $this->reportedCases ."<br>";
    }

    function impact()
    {
        echo "The impact of unknown infected people:" ."<br>";
                return $this->reportedCases * 10 ."<br>" ;
    }

    function severeimpact()
    {
        $date =  date('Y-m-d') . "<br>";
        echo "Todays reported cases date :" . $date;
        $create = date('Y-m-d', strtotime("+28 days"));


        echo "In 28 days to come which will be on this date:" . $create  . "<br>";
        echo "The infected people will be". "<br>";
        return $this->reportedCases * 512 . " people.";
    }
}
$case1 = new CovidData(3);
echo $case1->currentInfected();
echo $case1->impact();
echo $case1->severeimpact();
