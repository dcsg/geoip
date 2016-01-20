<?php namespace Api\GeoIP\Sources;

use \GuzzleHttp\Client;

class IpInfo implements SourceInterface {

    private $client;
    private $host = "http://ipinfo.io/";
    private $token = "?token=cb0f8d7c6dfd15";

    public function __construct() {
        $this->client = new Client();
    }

    public function fetch($ipaddress) {
        $response = $this->client->get($this->host . $ipaddress . $this->token);

        if ($response->getStatusCode() != 200) {
            return false;
        }

        $body = $response->json();
        return ['ip' => $body['ip'], 'country' => $body['country']];
    }
}
