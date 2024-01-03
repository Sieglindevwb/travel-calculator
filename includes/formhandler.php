<?php

// var_dump([$_SERVER["REQUEST_METHOD"]]);
if ($_SERVER["REQUEST_METHOD"] == "POST") {

     $amount = htmlspecialchars($_POST["amount"]);
     $selectMoney = htmlspecialchars($_POST["selectMoney"]);
     $convertMoney = htmlspecialchars($_POST["convertMoney"]);

     if (!is_numeric($amount)) {
        echo "Please enter a valid numeric amount.";
        header("Location: ../index.php");
        exit();
    }

     $eurosToDollars=1.09;
     $dollarsToEuros=0.91;
     $eurosToYen=156.05;
     $yenToEuros=0.0064;
     $dollarsToYen=142.65;
     $yenToDollars=0.0070;

     $convertEuroToDollar=$amount*$eurosToDollars;
     $convertEuroToYen=$amount*$eurosToYen;

     $convertDollarToEuro=$amount*$dollarsToEuros;
     $convertDollarToYen=$amount*$dollarsToYen;

     $convertYenToDollar=$amount*$yenToDollars;
     $convertYenToEuro=$amount*$yenToEuros;

     $result = "";
    
    if ($selectMoney == "euros" && $convertMoney == "dollar") {
        $result = "$amount Euros contain $convertEuroToDollar Dollars";
    } else if ($selectMoney == "dollar" && $convertMoney == "euros") {
        $result = "$amount Dollars contain $convertDollarToEuro Euros";
    } else if ($selectMoney == "euros" && $convertMoney == "yen") {
        $result = "$amount Euros contain $convertEuroToYen Yen";
    } else if ($selectMoney == "yen" && $convertMoney == "euros") {
        $result = "$amount Yen contain $convertYenToEuro Euros";
    } else if ($selectMoney == "dollar" && $convertMoney == "yen") {
        $result = "$amount Dollar contain $convertDollarToYen Yen";
    } else if ($selectMoney == "yen" && $convertMoney == "dollar") {
        $result = "$amount Yen contain $convertYenToDollar Dollar";
    } else {
        $result = "Please select another currency to be converted";
    } 

    header("Location: ../index.php?result=" . urlencode($result));
    exit();

 } else {
    // Handle cases where the form is not submitted via POST
    echo "Invalid request method.";
    header("Location: ../index.php");
    exit();
 }