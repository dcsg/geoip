<?php namespace Api\GeoIP\Sources;

interface SourceInterface {
    /**
     * Fetches the remote API for the API address
     * @param  String $ipaddress
     * @return Mixed
     */
    public function fetch($ipaddress);
}
