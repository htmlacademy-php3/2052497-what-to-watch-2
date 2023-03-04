<?php

namespace Emv;

interface MovieInterface
{
    /**
     * Get movie info by id
     * @param string $idMovie id movie
     * @return ?array movie info
     */
    public function getInfo(string $idMovie): ?array;
}
