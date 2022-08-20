<?php
/**
 * api
 */
function getBinanceEth()
{
    $url = 'https://api.binance.com/api/v3/ticker/price?symbol=ETHUSDT';
    $response = file_get_contents($url);
    echo $response;
}

getBinanceEth();
