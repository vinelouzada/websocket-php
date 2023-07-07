<?php

use Ratchet\Server\IoServer;

require_once 'vendor/autoload.php';
require_once 'src/ChatComponent.php';


$objectStorage = new SplObjectStorage();
$chatComponent = new ChatComponent($objectStorage);

$server = IoServer::factory(
    new Ratchet\Http\HttpServer(
        new Ratchet\WebSocket\WsServer($chatComponent)
    ),
        8002
);

$server->run();