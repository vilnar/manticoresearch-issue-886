<?php

function generateIntToString($to)
{
    return rand(0, $to) . "";
}

for ($n = 1; $n <= 10000; $n++) {
    printf(
        "%s|%s\n",
        generateIntToString(1000), // id
        generateIntToString(1000)  // producer_id
    );
}
