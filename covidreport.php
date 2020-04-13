<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Covid19 Estimator</title>
    <link rel="stylesheet" type="text/css"	 href="estimator.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<div class="containe-fluid">

    <div class="row">

        <div class="col">
      
        </div>
        <div class="col-6">
            <h2 class="breadcrumb"> SELECT YOUR COUNTRY AND REPORTED COVID19 CASES </h2>

                <form method="GET">
                <div class="form-group">
                        <label for="continent1">Select Country</label>
                        <select class="form-control">
                        <?php include "countries.php"; 
                         foreach ($countries as $key =>$country){ ?>
                            <option value="<?php echo $country;?>">
                            </option>
                        <?php }?>
                        </select>
                    
                    <!-- <label for="continent1">Continent</label>
                    <input name="continent" type="text" class="form-control" id="ontinent" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group">
                    <label for="avgAge">Average Age</label>
                    <input name="average age" type="number" class="form-control" id="avgAge" placeholder="Average Age">
                </div>
                <div class="form-group">
                    <label for="avgDaily">AverageDailyIncome</label>
                    <input name="averag daily" type="number" class="form-control" id="avgDaily" placeholder="DailyIncome">
                </div>
                <div class="form-group">
                    <label for="avgPop">AverageDailyIncomePopulatioin</label>
                    <input name="averagePopulation" type="number" class="form-control" id="avgPop" placeholder="AverageDailyIncomePopulatioin">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1"> keep me logged in </label>
                </div>
             
                <input type="submit" value="submit" class="btn btn-primary">
                </form>

        </div>

        <div class="col">
      
        </div>

    </div>
</div>

</body>





<?php
