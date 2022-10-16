<?php
    $remote_addr = $_SERVER["REMOTE_ADDR"];
    $request_time = date("d/M/Y H:i:s", $_SERVER["REQUEST_TIME"]);
    $request_method = $_SERVER["REQUEST_METHOD"];
    $request_uri = $_SERVER["REQUEST_URI"];
    $user_agent = $_SERVER["HTTP_USER_AGENT"];

    $log = serialize([$remote_addr, $request_time, $request_method, $request_uri, $user_agent]);

    system("echo '$log' >> access.log");
?>