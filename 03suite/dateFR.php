<?php 
    $fmt = datefmt_create( "fr-FR", 
    IntlDateFormatter::FULL,
    IntlDateFormatter::FULL,
    'Europe/Berlin',
    IntlDateFormatter::GREGORIAN,
    "EEEE d. LLLL Y");

    echo "Nous sommes le " . datefmt_format( $fmt ,time());
?>