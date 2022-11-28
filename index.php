<?php
$nb_riel = 2103942;
$nb_kyat = 19092;
$nb_krones = 109;
$nb_lek = 9094;

echo "Currencies :\n" . "$nb_riel riel\n" . "$nb_kyat kyat\n" . "$nb_krones krones\n" . "$nb_lek lek\n";

$rate_riel = 4146.64;
$rate_kyat = 2102.84;
$rate_krones = 9.90996;
$rate_lek = 112.456;

$exchange_riel = $nb_riel / $rate_riel;
$exchange_kyat = $nb_kyat / $rate_kyat;
$exchange_krones = $nb_krones / $rate_krones;
$exchange_lek = $nb_lek / $rate_lek;

echo "\nCurrencies traded in USD :\n" . "riel to USD : $nb_riel to " . substr($exchange_riel, 0, 5) . "\nkyat to USD : $nb_kyat to " . substr($exchange_kyat, 0, 5) .
    "\nkrones to USD : $nb_krones to " . substr($exchange_krones,  0, 5) . "\nlek to USD : $nb_lek to " . substr($exchange_lek,  0, 5);

$exchange_riel -= 1;
$exchange_kyat -= 1;
$exchange_krones -= 1;
$exchange_lek -= 1;

echo "\n\nFinal amout with a flat 1$ fee per conversion :\n" . substr($exchange_riel, 0, 5) . "\n" . substr($exchange_kyat, 0, 5) . "\n" . substr($exchange_krones,  0, 5) . "\n" . substr($exchange_lek,  0, 5);
