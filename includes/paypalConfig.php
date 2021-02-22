<?php
require_once("PayPal-PHP-SDK/autoload.php");

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'AVRhLtXg1klEAQYXu86-DiP-Pet_ZYmZQ8vpIzt3gcFdVtG3dBRQbS3ZLl-OSKI5oLdKKHFzesKI4_fT',     // ClientID
        'EPN-Jhvtql-CtMhZW3sdXJEqNyfdqjLFLMNRVmp-lFs0Or1vY1XvA6VOQoW6sf50ARpJc6HWG4rW1hNT'      // ClientSecret
    )
);
?>