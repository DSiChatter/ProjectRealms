<?php
set_time_limit(0);

$host = "127.0.0.1";
$port = 4096;

$socket = socket_create(AF_INET, SOCK_STREAM,0);
echo "Socket has been created.\n";

$result = socket_bind($socket,$host,$port);
echo "Socket running on port: ".$port."\n";

$result = socket_listen($socket,3);

$spawn = socket_accept($socket) or die("Could not establish a connection\n");

$input = socket_read($spawn, 1024) or die("Could not fetch connection information.\n");
$input = trim($input);

echo "Response: ".$input."\n";

$output = $input;

socket_write($spawn,$output,strlen($output)) or die("Could not send output data!\n");

socket_close($spawn);
socket_close($socket);

?>