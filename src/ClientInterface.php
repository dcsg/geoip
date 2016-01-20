<?php namespace Api\GeoIP;

interface ClientInterface {

    /**
     * Translate an IP into a country code
     * @param  String $ipaddress
     * @return Mixed
     */
    public function get($ipaddress);
}
