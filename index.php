<?php

function currencyConverter($amount, $currency) {
    switch (strtolower($currency)) {
        case 'доллар':
            $rate = 1.2;
            break;
        case 'евро':
            $rate = 1.1;
            break;
        case 'фунт':
            $rate = 0.9;
            break;
        default:
            return 'Неверная валюта';
    }

    $convertedAmount = $amount * $rate;
    return "Конвертированная сумма: $convertedAmount $currency";
}


$amountToConvert = 8463; // Выберите количество денег
$selectedCurrency = 'евро'; // Выбрать в какую валюту хотите конвертировать
$result = currencyConverter($amountToConvert, $selectedCurrency);
echo $result;

?>