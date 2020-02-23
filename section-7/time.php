<?php

/*
    Section 7: PHP Internal (in-built) Functions
    ============================================
*/

/*  Time Functions
    --------------
*/

$date = strtotime('11 March 2020');

$days = ($date - time()) / 60 / 60 / 24;

echo ceil($days);