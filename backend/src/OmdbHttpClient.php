<?

namespace Emv;

use GuzzleHttp\Client;

class OmdbHttpClient implements HttpInterface
{
    private string $apiKey = '470880ca';
    private string $url = 'http://www.omdbapi.com/';

    public function request(string $idMovie): string
    {
        $client = new Client();

        $response = $client->request('GET', $this->url, [
            'query' => [
                'apikey' => $this->apiKey,
                'i' => $idMovie,
                'plot' => 'full',
            ]
        ]);

        return $response->getBody()->getContents();
    }
}
