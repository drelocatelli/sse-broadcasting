<?php

header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

function sendDate($data) {
    echo "data: $data\n\n";
    ob_flush();
    flush();
}

while(true) {
    $currentDate = date('Y-m-d H:i:s');
    sendDate($currentDate);

    sleep(1);
}