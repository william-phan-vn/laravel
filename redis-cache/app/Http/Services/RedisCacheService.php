<?php

use Illuminate\Redis\Database;
use Predis\ClientInterface;

class RedisCacheService
{
    /**
     * @var ClientInterface
     */
    private $connection;

    public function __construct(Database $connection)
    {
        $this->connection = $connection->connection('cache');

    }

    public function getRedirectsByDomain($domain)
    {
        $command = $this->connection->createCommand($domain);
        return $this->connection->executeCommand($command);
    }
}
