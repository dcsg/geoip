<?php namespace Api\GeoIP;


class Client implements ClientInterface {

    /**
     * Source to fetch an ip FRom
     * @var Object
     */
    private $source;

    /**
     * Constructor
     * @param Sources\SourceInterface $source
     */
    public function __construct(Sources\SourceInterface $source) {
        $this->source = $source;
    }

    /**
     * Translate an IP into a country code
     * @param  String $ipaddress
     * @return Mixed
     */
    public function get($ipaddress) {
        $result = $this->source->fetch($ipaddress);

        if (!$result) {
            return false;
        }

        return $result;
    }
}
