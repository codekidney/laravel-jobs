<?php

namespace Codekidney\Jobs;

class Job 
{
    private $id;
    private $title;
    private $city;
    
    function __construct($id, $title, $city) {
        $this->id    = $id;
        $this->title = $title;
        $this->city  = $city;
    }
}
