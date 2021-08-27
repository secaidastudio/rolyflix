<?php
require_once("PayPal-PHP-SDK/autoload.php");

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'ASRkgxPEabyb16CeWMwEQtUZBH_BKM4LN10hZoG2QzgdvDOmjSfcxA4FPU5spwQxhX39TJGjWkpVXz3N',     // ClientID
        'EIqDifygoJ7fyJEUo1w-V8983kRjmKJVOQC8inN3ZeMWl0xe-wspU1i3E-vT71OirlggaUf5uROXRGe7'      // ClientSecret
    )
);
?>