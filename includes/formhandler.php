<?php

// var_dump([$_SERVER["REQUEST_METHOD"]]);
if ($_SERVER["REQUEST_METHOD"] == "POST") {

     $amount = htmlspecialchars($_POST["amount"]);
     $selectMoney = htmlspecialchars($_POST["selectMoney"]);
     $convertMoney = htmlspecialchars($_POST["convertMoney"]);

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

    
    if ($selectMoney == "euros" && $convertMoney == "dollar") {
        echo "$amount Euros contain $convertEuroToDollar Dollars";
    } else if ($selectMoney == "dollar" && $convertMoney == "euros") {
        echo "$amount Dollars contain $convertDollarToEuro Euros";
    } else if ($selectMoney == "euros" && $convertMoney == "yen") {
        echo "$amount Euros contain $convertDollarToEuro Yen";
    } else if ($selectMoney == "yen" && $convertMoney == "euros") {
        echo "$amount Yen contain $convertDollarToEuro Euros";
    } else if ($selectMoney == "dollar" && $convertMoney == "yen") {
        echo "$amount Dollar contain $convertDollarToEuro Yen";
    } else if ($selectMoney == "yen" && $convertMoney == "dollar") {
        echo "$amount Yen contain $convertDollarToEuro Dollar";
    } else {
        echo "Please select another currency to be converted";
    }

 }