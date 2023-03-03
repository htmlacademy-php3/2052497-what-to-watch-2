<?php

namespace Emv;

interface HttpInterface
{
    /**
     * Send a request
     * @param string $idMovie id Movie
     * @return ?string response
     */
    public function request(string $idMovie): ?string;
}