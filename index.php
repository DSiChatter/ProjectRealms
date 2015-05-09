<?php
$server = "127.0.0.1";
$port = 4096;

$message = "Hellow Server, Its raining outside!";

$socket = socket_create(AF_INET,SOCK_STREAM,0);

$result = socket_connect($socket,$host,$port) or die("Could not connect to server!");

socket_write($socket,$message,strlen($message)) or die("Could not send message");

$result = socket_read($socket,1024);

echo "Reply from server:".$result;

socket_close($socket);
?>