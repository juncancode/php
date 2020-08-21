<?php
    // echo date('d'); // Day
    // echo date('m'); // Month
    // echo date('Y'); // Year
    // echo date('1');    // Day of the Week

    // echo date('Y / m / d');
    // echo date('m-d-y');

    // echo date('h'); // Hour
    // echo date('i'); // Min
    // echo date('s'); // Seconds
    // echo date('a'); // AM or PM

    // Set Time Zone
    date_default_timezone_set('America/Los_Angeles');

    // echo date('h:i:sa');

    /*
    Unix timestamp is a longer integer containing the number of seconds between the Unix Epoch (January 1 1970 00:00:00 GMT) and the time specified
    */

    $timestamp = mktime(10,14,54,8,05,1985);
    
    // echo $timestamp;

    // echo date('m/d/y h:i:sa', $timestamp);

    $timestamp2 = strtotime('7:00pm Jaunary 08 2016');
    $timestamp3 = strtotime('tomorrow');
    $timestamp4 = strtotime('Next Sunday');
    $timestamp5 = strtotime('+2 Months');
    // echo $timestamp2;

    echo date('m/d/y h:i:sa', $timestamp5);
?>