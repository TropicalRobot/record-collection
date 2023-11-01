<?php

namespace App\Api;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class Discogs
{
    /**
     * @var Client
     */
    protected $http;

    /**
     * @var array
     */
    private $settings;

    /**
     * @return void
     */
    public function __construct()
    {
        $this->settings = config('discogs');
        $this->setupClient();
    }

    /**
     * @return void
     */
    public function setupClient()
    {
        $settings = [
            'base_uri' => $this->settings['api']['base_url'],
            'headers'  => [
                'Authorization'   => sprintf('Discogs key=%s, secret=%s', $this->settings['api']['key'], $this->settings['api']['secret']),
                'Accept'          => 'application/json',
                'Content-Type'    => 'application/json',
            ]
        ];

        $this->http = new Client($settings);
    }

    /**
     * @param string $uri
     * @param array $params
     * @param array $options
     *
     * @throws GuzzleException
     */
    public function get(string $uri, array $params = [], array $options = [])
    {
        if (! empty($params)) {
            $options['query'] = $params;
        }

        $response = $this->http->get($uri, $options);

        return json_decode($response->getBody(), true);
    }

    /**
     * @param string $uri
     * @param array $params
     * @param array $options
     *
     * @throws GuzzleException
     */
    public function search(string $q, array $params = [], array $options = [])
    {
        if (! empty($params)) {
            $options['query'] = $params;
        }

        if (! empty($q)) {
            $options['query']['q'] = $q;
        }

        $response = $this->http->get('database/search', $options);

        return json_decode($response->getBody(), true);
    }
}
