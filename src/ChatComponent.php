<?php

#[AllowDynamicProperties]
class ChatComponent implements \Ratchet\MessageComponentInterface
{
    private SplObjectStorage $connections;

    public function __construct(SplObjectStorage $objectStorage)
    {
        $this->connections = $objectStorage;
    }

    function onOpen(\Ratchet\ConnectionInterface $connection)
    {
        echo "Nova conexão aceita " . PHP_EOL;
        $this->connections->attach($connection);
    }

    function onClose(\Ratchet\ConnectionInterface $connection)
    {
        echo "Conexão encerrada " . PHP_EOL;
        $this->connections->detach($connection);
    }

    function onError(\Ratchet\ConnectionInterface $connection, \Exception $e)
    {
        echo "Error: " . $e->getTraceAsString();
    }

    function onMessage(\Ratchet\ConnectionInterface $from, $msg)
    {
        /** @var \Ratchet\ConnectionInterface $connection */
        foreach ($this->connections as $connection){
            if ($connection !== $from){
                $connection->send((string) $msg);
            }
        }
    }
}