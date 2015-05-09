<?php
require_once "websockets.php";

class echoServer extends WebSocketServer {
    protected function process($user,$message) {
        $this->send($user,$message);
    }

    protected function connected($user) {

    }

    protected function closed($user) {

    }
}

$server = new echoServer("localhost",25560);

try {
    $server->run();
}catch(Exception $e) {}
?>