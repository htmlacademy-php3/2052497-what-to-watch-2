<?php

namespace Emv;


class OmdbMovie implements MovieInterface
{
	private OmdbHttpClient $httpClient;

	public function __construct(OmdbHttpClient $httpClient)
	{
		$this->httpClient = $httpClient;
	}

	public function getInfo(string $idMovie): ?array
	{
		$content = json_decode($this->httpClient->request($idMovie), true);
		return $content;
	}
}
