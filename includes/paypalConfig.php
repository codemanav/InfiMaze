<?php
require_once("PayPal-PHP-SDK/autoload.php");

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'AciUJnG7rNWQ2Osa4noMX5sy3KAFfQvljfHG1VqC7JGF3lce7ycrfyoAVJ3hDJnUgGEmc2fQhD1slVfO',     // ClientID
        'EKHzSDpHUK_uTuaMYhhFYGHeBPP974Qptib5WFGVcm_7rKO9hXr6MxFMZeRT6mVAj6keoc572a5Z08tJ'      // ClientSecret
    )
);
?>