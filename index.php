<?php
/*
 * This is the server that will handle
 * Connections for the ProjectRealms server.
 * This was coded by Kyle Staschke and
 * is not to be used by anyone else!!
 */
error_reporting(E_ALL);
set_time_limit(0);
ob_implicit_flush();

$socket = socket_create(AF_INET, SOCK_STREAM, 0);

$port = 25560;

if(!($socket = socket_create(AF_INET, SOCK_STREAM, 0))) {
    die("Could not open socket.");
}
echo "Socket created!\n";

if(!(socket_connect($socket, "74.125.235.20", 80))) {
    die("Could not send data!");
}
echo "Data send to ip";

?>