<?php

namespace Codekidney\Jobs;

use Codekidney\Jobs\Job;

class Jobs {

    private $base_url = 'https://demo.appmanager.pl/api/v1/ads?_format=json';

    /**
     * Set base URL and download content.
     *
     * @return json
     */
    private function getFeed() {
        $feed = file_get_contents($this->base_url);
        return $feed;
    }

    /**
     * Parse feed to object
     *
     * @return object
     */
    public function parseFeed() {
        $json = $this->getFeed();
        $object = json_decode($json);
        return $object->data;
    }

    /**
     * Pobierz listę i sformatuj zwracane dane.
     *
     * @return array
     */
    public function getList() {
        $jobs = array();
        $items = $this->parseFeed();
        foreach ($items as $item) {
            $job = new Job($item->id, $item->admin_name, $item->cities[0]);
            $jobs[] = $job;
        }
        return $jobs;
    }
}
    